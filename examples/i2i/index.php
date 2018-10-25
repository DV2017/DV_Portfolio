<?php

	include('includes/header.php');

?>



  <!--"About" section-->
  <div class="jumbotron text-center">
    <h1>i-2-i</h1>
    <p>A closer look</p>
    
    <form class="form-inline">Request a catalogue:
      <div class="input-group">
        <input type="email" class="form-control" size="50" placeholder="Enter your email address." required>
        <div class="input-group-btn">
          <button type="button" class="btn btn-warning">Submit</button>
        </div>
      </div>
    </form>      
  </div>  

  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2><span style="letter-spacing:4px;">The "i" of a BiRD</span></h2>
        <p><strong>Identification and habits</strong></p>
        <button class="btn btn-warning btn-sm">Click to know more</button>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-signal logo"></span>
      </div>
    </div>    
  </div>
  
  <div class="container-fluid bg-grey">
  <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-signal logo"></span>
      </div>
      <div class="col-sm-8">
        <h2><span style="letter-spacing:4px;">The "i" of a HABiTAT</span></h2>
        <p><strong>Breeding and wintering grounds</strong></p>
        <button class="btn btn-default btn-sm">Click to know more</button>
      </div>
    </div>    
  </div>
  
 
<!-- Container - services section -->
  <div id="services" class="container-fluid text-center">
  
    	<h2>SERVICES</h2>
    	<p><strong>What we offer</strong></p>
    	<br>
 
    <?php include('services.php');?>
    
  </div> 
  <!-- end of services-->  
  
<!-- Container - portfolio section-->
  <div id="portfolio" class="container-fluid text-center bg-grey">
  
    <h2>PORTFOLIO</h2>
    <p><strong>View the Gallery</strong></p>
    <br>
    
    <div class="row text-center">
 		<?php include('portfolio.php');?>
    </div>
    
    <!--a carousel-->
    <h2>WHAT OUR CUSTOMERS SAY</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <span class="sr-only">Carousel listing opinions from 3 users</span>
      <!--indicators-->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <!--wrapper for slides-->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <h4>"Balanced colour comparison. Very happy !"<br><span style="color:orange;font-style:normal;">Michael Roe, Vice President, Comment Box, ABC</span></h4>  
        </div>
        <div class="item">
          <h4>"Panoramic landscaping is good."<br><span style="color:orange;font-style:normal;">John Doe, Director, Company XYZ 2</span></h4>  
        </div>
        <div class="item">
          <h4>"Fluid line impressions. I would like to share this."<br><span style="color:orange;font-style:normal;">Mary John, Member, My Society, PQRS</span></h4>  
        </div>
      </div> <!-- carousel-inner-->

        
      <!--left and right controls-->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>      
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>      
      </a>
    </div>
  </div>  
  
  <!--creating panels-->
  <div id="pricing" class="container-fluid text-center">
      <h2>PRICING</h2>     
      <p>Choose a pricing plan that works for you</p>  
    <div class="row">

	<?php  include('pricing.php');?>

    </div>
  </div> 
  
<!--Container Contact -->
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>

	<?php include('contact.php'); ?>

  </div>

  <!--Insert google map: https://console.developers.google.com/-->
  <div id="googleMap" style="height:400px;width:100%;"></div>
  
    <script>
        function myMap() {
          var myCenter = new google.maps.LatLng(52.632381,4.753375);
          var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
          var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
          var marker = new google.maps.Marker({position:myCenter});
          marker.setMap(map);
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXCrUgHfsEMOiyU16L7TApW9GL-byoP7I&callback=myMap">
    </script>

<?php

	include('includes/footer.php');
?>
