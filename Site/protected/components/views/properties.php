<?php if($models != null): ?>


<div id="portfoliolist">
    <?php foreach($models as $rows): ?>
    <?php echo '<td>'.$rows['tipo'].'</td>' ?>
    <?php echo '<td>'.$rows['descripcion'].'</td>' ?>
    <br>
    <?php foreach($rows as $colums): ?>
    <?php echo '<td>'.$colums.'</td>' ?>
   
    <?php endforeach; ?>
        <BR>
    <?php endforeach; ?>
</div>
<?php endif;