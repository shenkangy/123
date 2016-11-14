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

class AcquireController extends Controller{

	/**
	 * 采集页面
	 * @ author zhao
	 */
	public function actionIndex()
	{
		return	$this->render('acquire');
	}
	/**
	 * 采集页面
	 * @ author xia
	 */
	public function actionGetpage(){
		$request=Yii::$app->request;
		$num = $request->get('num');
		$str = "";
		header("content-type:text/html;charset=utf8");
		for ($i=1; $i <= $num; $i++) { 
			$url = "http://bj.lianjia.com/zufang/pg".$i."/";
			$content = file_get_contents($url);
			$str.= $content;
		}

		$preg = '/<div class="info-panel"><h2><a target="_blank" href=".*" title="(.*)">.*'.
				'<\/a><\/h2><div class="col-1"><div class="where"><a href=".*"\s+'.
				'class="laisuzhou"><span class="region">(.*)&nbsp;&nbsp;<\/span><\/a><span class="zone">'.
				'<span>(.*)&nbsp;&nbsp;<\/span><\/span><span class="meters">(.*)&nbsp;&nbsp;<\/span>'.
				'<span>(.*)<\/span><\/div><div class="other"><div class="con">'.
				'<a href=".*">(.*)<\/a><span>.*<\/span>(.*)<span>.*<\/span>'.
				'.*<\/div><\/div><div class="chanquan"><div class="left agency">'.
				'<div class="view-label left"><span class="fang-subway"><\/span><span class="fang-subway-ex"><span>(.*)<\/span><\/span><span class="haskey">'.
				'<\/span><span class="haskey-ex"><span>.*<\/span><\/span><span class="heating"><\/span>'.
				'<span class="heating-ex"><span>(.*)<\/span><\/span><\/div><\/div><\/div><\/div>'.
				'<div class="col-3"><div class="price"><span class="num">(.*)<\/span>.*<\/div><div class="price-pre">(.*)<\/div><\/div>'.
				'<div class="col-2"><div class="square"><div><span class="num">(.*)<\/span>.*<\/div><div class="col-look">.*<\/div><\/div><\/div>'.
				'.*data-img="(.*)"'.
				'/isU';
		preg_match_all($preg,$str,$result);

		unset($result[0]);
		

		// var_dump($result);die;
		$count = count($result);
		$count_num = count($result[1]);
		// var_dump($count_num);die;
		$s = 'title,area,attribute,size,direction,rule,floor,subway,method,price,time,visit,img';
		$s = explode(',', $s);
		$ary=array();
		for ($i=0; $i < $count_num; $i++) { 
			for ($j=0; $j < $count; $j++) { 
				$ary[$i][$s[$j]]=$result[$j+1][$i];
						// var_dump($s[$j]);
			}
		}
		
		$request=Yii::$app->request;
		$del = Yii::$app->db->createCommand('TRUNCATE TABLE collect')->execute();
		if ($del) {
			echo ".";
		}
		foreach ($ary as $val) {
			$res=Yii::$app->db->createCommand()->insert('collect',$val)->execute();
		}
		
		if ($res) {
			echo 1;
		}else{
			echo 2;
			// echo "<script>alert('删除成功，更新失败')</script>";
		}
	}
}