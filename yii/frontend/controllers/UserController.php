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

/**
 * Site controller
 */
class UserController extends Controller
{
	public function actionIndex()
	{
		$request=Yii::$app->request;
		if($request->isPost)
		{
			$uname = $request->post('uname');
			$data=array('uname'=>$uname);
			$res=Yii::$app->db->createCommand()->insert('user666',$data)->execute();
			if($res)
			{
				$this->redirect("?r=admin/login");
			}
			else
			{
				echo "数据添加失败";
			}
		}
		else
		{
			return $this->render('add');
		}
	}
//展示
 	public function actionShow()
 	{
 		$query= new Query();
 		$data = $query->from("user666")->all();
 		return $this->render("show",['data'=>$data]);
 	}
 //删除
 	public function actionDel()
 	{
 		$request = Yii::$app->request;
 		$id = $request ->get("id");
 		$res=Yii::$app->db->createCommand()->delete('user666',"id='$id'")->execute();
 		if($res)
 		{
 			$this->redirect("?r=user/show");
 		}
 		else
 		{
 			echo "删除失败";
 		}
 	}
 	//修改
 	public function actionUp()
 	{
 		$request = Yii::$app->request;
 		$id = $request->get("id");
 		$query = new Query();
 		$dataList=$query->from('user666')->where("id='$id'")->one();
 		//如果是POST传值则进行数据修改，如果不是，就调用该数据的展示页面
 		if($request->isPost)
 		{
 			$data = $request ->post();
 			unset($data['_csrf-frontend']);
 			$res=Yii::$app->db->createCommand()->update('user666',$data,"id='$id'")->execute();
 			if($res)
 			{
 				$this->redirect("?r=user/show");
 			}
 			else
 			{
 				echo "修改失败";
 			}
 		}
 		else
 		{
 			return $this->render('showList',['dataList'=>$dataList]);
 		}
 	}
}