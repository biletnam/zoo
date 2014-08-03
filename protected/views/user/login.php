<h1>Вход</h1>

<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-login',
    'enableAjaxValidation'=>false,
)); 

?>

<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'login'); ?>
        <?php echo $form->textField($model,'login', array('value'=>'')); ?>
        <?php echo $form->error($model,'login'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array('value'=>'')); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Войти', array('class' => 'btn btn-primary btn-lg')); ?>
    </div>

<?php $this->endWidget(); ?>

</div>    
    
