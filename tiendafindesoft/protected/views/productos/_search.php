<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row" >
		<?php echo $form->label($model,'idproductos'); ?>
		<?php echo $form->textField($model,'idproductos'); ?>
	</div>

	<div class="row" >
		<?php echo $form->label($model,'nombre_producto'); ?>
		<?php echo $form->textField($model,'nombre_producto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div  class="row">
		<?php echo $form->label($model,'valor_publico_prod'); ?>
		<?php echo $form->textField($model,'valor_publico_prod'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->