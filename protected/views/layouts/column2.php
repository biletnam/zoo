<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class=<?php echo (empty($this->menu))?"span-24":"span-18"; ?>>
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div></div>
<div class="span-6 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Операции',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations nav nav-tabs nav-stacked'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>