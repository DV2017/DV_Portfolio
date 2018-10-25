<?php 
	foreach($prices as $price) {
?>

      <div class="col-sm-4">
        <div class="panel text-center">
          <div class="panel-heading">
            <h3><?php echo $price[level];?></h3>
          </div>
          <div class="panel-body">
            <p><strong><?php echo $price[pics];?></strong> Pics</p>
            <p><strong><?php echo $price[song];?></strong> Songs</p>
            <p><strong><?php echo $price[movie];?></strong> Movie</p>
          </div>
          <div class="panel-footer">
            <p><strong>$ <?php echo money_format('%.2n', $price[cost]);?></strong></p>
            <p>Per month</p>
            
            <!-- set target for each button looped in the array-->
            <a href="<?php echo $price[butTarget];?>">
            <button class="btn btn-warning btn-lg" role="button">Get started</button>
            </a>
          </div>
        </div>
      </div>
      
<?php } ?>
