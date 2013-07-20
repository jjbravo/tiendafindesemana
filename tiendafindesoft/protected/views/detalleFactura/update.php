<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */

$this->breadcrumbs=array(
	'Detalle Facturas'=>array('index'),
	$model->iddetalle_factura=>array('view','id'=>$model->iddetalle_factura),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleFactura', 'url'=>array('index')),
	array('label'=>'Create DetalleFactura', 'url'=>array('create')),
	array('label'=>'View DetalleFactura', 'url'=>array('view', 'id'=>$model->iddetalle_factura)),
	array('label'=>'Manage DetalleFactura', 'url'=>array('admin')),
);
?>

<h1>Update DetalleFactura <?php echo $model->iddetalle_factura; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>