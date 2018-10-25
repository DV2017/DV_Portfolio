<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>

        <!--   *** PORTFOLIO ***-->


  <?php 


  if($_SERVER['REQUEST_URI'] == "/~deepavarma/WebsiteBuilder/DV_portfolio/" || $_SERVER['REQUEST_URI'] == "/~deepavarma/WebsiteBuilder/DV_portfolio/index.php"){
    include("includes/main-content.php");
    }

  if(isset($_GET['home'])){
  include("includes/main-content.php");
  }

  if(isset($_GET['about'])){
    include("includes/about.php");
  }

  if(isset($_GET['contact'])){
    include("includes/contact.php");
  }


?>


        <!--   *** PORTFOLIO END ***-->
<?php include("includes/footer.php");?>