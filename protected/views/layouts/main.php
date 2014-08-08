<?php /* @var $this Controller */ ?>
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/scripts.js',CClientScript::POS_HEAD);?>
	<?php Yii::app()->clientScript->registerCoreScript('jquery');?>
	<?php Yii::app()->clientScript->registerCoreScript('jquery.ui');?>
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/styles.css');?>
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap.min.css');?>
</head>

<body>

<div class="container" id="page">
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Главная', 'url'=>array('/')),
				array('label'=>'Главная', 'url'=>array('/master/index')),
				array('label'=>'Доктора', 'url'=>array('/medic/index')),
				array('label'=>'Типы животных', 'url'=>array('/type/index')),
				array('label'=>'Отчеты', 'url'=>array('/report/index')),
				array('label'=>'Пользователи', 'url'=>array('/user/admin'),'visible'=>Yii::app()->user->getState('role')==='admin'),
				array('label'=>'О программе', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Войти', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions' => array(
                    'class'=>'nav nav-pills',
                        ),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'homeLink'=>CHtml::link('Главная', array("/master/index")),
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <a href="mailto:sinelnikovodima@mail.ru">JazzzDima</a><br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
