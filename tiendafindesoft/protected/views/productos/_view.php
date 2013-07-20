<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproductos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproductos), array('view', 'id'=>$data->idproductos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_producto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_publico_prod')); ?>:</b>
	<?php echo CHtml::encode($data->valor_publico_prod); ?>
	<br />



</div>