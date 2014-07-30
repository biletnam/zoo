<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - О программе';
$this->breadcrumbs=array(
	'О программе',
);
?>
<h1>О программе</h1>

<?php

$this->widget('zii.widgets.jui.CJuiSliderInput', array(
	    			/*'model' => $model,
	    			'attribute' => 'date_reg',
	    			'language' => 'ru',
	    			'htmlOptions' => array(
	        			'size' => '10',         		// textField size
	        			'maxlength' => '10',    		// textField maxlength
	        			//'dateFormat' => 'yyyy-mm-dd',
	        			'dateFormat' => 'dd-mm-yyyy',
	        			'showOtherMonths' => true,      // show dates in other months
				        'selectOtherMonths' => true,    // can seelect dates in other months
				        'changeYear' => true,           // can change year
				        'changeMonth' => true,          // can change month
				        'yearRange' => '2000:2099',     // range of year
				        'minDate' => '2000-01-01',      // minimum date
				        'maxDate' => '2099-12-31',      // maximum date
				        'showButtonPanel' => true,      // show button panel
	    			),*/
'name'=>'rate',
    'value'=>37,
    // additional javascript options for the slider plugin
    'options'=>array(
        'min'=>10,
        'max'=>50,
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;',
    ),
				));