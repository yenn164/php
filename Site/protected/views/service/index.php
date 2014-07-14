<?php
/* @var $this ServiceController */
$this->pageTitle=Yii::app()->name;
?>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start service -->
	  <div class="service">
		<div class="ser-main">
			<h4> Servicios Online</h4>
			<p class="para">Utilice los siguientes servicios online para obtener montos de APR, cuotas mensuales, y montos de leasing.</p>
			<div class="ser-grid">
				<div class="ser-grid-list">
					<a href="<?php echo Yii::app()->createUrl('service/apr', array("view"=>"apr")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/icon6.png" alt=""></a>
					<h5><a href="<?php echo Yii::app()->createUrl('service/apr', array("view"=>"apr")); ?>">Calculo de APR</a></h5>
					<p class="para">Utilice esta funcionalidad para calcular APR. Este monto no es oficial basado en montos ingresados por el cliente. Sujeto a estudio de cada caso.</p>
				</div>
				<div class="ser-grid-list">
					<a href="<?php echo Yii::app()->createUrl('service/loanmonthlypayment', array("view"=>"loanmonthlypayment")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/icon6.png" alt=""></a>
					<h5><a href="<?php echo Yii::app()->createUrl('service/loanmonthlypayment', array("view"=>"loanmonthlypayment")); ?>">Calculo de Prestamo</a></h5>
					<p class="para"> Utilice esta funcionalidad para calcular la cuota mensual de su prestamo. Este monto no es oficial basado en montos ingresados por el cliente. Sujeto a estudio de cada caso.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="ser-grid">
				<div class="ser-grid-list">
					<a href="<?php echo Yii::app()->createUrl('service/loannumberofpayment', array("view"=>"loannumberofpayment")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/icon6.png" alt=""></a>
					<h5><a href="<?php echo Yii::app()->createUrl('service/loannumberofpayment', array("view"=>"loannumberofpayment")); ?>">Número de Pago de Prestamo</a></h5>
					<p class="para"> Utilice esta funcionalidad para calcular Número de Pagos. Este monto no es oficial basado en montos ingresados por el cliente. Sujeto a estudio de cada caso.</p>
				</div>
				<div class="ser-grid-list">
					<a href="<?php echo Yii::app()->createUrl('service/leasemonthlypayment', array("view"=>"leasemonthlypayment")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/icon6.png" alt=""></a>
					<h5><a href="<?php echo Yii::app()->createUrl('service/leasemonthlypayment', array("view"=>"leasemonthlypayment")); ?>">Cálculo de cuota de Lease</a></h5>
					<p class="para">Utilice esta funcionalidad para calcular Cuota de Lease. Este monto no es oficial basado en montos ingresados por el cliente. Sujeto a estudio de cada caso.</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="left_sidebar">
					<div class="sellers">
						<h4>Consultores</h4>
						<div class="single-nav">
			                <ul>
			                   <li><a href="#">Juan</a></li>
			                    <li><a href="#">Martina</a></li>
			                    <li><a href="#">Viviana</a></li>
			                    <li><a href="#">Esther</a></li>
			                    <li><a href="#">Roberto</a></li>
			                    <li><a href="#">Javier</a></li>		                    
			                </ul>
			              </div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
	</div>
</div>
</div>	