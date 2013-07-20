<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">
<h1>Mis clientes</h1>
	<b><?php echo CHtml::link(CHtml::encode($data->nombre_cliente),array('facturacion', 'id'=>$data->idclientes)); ?>
	
	</b>
	
	<br />

	


</div>