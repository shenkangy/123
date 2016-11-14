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
use frontend\models\Collect;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\PageSearch;

/**
 * Site controller
 */
class HouseController extends Controller
{
	/**
	*房屋添加
	*
	*@XIA
	*@return:int
	*/
	public $enableCsrfValidation=false;//非表单提交关闭input:_csrf验证才可提交传值

	public function actionHouseadd(){
		$request = Yii::$app->request;
		$data = $request->post();
		$model = new Collect();
		$result = $model->houseadd($data);
		echo $result;
	}

}