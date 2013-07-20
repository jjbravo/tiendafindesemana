<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factura-facturacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'clientes_idclientes'); ?>
		<?php echo $form->textField($model,'clientes_idclientes'); ?>
		<?php echo $form->error($model,'clientes_idclientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_factura'); ?>
		<?php echo $form->textField($model,'fecha_factura'); ?>
		<?php echo $form->error($model,'fecha_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->