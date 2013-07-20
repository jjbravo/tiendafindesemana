<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idfactura'); ?>
		<?php echo $form->textField($model,'idfactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_factura'); ?>
		<?php echo $form->textField($model,'fecha_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->checkBox($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientes_idclientes'); ?>
		<?php echo $form->textField($model,'clientes_idclientes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->