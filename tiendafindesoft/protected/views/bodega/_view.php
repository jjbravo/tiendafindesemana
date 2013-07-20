<?php
/* @var $this BodegaController */
/* @var $data Bodega */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbodega')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbodega), array('view', 'id'=>$data->idbodega)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_minimo')); ?>:</b>
	<?php echo CHtml::encode($data->stock_minimo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pedito')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pedito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_total_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->valor_total_pedido); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_unitario_producto')); ?>:</b>
	<?php echo CHtml::encode($data->valor_unitario_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productos_idproductos')); ?>:</b>
	<?php echo CHtml::encode($data->productos_idproductos); ?>
	<br />


</div>