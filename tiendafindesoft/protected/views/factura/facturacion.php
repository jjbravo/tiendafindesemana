<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturacion'=>array('index'),
	'Facturacion',
	//$model->idfactura,

);

?>
<script type="text/javascript">
	$(function(){
		
		var canecaAguardiente=0;
		var aguardiente=0;
		var poker=0;
		var pepsi=0,postobon=0,bretania=0,_7up=0,cocacola=0,bigpostobon=0,agua500ml=0,agua350ml=0,maltiz=0;
		var empanadas=0,marranitas=0,tostado=0,huevos=0,tostadogrande=0,aborrajados=0;
		//alert("has presionado aguardiente");
		$("#aguardiente").click(function(ventas){
			//ventas.prsionado aguardiente"+contador);
			aguardiente+=1;
			$("#conta").html(aguardiente);
			
			$("#factura #boAguar").html("Botella aguardiente: .... "+aguardiente);				
			

		});
		$("#caneca").click(function(ventas){
			//ventas.preventDefault();
			
			canecaAguardiente+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(canecaAguardiente);
			
			$("#factura #caAguar").html("Caneca aguardiente: ...."+canecaAguardiente);				
			
		});	
		/**********/
		$("#poker").click(function(ventas){
			//ventas.preventDefault();
			
			poker+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(poker);
			$("#factura #poker").html("Cerveza Poker: ........"+poker);

		});	
		$("#pepsi").click(function(ventas){
			//ventas.preventDefault();
			
			pepsi+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(pepsi);
			$("#factura #peps").html("Pepsi: ......."+pepsi);

		});	
		$("#postobon").click(function(ventas){
			//ventas.preventDefault();
			
			postobon+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(postobon);
			$("#factura #postobo").html("Postobon: ........."+postobon);

		});	
		$("#bretania").click(function(ventas){
			//ventas.preventDefault();
			
			bretania+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(bretania);
			$("#factura #bretani").html("Bretania: ......."+bretania);

		});	
		$("#7up").click(function(ventas){
			//ventas.preventDefault();
			
			_7up+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(_7up);
			$("#factura #_7u").html("7Up: ......"+_7up);

		});	
		$("#cocacola").click(function(ventas){
			//ventas.preventDefault();
			
			cocacola+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(cocacola);
			$("#factura #coca").html("Cocacola: ......"+cocacola);

		});
		$("#bigpostobon").click(function(ventas){
			//ventas.preventDefault();
			
			bigpostobon+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(bigpostobon);
			$("#factura #bigpos").html("Big Postobon: ....."+bigpostobon);

		});	$("#agua500ml").click(function(ventas){
			//ventas.preventDefault();
			
			agua500ml+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(agua500ml);
			$("#factura #agua500").html("Agua 500ml : ....."+agua500ml);

		});	$("#agua350ml").click(function(ventas){
			//ventas.preventDefault();
			
			agua350ml+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(agua350ml);
			$("#factura #agua350").html("Agua 350ml : ....."+agua350ml);

		});	$("#maltiz").click(function(ventas){
			//ventas.preventDefault();
			
			maltiz+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(maltiz);
			$("#factura #malti").html("maltiz : ......."+maltiz);

		});	
		/****************************************/
		/*  COMESTIBLES  */
		$("#empanadas").click(function(ventas){
			//ventas.preventDefault();
			
			empanadas+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(empanadas);
			$("#factura #empan").html("Empanadas : ......."+empanadas);

		});
		$("#marranitas").click(function(ventas){
			//ventas.preventDefault();
			
			marranitas+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(marranitas);
			$("#factura #marrani").html("Marranita : ......."+marranitas);

		});
		$("#tostado").click(function(ventas){
			//ventas.preventDefault();
			
			tostado+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(tostado);
			$("#factura #tostad").html("Tostado : ......."+tostado);

		});
		$("#huevos").click(function(ventas){
			//ventas.preventDefault();
			
			huevos+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(huevos);
			$("#factura #huevo").html("Huevos : ......."+huevos);

		});
		$("#tostadogrande").click(function(ventas){
			//ventas.preventDefault();
			
			tostadogrande+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(tostadogrande);
			$("#factura #tostadogrand").html("Tostado Grande : ...."+tostadogrande);

		});
		$("#aborrajados").click(function(ventas){
			//ventas.preventDefault();
			
			aborrajados+=1;
			//alert("has presionado aguardiente"+contador);
			$("#conta").html(aborrajados);
			$("#factura #aborrajado").html("Aborrajados : ......."+aborrajados);

		});
	});
