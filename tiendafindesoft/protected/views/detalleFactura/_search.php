<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iddetalle_factura'); ?>
		<?php echo $form->textField($model,'iddetalle_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_consumo'); ?>
		<?php echo $form->textField($model,'fecha_consumo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productos_idproductos'); ?>
		<?php echo $form->textField($model,'productos_idproductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'factura_idfactura'); ?>
		<?php echo $form->textField($model,'factura_idfactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'factura_clientes_idclientes'); ?>
		<?php echo $form->textField($model,'factura_clientes_idclientes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->