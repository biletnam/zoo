<h1>Вход</h1>
<?php //var_dump($model);?>
<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-login',
    'enableAjaxValidation'=>false,
)); 

?>

<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'login'); ?>
        <?php echo $form->textField($model,'login'); ?>
        <?php echo $form->error($model,'login'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Войти'); ?>
    </div>

<?php $this->endWidget(); ?>

</div>    
    
