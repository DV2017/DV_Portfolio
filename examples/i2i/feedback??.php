
<div class="carousel-inner" role="listbox">
	<div class="item">

<?php  
	foreach($feedbacks as $feedback) {
?>
	<h4>
		<em><?php echo $feedback[comment];?><em><br>
		<span style="color:orange;font-style:normal;"><?php echo $feedback[name] .", ". $feedback[position].", ".$feedback[company];?></span>
	</h4> 
	 

<?php } ?>

	</div>
 </div>