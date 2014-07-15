<?php if($models != null): ?>
<div class="main_bg1">
    <div class="wrap">	
        <div class="main1">
                <h2>Propiedades en Venta Destacadas </h2>
        </div>
    </div>
</div>
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <?php for ($i = 0; $i < count($models); $i++) :?>
                 
                <?php $rows = $models[$i];
                    $urlpic = Yii::app()->params['urlPropreriesPic'] . $rows['foto'] ?>
                <?php if($i%3==0):?>
                    <?php if($i!=0):?>
                        </div>
                        <div class="clear"></div>
                     <?endif;?>
                    <div class="grids_of_3">
                <?php endif;?>
                    <div class="grid1_of_3">
                            <a href="<?php echo Yii::app()->createUrl('property/OpenFile', array("id"=>$rows['idinmueble'])); ?>">
                                    <img src="<?php echo $urlpic?>" alt=""/>
                                    <h3><?php echo $rows['ciudad']. ' '.$rows['barrio']. ' '.$rows['descripcion'] ?></h3>
                                    <div class="price">
                                            <h4><?php echo $rows['moneda']==0? '$'.$rows['precio']:'U$S'.$rows['precio']?><span>Detalles</span></h4>
                                    </div>
                                    <span class="b_btm"></span>
                            </a>
                    </div>
                <?php if($i==(count($models)-1)):?>
                    </div>
                    <div class="clear"></div>
                <?php endif;?>
        
        
            <?php endfor;?>
           
        </div>
    </div>
</div>
<?php endif;

