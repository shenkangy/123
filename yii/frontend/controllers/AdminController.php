<<<<<<< HEAD
<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class AdminController extends Controller
{
    public function actionAdmin_add(){
        return $this->renderPartial('admin_add');
    }
    public function actionAdmin_list(){
        return $this->renderPartial('admin_list');
    }
=======
<?php
namespace frontend\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\db\Query;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

class AdminController extends Controller{
	/**
	*ajax请求
	*登录
	*@XIA
	*@return:int
	*/
	public function actionLogin(){
		$request=Yii::$app->request;
		$session = Yii::$app->session;

		if ($request->isPost) {
			$admin_name = $request->post("admin_name");
			$admin_pwd = $request->post("admin_pwd");
			$admin_pwd = md5($admin_pwd);
			// echo $admin_pwd;die;
	 		$query = new Query();
	 		$dataList = $query->from('admin')->where("admin_name='$admin_name'")->one();
	 		// var_dump($dataList);die;
	 		if ($dataList) {
	 			$pwd = $dataList['admin_pwd'];
		 		if ($pwd == $admin_pwd) {
		 			$res=Yii::$app->db->createCommand()->update('admin',array('last_time'=>time()),"admin_name='$admin_name'")->execute();
		 			if ($res == 1) {
		 				$session->set('admin_name', $admin_name);
		 				echo 1;
		 			}
		 		}else{
		 			echo 0;
		 		}
	 		}else{
	 			echo -1;
	 		}
	 		
		}else{
			return $this->render('login');
		}
	}

/**
*ajax请求
*管理员注册
*@XIA
*@return:int
*/
	public function actionRegister(){
		$request=Yii::$app->request;
		$admin_name = $request->post('admin_name');
		$admin_pwd = $request->post('admin_pwd');
		$admin_pwd = md5($admin_pwd);
		$data = array('admin_name'=>$admin_name,'admin_pwd'=>$admin_pwd,'reg_time'=>time());
		$res=Yii::$app->db->createCommand()->insert('admin',$data)->execute();
		if ($res) {
			echo 1;
		}else{
			echo 0;
		}
	}
>>>>>>> c643a27f518f98186befe51cc144dd23e69fa535
}