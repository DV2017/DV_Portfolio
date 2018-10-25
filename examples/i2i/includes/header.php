<?php 

	include('includes/arrays.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Scroll-spy demo | First Squares Media</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="styles.css">
  
 
</head>

<!-- scrollspy is added to the body. for data-target use the top level class: in this case .navbar. 'sr-only' makes the text within the tags only readable to 'assistive technology' for screenreaders.  Logo has a id-based reference link to body "myPage" -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="30">

  <!-- navigation bar-->

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#myPage" >Logo</a>
      </div>
      
      <div class="collapse navbar-collapse ">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#services">SERVICES</a></li>
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#pricing">PRICING</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li><a href="../../index.php?home"><img width="20" src="icons/icons8-export.png"> GO BACK</a></li>
        </ul>
      </div>  
    </div>
  </nav>