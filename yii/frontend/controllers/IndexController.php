<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\db\Query;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Collect;
use frontend\models\PageSearch;

/**
 * Site controller
 */
class IndexController extends Controller
{
    //首页
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    //添加页
    public function actionHouse_add(){
        return $this->renderPartial('house_add');
    }
    // 展示页
    public function actionHouse_list(){
        header("content-type:text/html;charset=utf8");
        $query = new Query;
        $data = $query->from('collect')->limit(3)->all();
        return $this->renderPartial('house_list',array('data'=>$data));
    }
    //搜索分页
    public function actionPage(){
        header("content-type:text/html;charset=utf8");
        $request=Yii::$app->request;
        $data = $request->get();
        $PageSearch = new Collect();
        $result = $PageSearch->p($data);
       
        echo json_encode($result);
    }

    //日志管理
    public function actionLog(){
        return $this->renderPartial('log_list');
    }
}