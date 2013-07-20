<?php
/* @var $this BodegaController */
/* @var $model Bodega */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bodega-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div>
		<?php echo $form->labelEx($model,'productos_idproductos'); ?>
		<?php echo $form->dropDownList($model,'productos_idproductos',$model->getMenuProductos(),array('empty'=>'Seleccione un producto')); ?>
		<?php echo $form->error($model,'productos_idproductos'); ?>
	</div>
	<div>
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'stock_minimo'); ?>
		<?php echo $form->textField($model,'stock_minimo'); ?>
		<?php echo $form->error($model,'stock_minimo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fecha_pedito'); ?>
		<?php echo $form->textField($model,'fecha_pedito'); ?>
		<?php echo $form->error($model,'fecha_pedito'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'valor_total_pedido'); ?>
		<?php echo $form->textField($model,'valor_total_pedido'); ?>
		<?php echo $form->error($model,'valor_total_pedido'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'valor_unitario_producto'); ?>
		<?php echo $form->textField($model,'valor_unitario_producto'); ?>
		<?php echo $form->error($model,'valor_unitario_producto'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>


<?php $this->endWidget();?>

</div><!-- form -->
