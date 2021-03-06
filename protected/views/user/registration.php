<?php $this->pageTitle = Yii::app()->name . ' - Регистрация'; ?>

<h1>Регистрация</h1>

<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-registration',
    'enableAjaxValidation'=>false,
)); 

?>

<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'lastname'); ?>
        <?php echo $form->textField($model,'lastname', array('value'=>'')); ?>
        <?php echo $form->error($model,'lastname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'firstname'); ?>
        <?php echo $form->textField($model,'firstname', array('value'=>'')); ?>
        <?php echo $form->error($model,'firstname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'surname'); ?>
        <?php echo $form->textField($model,'surname', array('value'=>'')); ?>
        <?php echo $form->error($model,'surname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'login'); ?>
        <?php echo $form->textField($model,'login', array('value'=>'')); ?>
        <?php echo $form->error($model,'login'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->textField($model,'password', array('value'=>'')); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'description'); ?>
        <?php echo $form->textArea($model,'description', array('value'=>'')); ?>
        <?php echo $form->error($model,'description'); ?>
    </div>

    <div class="row descr">
        <div class="text-warning"><small>Если Вы Доктор - выберите свою фамилию из списка</small></div>
        <?php $list = CHtml::listData(Medic::model()->findAll(),'id_medic', 'lastname');?>
        <?php echo $form->dropDownList($model,'id_medic',$list, array('empty'=>'Выберите фамилию')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'role'); ?>
        <?php $role =  array('user' => 'Пользователь', 
                             'manager' => 'Менеджер', 
                             'admn' => 'Администратор'); ?>
        <?php echo $form->dropDownList($model,'role',$role); ?>                             
        <?php echo $form->error($model,'role'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Зарегистрироваться', array('class' => 'btn btn-primary btn-lg')); ?>
        <?php echo CHtml::resetButton('Очистить', array('class' => 'btn btn-success')); ?>
    </div>

<?php $this->endWidget(); ?>

</div>    
    
