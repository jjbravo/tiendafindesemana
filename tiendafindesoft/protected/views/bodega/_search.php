<?php
/* @var $this BodegaController */
/* @var $model Bodega */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbodega'); ?>
		<?php echo $form->textField($model,'idbodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_minimo'); ?>
		<?php echo $form->textField($model,'stock_minimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_pedito'); ?>
		<?php echo $form->textField($model,'fecha_pedito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_total_pedido'); ?>
		<?php echo $form->textField($model,'valor_total_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productos_idproductos'); ?>
		<?php echo $form->textField($model,'productos_idproductos'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'valor_unitario_producto'); ?>
		<?php echo $form->textField($model,'valor_unitario_producto'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->