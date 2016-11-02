<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
$this->registerJsFile("jquery.js",['position' => \yii\web\View::POS_HEAD]);
?>

<?php $form=ActiveForm::begin([
])?>
<input type="text" name="uname"/>
<!-- <input type="submit" value="添加"> -->
<?=Html::submitButton('添加',['class'=>'btn btn-success'])?>
<?php ActiveForm::end();?>