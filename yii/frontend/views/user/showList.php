<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
$this->registerJsFile("jquery.js",['position' => \yii\web\View::POS_HEAD]);
?>
<?php $form=ActiveForm::begin([
])?>
<table class="table">
<input type="text" name="uname" value="<?=$dataList['uname']?>">
<?=Html::submitButton('修改',['class'=>'btn btn-success'])?>
</table>
<?php ActiveForm::end();?>