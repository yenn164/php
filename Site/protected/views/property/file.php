<?php
/* @var $this PropertyController */
/* @var $model Creado */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Ficha Inmueble';
$this->breadcrumbs=array(
	'File',
);

$urlpic1 = Yii::app()->params['urlPropreriesPic'] . $model['foto'];
$urlpic2 = Yii::app()->params['urlPropreriesPic'] . $model['foto2'];
$urlpic3 = Yii::app()->params['urlPropreriesPic'] . $model['foto3'];
$urlpic4 = Yii::app()->params['urlPropreriesPic'] . $model['foto4'];
$urlpic5 = Yii::app()->params['urlPropreriesPic'] . $model['foto5'];
$typePropery ='';  
if($model['tipo'] == 1){$typePropery = 'Casa';}
        else if($model['tipo'] == 2){$typePropery = 'Apartamento';}
        else if($model['tipo'] == 3){$typePropery = 'Terreno';}
        else{$typePropery = 'Local Comercial';}
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/content/css/productviewgallery.css" media="all" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/cloud-zoom.1.0.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/content/js/productviewgallery.js"></script>

<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_2">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <div class="more-views" style="float:left;">
				        <div class="more-views-container">
				        <ul>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>            
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a> 
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>  
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>
				            </li>
				          </ul>
				        </div>
				    </div>
				    <div class="product-image" style="float:right;"> 
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="<?php echo $urlpic1?>" title="Women Shorts" alt="Women Shorts">
				           	<img src="<?php echo $urlpic1?>" alt="Women Shorts" title="Women Shorts" />
				        </a>
                                        
                                        			  <div class="desc1">
                                        <h3><?php echo $model['ciudad'].', '.$model['ciudad'].'.'?></h3>
					<p><?php echo $model['descripcion']?></p>
					<h5><a href="#">Agendar Visita</a></h5>
					
			   	 </div>
				   </div>
                                            
                                            
					<script type="text/javascript">
						var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"<?php echo $urlpic1?>","main":"<?php echo $urlpic1?>","thumb":"<?php echo $urlpic1?>","label":""},"gallery":{\n\
                                                    "item_0":{"orig":"<?php echo $urlpic1?>","main":"<?php echo $urlpic1?>","thumb":"<?php echo $urlpic1?>","label":""},\n\
                                                    "item_1":{"orig":"<?php echo $urlpic2?>","main":"<?php echo $urlpic2?>","thumb":"<?php echo $urlpic2?>","label":""},\n\
                                                    "item_2":{"orig":"<?php echo $urlpic3?>","main":"<?php echo $urlpic3?>","thumb":"<?php echo $urlpic3?>","label":""},\n\
                                                    "item_3":{"orig":"<?php echo $urlpic4?>","main":"<?php echo $urlpic4?>","thumb":"<?php echo $urlpic4?>","label":""},\n\
                                                    "item_4":{"orig":"<?php echo $urlpic5?>","main":"<?php echo $urlpic5?>","thumb":"<?php echo $urlpic5?>","label":""}},"type":"simple","video":false}}'),
						    gallery_elmnt = jQblvg('.product-img-box'),
						    galleryObj = new Object(),
						    gallery_conf = new Object();
						    gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt=""><img src="" src_main="" width="64" height="85" title="" alt="" /></a>';
						    gallery_conf.animspeed = 200;
                                                    jQblvg(document).ready(function() {
						    galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
						        jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
						    jQblvg('.cs-fancybox-thumbs').fancybox({ prevEffect : 'none', 
						                             nextEffect : 'none',
						                             closeBtn : true,
						                             arrows : true,
						                             nextClick : true, 
						                             helpers: {
						                               thumbs : {
						                                   width: 64,
						                                   height: 85,
						                                   position: 'bottom'
						                               }
						                             }
						                             });
						    jQblvg('#wrap').css('z-index', '100');
						            jQblvg('.more-views-container').elScroll({type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });
						        
						});
						
						function initGallery(a,b,element) {
						    galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
						};
					</script>
				</div>
				</div>
				</div>
				<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			<div >
	
			   	</div>
			   	<div class="clear"></div>
			   	<!-- start tabs -->
				   	<section class="tabs">
		            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
			        <label for="tab-1" class="tab-label-1">Detalles</label>

	          
				    <div class="clear-shadow"></div>
					
			        <div class="content">
				        <div class="content-1">
				        	<p class="para top"><span></span><?php  echo $typePropery. '- Ubicado en '.$model['departamento'].', '.$model['ciudad']. ', en el barrio '.$model['barrio'].'. Dirección: '.$model['calle']. ' '. $model['numero'].' / '.$model['apto'].'. Publicado el '.$model['fechaPublicacion'] ?></p>
							<ul>
                                                                <li>Precio: </li><?php  echo $rows['moneda']==0?'$'. $rows['precio']:$rows['moneda']==1?'U$S'. $rows['precio']:'UI' . $rows['precio']?>
								<li>Gastos comunes: <?php echo $model['gastosComunes']?></li>
								<li>Superficie edificada: <?php echo $model['superEdif']?> m2</li>
								<li>Año de Construcción: <?php echo $model['anioConst']?></li>
								<li>Dormitorios: <?php echo $model['dormitorios']?></li>
                                                                <li>Baños: <?php echo $model['banios']?></li>
                                                                <li>Cocina: <?php echo $model['cocina']?></li>
                                                                <li>Living: <?php if($model['living'] == 1){$living = 'SI';}else {$living = 'NO';}
                                                                     echo $living?> </li>
                                                                <li>Comedor: <?php if($model['comedor'] == 1){$comedor = 'SI';}else {$comedor = 'NO';} echo $comedor?> </li>
                                                                <li>Terraza: <?php if($model['terraza'] == 1){$terraza = 'SI';}else {$terraza = 'NO';}
                                                                    echo $terraza?> </li>
                                                                <li>Piso: <?php echo $model['piso']?> </li>
                                                                <li>Equipado: <?php  if($model['equipado'] == 1){$equi = 'SI';}else {$equi = 'NO';}
                                                                echo $equi?> </li>
                                                                <li>Padrón: <?php echo $model['padron']?> </li>
                                                                <li>Mejoras: <?php if($model['mejoras'] == 1){$mejora = 'SI';}else {$mejora = 'NO';}
                                                                    echo $mejora?> </li>
                                                                <li>Nivelado: <?php if($model['nivelado'] == 1){$nivelado = 'SI';}else {$nivelado = 'NO';}
                                                                    echo $nivelado?> </li>
                                                                <li>Agreste: <?php if($model['agreste'] == 1){$agreste = 'SI';}else {$agreste = 'NO';}
                                                                    echo $agreste?> </li>
                                                                
							</ul>
							<div class="clear"></div>
						</div>

			        </div>
			        </section>
		         	<!-- end tabs -->
			   	</div>
			   	<!-- start sidebar -->
			 <div class="left_sidebar">
					<div class="sellers">
						<h4>Listado</h4>
						<div class="single-nav">
			                <ul>
			                   <li><a href="#">Casa en Rivera y 12 de Julio</a></li>
			                    <li><a href="#">Casa a Restaurar, muy amplia y en excelente barrio</a></li>
			                    <li><a href="#">Hermosa Vivienda Equipada</a></li>
			                    
			                </ul>
			              </div>
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
	</div>
</div>
</div>		