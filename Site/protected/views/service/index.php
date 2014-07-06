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
			<h4>Nuestros Servicios</h4>
			<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
			<div class="ser-grid">
				<div class="ser-grid-list">
					<a href="<?php echo Yii::app()->createUrl('service/apr', array("view"=>"apr")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/icon1.png" alt=""></a>
					<h5><a href="<?php echo Yii::app()->createUrl('service/apr', array("view"=>"apr")); ?>">Calculo de APR</a></h5>
					<p class="para">It is a long established fact that a reader will be distracted by the page when looking at its layout.</p>
				</div>
				<div class="ser-grid-list">
					<a href="<?php echo Yii::app()->createUrl('service/loanmonthlypayment', array("view"=>"loanmonthlypayment")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/icon2.png" alt=""></a>
					<h5><a href="<?php echo Yii::app()->createUrl('service/loanmonthlypayment', array("view"=>"loanmonthlypayment")); ?>">Calculo de Prestamo</a></h5>
					<p class="para"> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="ser-grid">
				<div class="ser-grid-list">
					<a href="<?php echo Yii::app()->createUrl('service/loannumberofpayment', array("view"=>"loannumberofpayment")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/icon5.png" alt=""></a>
					<h5><a href="<?php echo Yii::app()->createUrl('service/loannumberofpayment', array("view"=>"loannumberofpayment")); ?>">Numero de Pago de Prestamo</a></h5>
					<p class="para"> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
				</div>
				<div class="ser-grid-list">
					<a href="<?php echo Yii::app()->createUrl('service/leasemonthlypayment', array("view"=>"leasemonthlypayment")); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/content/images/icon6.png" alt=""></a>
					<h5><a href="<?php echo Yii::app()->createUrl('service/leasemonthlypayment', array("view"=>"leasemonthlypayment")); ?>">Calculo de cuota de Lease</a></h5>
					<p class="para">It is a long established fact that a reader will be distracted by the page when looking at its layout.</p>
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