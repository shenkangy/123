<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
$this->registerJsFile("jquery.js",['position' => \yii\web\View::POS_HEAD]);
?>
<table border='1'>
<tr>
	<td>id</td>
	<td>姓名</td>
	<td>操作</td>
</tr>
 <?php foreach($data as $key):?>
	<tr>
		<td><?=$key['id']?></td>
		<td><?=$key['uname']?></td>
		<td><?=Html::a("删除","?r=user/del&id=".$key['id']."")?>|<?=Html::a("修改","?r=user/up&id=".$key['id']."")?>
		</td>
	</tr>
	<?php endforeach;?>
</table>