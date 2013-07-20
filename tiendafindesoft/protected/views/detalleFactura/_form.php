<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalle-factura-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_consumo'); ?>
		<?php echo $form->textField($model,'fecha_consumo'); ?>
		<?php echo $form->error($model,'fecha_consumo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productos_idproductos'); ?>
		<?php echo $form->textField($model,'productos_idproductos'); ?>
		<?php echo $form->error($model,'productos_idproductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'factura_idfactura'); ?>
		<?php echo $form->textField($model,'factura_idfactura'); ?>
		<?php echo $form->error($model,'factura_idfactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'factura_clientes_idclientes'); ?>
		<?php echo $form->textField($model,'factura_clientes_idclientes'); ?>
		<?php echo $form->error($model,'factura_clientes_idclientes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->