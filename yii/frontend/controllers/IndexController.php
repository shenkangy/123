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
*显示页面
*
*@XIA
*@return:调用模板
*/
Class IndexController extends Controller{

	//推广链接
	public function actionLink(){
		$request=Yii::$app->request;

		//get接收admin_name值
		$str = $request->get('admin_name');
		$admin_name = $this->passport_decrypt($str,123);

		$query = new Query();
		$iipp=$_SERVER["REMOTE_ADDR"];
		$res = $query->from('ip')->where(array('iipp'=>$iipp,'admin_name'=>$admin_name))->one();
		
		if ($res) {
			$this->redirect('http://www.aiwujiwu.com');
		}else{
			$res_insert=Yii::$app->db->createCommand()->insert('ip',array('iipp'=>$iipp,'admin_name'=>$admin_name))->execute();
		 	$dataList = $query->from('admin')->where("admin_name='$admin_name'")->one();
		 	$res_update=Yii::$app->db->createCommand()->update('admin',array('links'=>$dataList['links']+1),"admin_name='$admin_name'")->execute();
		 	// var_dump($res_update);die;
		 	if ($res_update) {
		 		$this->redirect('http://www.aiwujiwu.com');
		 	}
		 	
		 	
		}
	}


	//调用首页模板
	public function actionIndex(){
		//调用session
		$session = Yii::$app->session;
		$query = new Query();
		//获取到get方式传值
		$admin_name = $session->get('admin_name');

		$dataList = $query->from('admin')->where("admin_name='$admin_name'")->one();
		//取得session里的数据
		$sess = $session->get('admin_name');

		$result = $this->passport_encrypt($sess,123);

		$link = "?r=index/link&admin_name=".$result;
		$data['dataList'] = $dataList;
		$data['link'] = $link;
		return $this->render('index',$data);
	}

	//加密
	/*
		*功能：对字符串进行加密处理
		*参数一：需要加密的内容
		*参数二：密钥
		*/
	function passport_encrypt($str,$key){ //加密函数
		srand((double)microtime() * 1000000);
		$encrypt_key=md5(rand(0, 32000));
		$ctr=0;
		$tmp='';
		for($i=0;$i<strlen($str);$i++){
			$ctr=$ctr==strlen($encrypt_key)?0:$ctr;
			$tmp.=$encrypt_key[$ctr].($str[$i] ^ $encrypt_key[$ctr++]);
		}
		return base64_encode($this->passport_key($tmp,$key));
	}
	/*
	*辅助函数
	*/
	function passport_key($str,$encrypt_key){
		$encrypt_key=md5($encrypt_key);
		$ctr=0;
		$tmp='';
		for($i=0;$i<strlen($str);$i++){
			$ctr=$ctr==strlen($encrypt_key)?0:$ctr;
			$tmp.=$str[$i] ^ $encrypt_key[$ctr++];
		}
		return $tmp;
	}

	/*
	*功能：对字符串进行解密处理
	*参数一：需要解密的密文
	*参数二：密钥
	*/
	function passport_decrypt($str,$key){ //解密函数
		$str=$this->passport_key(base64_decode($str),$key);
		$tmp='';
		for($i=0;$i<strlen($str);$i++){
			$md5=$str[$i];
			$tmp.=$str[++$i] ^ $md5;
		}
		return $tmp;
	}

	//调用房屋展示模板
	public function actionHouse(){
		return $this->render('house_show');
	}

	//调用房屋添加模板
	public function actionHouseadd(){
		return $this->render('houseadd');
	}

	//调用用户展示模板
	public function actionUser(){
		return $this->render('user');
	}

	//调用日志显示模板
	public function actionLog(){
		return $this->render('log');
	}

	//调用后台管理员模板
	public function actionShow_admin(){
		return $this->render('show_admin');
	}

	//调用后台管理员权限修改模板
	public function actionUpdate_admin(){
		return $this->render('update_admin');
	}

	//管理员登录退出
	public function actionOut(){
		$session = Yii::$app->session;
		unset($session['admin_name']);
		echo "<script>alert('退出成功')</script>";
		$this->redirect('?r=admin/login');
	}
}