<?php if($models != null): ?>


<div id="portfoliolist">
    <?php foreach($models as $rows): ?>
    <?php $typePropery = "";
        if($rows['tipo'] == 1){$typePropery = 'casa';}
        else if($rows['tipo'] == 2){$typePropery = 'apartamento';}
        else if($rows['tipo'] == 3){$typePropery = 'terreno';}
        else{$typePropery = 'lcomercial';}
        $urlpic = Yii::app()->params['urlPropreriesPic'] . $rows['foto']?>
    
    <div <?php echo 'class="portfolio '.$typePropery.'" data-cat="'.$typePropery.'"' ?> >
        <div class="portfolio-wrapper">				
                <a  href="<?php echo Yii::app()->createUrl('property/OpenFile', array("id"=>$rows['idinmueble'])); ?>">
                        <img src="<?php echo $urlpic?>"  alt="Image 2" />
                </a>
                <div class="label">
                    <div class="label-text">
                            <a class="text-title"><?php echo 'Publicado: '.$rows['fechaPublicacion'] ?></a>
                            <span class="text-category"><?php echo $rows['descripcion'] ?></span>
                    </div>
                    <div class="label-bg"></div>
                </div>
        </div>
    </div>		
    <?php endforeach; ?>
</div>
<?php endif;