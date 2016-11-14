<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\db\Query;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\AdminForm;

/**
 * @author zhao
 */
class AdminController extends Controller
{
    public function actionAdmin_add()
    {
           
			return $this->render('admin_add');  
    }

    public function actionAdd()
    {
           $request=Yii::$app->request;
           $admin_name = $request->post('name');
           $admin_pwd = $request->post('pwd'); 
           $admin_pwd=md5($admin_pwd);        
           $admin= new AdminForm();
           $admin->admin_name=$admin_name;
           $admin->admin_pwd=$admin_pwd;
           $admin->reg_time=time();
           $res=$admin->save();
          if($res)
          {
            echo 1;
          }
          else
          {
            echo 0;
          }
            
    }

   //管理员信息展示
    public function actionAdmin_list()
    {
    	$sql="select * from admin";
    	$data=Yii::$app->db->createCommand($sql)->queryAll();
    	//print_r($data);die;
        return $this->renderPartial('admin_list',['data'=>$data]);
    }
    //管理员列表删除
    public function actionDel()
    {
            
            $request=Yii::$app->request;
            $id=$request->get('id');
            $admin=AdminForm::findOne($id);
            $res=$admin->delete();
            if($res)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }
        
    }
    //管理员列表修改
    public function actionUp()
    {
        $request=Yii::$app->request;
            $id=$request->get('id');
            $val=$request->get('v');
            $admin =AdminForm::findOne($id);
            $admin->admin_name=$val;
            $re =$admin->save();
            if($re)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }

            
    }
    //批删
    public function actionAll()
    {
        //接值
        $str=Yii::$app->request->get('str');       
        //删除
        $res=Yii::$app->db->createCommand("delete from `admin` WHERE  `admin_id` in ($str)")->execute();

        if($res){
           echo  json_encode(1);
        }else{
            echo json_encode(0);
        }
    }
}