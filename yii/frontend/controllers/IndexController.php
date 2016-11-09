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
        return $this->renderPartial('house_list');
    }
    //日志管理
    public function actionLog(){
        return $this->renderPartial('log_list');
    }
}