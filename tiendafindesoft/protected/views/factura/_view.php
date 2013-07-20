<?php
/* @var $this FacturaController */
/* @var $data Factura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfactura')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idfactura), array('view', 'id'=>$data->idfactura)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_factura')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientes_idclientes')); ?>:</b>
	<?php echo CHtml::encode($data->clientes_idclientes); ?>
	<br />


</div>