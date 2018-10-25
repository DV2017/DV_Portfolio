<?php
	foreach($portfolios as $portfolio) {
?>
	  <!-- some html text -->
	  
     <div class="col-sm-4">
        <div class="thumbnail">
          <img src="media/<?php echo $portfolio[img];?>.jpg" alt="project 1" width="400" height="300">
          <h3><?php echo $portfolio[title];?></h3>
          <p><?php echo $portfolio[blurb];?></p>
        </div> <!--thumbnail--> 
      </div> 
      
<?php } ?>