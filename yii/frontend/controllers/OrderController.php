<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;

use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class OrderController extends Controller
{
    public function actionOrder(){
        $db=yii::$app->db;
        $sql="select * from order_info";
        $arr=$db->createCommand($sql)->queryAll();
        return $this->renderPartial('order_list',['arr'=>$arr]);
    }
    //单删
    public function actionDel(){
        $data=yii::$app->request;
        $id=$data->get('id');
        $db=yii::$app->db;
        $arr=$db->createCommand()->delete('order_info',['order_id'=>$id])->execute();
        if($arr){
            echo 1;
        }else{
            echo 0;
        }
    }
    //批量删
    public function actionDelall(){
       $data=yii::$app->request;
        $id=$data->get('id');
        $db=yii::$app->db;
        $sql="delete from order_info where order_id IN ($id)";
        $arr=$db->createCommand($sql)->execute();
        if($arr){
            echo 1;
        }else{
            echo 0;
        }

    }
    //及点及该
    public function actionJg(){
        $data=yii::$app->request;
        $id=$data->get('id');
        $db=yii::$app->db;
        $date=$data->get('date');
        $sql="update order_info set order_status='$date' where order_id=$id";
        $arr=$db->createCommand($sql)->execute();
        if($arr){
            echo 1;
        }else{
            echo 0;
        }
    }
}