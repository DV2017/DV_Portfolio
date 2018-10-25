  
  <!-- NEW rebuilding with some php codes -->

	<div class="row">  
	<?php 
		foreach($serviceItems as $service){
	?>
      	
    	<!--more html text -->	
      	<div class="col-sm-4">
      		<span class="glyphicon <?php echo $service[glyphicon];?> logo-small"></span>
      		<h3><strong><?php echo $service[title];?></strong></h3>
      		<p><?php echo $service[blurb];?></p>
      	</div>
      		
	<?php } ?>
	</div>      	
    	
        
        
        
     