<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->idproductos=>array('view','id'=>$model->idproductos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Create Productos', 'url'=>array('create')),
	array('label'=>'View Productos', 'url'=>array('view', 'id'=>$model->idproductos)),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>Update Productos <?php echo $model->idproductos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>