<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>



	<?php
		//$this->beginWidget('zii.widgets.CPortlet', array(
		//	'title'=>'Operations',
		//));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-pills'),
		));
		//$this->endWidget();
	?>

		<?php echo $content; ?>

<?php $this->endContent(); ?>