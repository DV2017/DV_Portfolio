  <!-- Footer -->
  <footer class="container-fluid text-center bg-grey">
    <a href="#myPage">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>2017. Bootstrap theme reproduced for learning purposes</p>
  </footer>
  
  <!-- adding a java script to scroll smoothly -->
  <script>
    var $root = $('html, body'); //stores the html element
    var $groot = $(".navbar a, footer a[href='#myPage']"); //stores the anchors
    
    $(document).ready(function(){
      $groot.on('click', function(event) {
        if(this.hash !== "") {
          event.preventDefault(); //prevents default scrolling
          var hash = this.hash; //hash takes the url property of the anchors
          $root.animate({scrollTop:$(hash).offset().top}, 900, function(){
            window.location.hash = hash; //url of the hash is passed on to the method.
          })
        }
      });
    }) 
  </script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>  
</body>
</html>