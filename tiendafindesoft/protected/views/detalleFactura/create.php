<?php
/* @var $this DetalleFacturaController */
/* @var $model DetalleFactura */

$this->breadcrumbs=array(
	'Detalle Facturas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleFactura', 'url'=>array('index')),
	array('label'=>'Manage DetalleFactura', 'url'=>array('admin')),
);
?>

<h1>Create DetalleFactura</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>