</script>
<div class="container">
	<div class="row-fluid">
		<div class="span3">
			<?php 
			$url=Yii::app()->createUrl('bodega/facturacion');
		
			

			
			 ?>
			<h2>Clientes</h2>
			
			<div id="cliente">
				
				<?php //foreach($clientes as $data): ?>
				
					
			<!-- <a id='ci'><?php //echo $data->nombre_cliente; ?></a> -->
				

				<?php //endforeach; ?>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$clientes,
					'itemView'=>'_viewclientes',
				)); ?>

			</div>
			<div class="span12">
				<h3>Precios</h3>

			</div>
		</div>
		<div class="span6">
			<h2>Productos</h2>
			<hr>
			<h4>Bebidas</h4>
			<div class="row-fluid">
				<div class="span2">
					
					<ul id="aguardiente" class="thumbnails">
						<li class="span12">
							<div class="thumbnail">
								<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/botellaaguardiente70x120.png" alt="">
								
							</cdiv>

						</li>
					</ul>
				</div>
			<div class="span2">
				<ul id="caneca" class="thumbnails">
				<li class="span12">
					<div class="thumbnail">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/caneca120x260.png" alt="">
						
					</div>
					
				</li>
			</ul>
			</div>
			<div class="span2">
					
				<ul id="poker" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/poker.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="span2">
					
				<ul id="pepsi" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/pepsi.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="span2">
					
				<ul id="postobon" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/postobon.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="span2">
					
				<ul id="bretania" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/bretania.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>

			</div>
<!-- ********** -->

			<div class="row-fluid">
				<div class="span2">
					
					<ul id="7up" class="thumbnails">
						<li class="span12">
							<div class="thumbnail">
								<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/7up.png" alt="">
								
							</div>
						</li>
					</ul>
				</div>
			<div class="span2">
				<ul id="cocacola" class="thumbnails">
				<li class="span12">
					<div class="thumbnail">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/cocacola.png" alt="">
						
					</div>
				</li>
			</ul>
			</div>
			<div class="span2">
					
				<ul id="bigpostobon" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/bigpostobon.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div  id="agua500ml"class="span2">
					
				<ul class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/agua500ml.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="span2">
					
				<ul id="agua350ml" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/agua350ml.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="span2">
					
				<ul id="maltiz" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/maltiz.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			
			</div>
			<hr>
			<h4>Comestibles</h4>
			<div class="row-fluid">
				<div class="span2">
					
					<ul id="empanadas" class="thumbnails">
						<li class="span12">
							<div class="thumbnail">
								<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/empanadas.png" alt="">
								
							</div>
						</li>
					</ul>
				</div>
			<div class="span2">
				<ul id="marranitas" class="thumbnails">
				<li class="span12">
					<div class="thumbnail">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/marranita.png" alt="">
						
					</div>
				</li>
			</ul>
			</div>
			<div class="span2">
					
				<ul id="tostado" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/tostado.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="span2">
					
				<ul id="huevos" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/huevos.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="span2">
					
				<ul id="tostadogrande" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/tostadogrande.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			<div class="span2">
					
				<ul id="aborrajados" class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/iconos/ico/aborrajados.png" alt="">
							
						</div>
					</li>
				</ul>
			</div>
			
			</div>
		</div>
		<div class="span3">
			<h2>Facturacion</h2>
			<div class="span5"></div>
			<div class="span2">
				<p>Cantidad</p>
			<h1 id="conta">0</h1>

			</div>
			<div id="factura" class="span12">
				<p id="boAguar"></p>
				<p id="caAguar"></p>
				<p id="poker"></p>
				<p id="peps"></p>
				<p id="postobo"></p>
				<p id="bretani"></p>
				<p id="_7u"></p>
				<p id="coca"></p>
				<p id="bigpos"></p>
				<p id="agua500"></p>
				<p id="agua350"></p>
				<p id="malti"></p>
				<p id="empan"></p>
				<p id="marrani"></p>
				<p id="tostad"></p>
				<p id="huevo"></p>
				<p id="tostadogrand"></p>
				<p id="aborrajado"></p>
			</div>
		</div>
	</div>

</div>