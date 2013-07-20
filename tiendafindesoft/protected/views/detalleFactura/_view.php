<?php
/* @var $this DetalleFacturaController */
/* @var $data DetalleFactura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddetalle_factura')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddetalle_factura), array('view', 'id'=>$data->iddetalle_factura)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_consumo')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_consumo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productos_idproductos')); ?>:</b>
	<?php echo CHtml::encode($data->productos_idproductos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('factura_idfactura')); ?>:</b>
	<?php echo CHtml::encode($data->factura_idfactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('factura_clientes_idclientes')); ?>:</b>
	<?php echo CHtml::encode($data->factura_clientes_idclientes); ?>
	<br />


</div>