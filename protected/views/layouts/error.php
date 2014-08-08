<?php /* @var $this Controller */ ?>
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
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
<style type="text/css">
   body { 
    background-image: url(../images/error_bg.jpg);
   }
   #page {
   	background: none;
   	border:none;
   }
   #header {
   	border:none;
   	background: none;
   }
   #logo {
   	padding: 20px 0px;
   }
   #buttons{
   	margin: 15px 0;
   	width: 200px;
   }
   #buttons input{
   	display: block;
   	margin: 10px 0;
   }
  </style>
<body>

<div class="container" id="page">
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->


	<?php echo $content; ?>

	<?php 
		Yii::app()->clientScript->registerScript('back',
        '$("#back-btn ").bind("click",function(){history.go(-1);return true;})'); 
	?>

	<div id='buttons'>
		<?php echo CHtml::button('Войти', array('submit'=>array('/user/login'), 'class' => 'btn btn-primary btn-lg btn-block')); ?>
		<?php echo CHtml::button('Назад', array('class' => 'btn btn-success', 'id'=>'back-btn')); ?>
	</div>	

	<div class="clear"></div>


</div><!-- page -->

</body>
</html>
