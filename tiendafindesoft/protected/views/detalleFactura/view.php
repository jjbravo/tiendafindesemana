<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */

$this->breadcrumbs=array(
	'Detalle Facturas'=>array('index'),
	$model->iddetalle_factura,
);

$this->menu=array(
	array('label'=>'List DetalleFactura', 'url'=>array('index')),
	array('label'=>'Create DetalleFactura', 'url'=>array('create')),
	array('label'=>'Update DetalleFactura', 'url'=>array('update', 'id'=>$model->iddetalle_factura)),
	array('label'=>'Delete DetalleFactura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddetalle_factura),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleFactura', 'url'=>array('admin')),
);
?>

<h1>View DetalleFactura #<?php echo $model->iddetalle_factura; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddetalle_factura',
		'fecha_consumo',
		'cantidad',
		'productos_idproductos',
		'factura_idfactura',
		'factura_clientes_idclientes',
	),
)); ?>
