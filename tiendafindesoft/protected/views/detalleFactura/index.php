<?php
/* @var $this DetalleFacturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Facturas',
);

$this->menu=array(
	array('label'=>'Create DetalleFactura', 'url'=>array('create')),
	array('label'=>'Manage DetalleFactura', 'url'=>array('admin')),
);
?>

<h1>Detalle Facturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
