<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
?>
<?php
  if(Yii::$app->session->hasFlash('success')){
     echo Yii::$app->session->getFlash('success');
  }
?>
<?php
$form=ActiveForm::begin();

// echo "<pre>"; print_r($model); exit;?>
<?= $form->field($model,'name1');?>

<?php //$form->field($model,'name');?>
<?php //$form->field($model,'email');?>


<?= html::submitButton('Submit',['class'=>'btn btn-success']);?>

<?php
$form=ActiveForm::end();
?>

