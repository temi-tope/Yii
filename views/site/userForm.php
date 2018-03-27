<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!-- <?php
// if(Yii::$app->session->hasflash('success')){
//     echo Yii::$app->session->getflash('success');
// }
?> -->
 <?php $form = ActiveForm::begin();?>
    <?=$form->field($model,'name');?>
    <?= $form->field($model,'email');?>
    <?=HTML::submitButton('Submit',['class'=>'btn btn-success']);?>
    <?php ActiveForm::end() ?>  