<?php if($models != null): ?>


<div id="portfoliolist">
<?php foreach($models as $model): ?>
    
    <?php $serchType ='';
    if($model->type==1){
    $serchType='casa';}
    else if($model->type==2){
    $serchType='apartamento';}
    else if($model->type==3){
    $serchType='lcomercial';}
    else {
    $serchType ='terreno';}
    ?>
    
    <div class="portfolio logo1" data-cat="<?php $serchType?>">
            <div class="portfolio-wrapper">				
                    <a  href="#">
                            <img src="images/sale_pic1.jpg"  alt="Image 2" />
                    </a>
                    <div class="label">
                            <div class="label-text">
                                    <a class="text-title"><?php echo $model->fechaPublicacion;?></a>
                                    <span class="text-category"><?php echo $model->equipado;?></span>
                            </div>
                            <div class="label-bg"></div>
                    </div>
            </div>
    </div>	
    <?php endforeach; ?>
</div>
<?php endif;