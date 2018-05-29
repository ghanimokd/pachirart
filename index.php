<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Saveur Arts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
      background-color: #DCDCDC;
  }

      #band h1{
        font-size: 10px;
        color: black;
        font-weight: bold;
      }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
      font-size: 11px;
      color: black;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
     
  .carousel-inner img {
      -webkit-filter: grayscale(0%);
      filter: grayscale(0%); /* make all photos black and white */ 
      width: 30%; /* Set width to 100% */
      margin: auto;
      height: 300px;
      
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 15px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
      /**********************/
      .row {
    display: -ms-flexbox; /* IE 10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE 10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
    -ms-flex: 50%; /* IE 10 */
    flex: 50%;
    padding: 0 4px;
}

.column img {
0    margin-top: 8px;
    vertical-align: middle;
}

/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
    font-size: 18px;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top" style="height: 120px; background-color: black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        
      <a class="navbar-brand" href="#myPage" style="float:left;"><img src="images/logo16.png"></a>
          <div class="collapse navbar-collapse" id="myNavbar" style="float:right;">
      <ul class="nav navbar-nav navbar-right" style="margin-top: 15px;">
        <li><a href="#myPage"><span class="glyphicon glyphicon-home"></span>Accueil</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-glass"></span>Devenir Partenaire
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Artiste</a></li>
            <li><a href="#">Galleriste</a></li>
            <li><a href="#">Amateur</a></li> 
          </ul>
        <li><a href="affiche_oeuvre.php"><span class="glyphicon glyphicon-camera"></span>Gallerie</a></li>
        <li><a href="#contact"><span class="glyphicon glyphicon-envelope"></span>CONTACT</a></li>              
          
          <li><a href="#contact"><span class="glyphicon glyphicon-shopping-cart"></span>Panier</a></li>
          
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-lock"></span>Login
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Inscription</a></li>
            <li><a href="#">Connexion</a></li>
            <li><a href="#">Deconnexion</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
        <marquee><img src="images/pacc9.png" style="margin-top: 30px;"></marquee>
      
    </div>   
    
  </div>
</nav>
<?php
    $db = new PDO('mysql:host=localhost;dbname=pachirart', 'root', '');
    $data = $db->query('select * from oeuvre');
    $data->execute();
    ?> 
    <?php
        while ($a = $data->fetch()) 
    {
        ?> 
<div id="my_carousel" class="carousel slide" data-ride="carousel">
<!-- Bulles -->
<ol class="carousel-indicators">
<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
<li data-target="#my_carousel" data-slide-to="1"></li>
<li data-target="#my_carousel" data-slide-to="2"></li>
</ol>
<!-- Slides -->
<div class="carousel-inner">
<!-- Page 1 -->
<div class="item active">  
<div class="carousel-page">
<img src="/images/bootstrap.png" class="img-responsive" style="margin:0px auto;" />
</div> 
<div class="carousel-caption">Page 1 de présentation</div>
</div>   
<!-- Page 2 -->
<div class="item"> 
<div class="carousel-page"><img src="/images/twitter-bootstrap.jpg" class="img-responsive img-rounded" 
style="margin:0px auto;"  /></div> 
<div class="carousel-caption">Page 2 de présentation</div>
</div>  
<!-- Page 3 -->
<div class="item">  
<div class="carousel-page">
<img src="/images/tablette.png" class="img-responsive img-rounded" 
style="margin:0px auto;max-height:100%;"  />
</div>  
<div class="carousel-caption">Page 2 de présentation</div>
</div>     
</div>
<!-- Contrôles -->
<a class="left carousel-control" href="#my_carousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#my_carousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
<!-- Container (The Band Section) -->
<!-- Container (The Band Section) -->

    
  <!-- Photo Grid -->
<?php
    $db = new PDO('mysql:host=localhost;dbname=pachirart', 'root', '');
    $data = $db->query('select * from oeuvre');
    $data->execute();
    while ($a = $data->fetch()) 
    {
        ?>
  <div class="row">
      
    <div class="col-md-3">
                <form   style="width: 200px; height: 250px;" method="post" action="affiche_oeuvre.php">
                    <div style="border: 1px solid gray; background-color: #f1f1f1;">
                        <img src="<?php echo $a['image']; ?>" class="img-responsive" style="width:200px; height: 220px;" /><br />
                        <h4 class="text-info"><?php echo $a['nomO']; ?></h4>
                            <input name="id" value="<?php echo $a['id']?>" type="hidden">
                            <input name="num_vnt" value="<?php echo $a['id']?>" type="hidden">
                        <h4 class="text-danger"><?php echo $a['prix']; ?> €</h4>
                        <input style="margin-left:5px; margin-right:5px; width:180px; align: center;" type="text" name="qte" class="form-control" value="1"/>
                        <input type="hidden" name="hidden_name" value="<?php echo $a['pres']; ?>" />
                                                
                    </div>           
                </form>  
            </div>
        <?php }
    ?>
 
<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 style="margin-top: 200px;" class="text-center"><center>Contactez Nous</center></h3>
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <br>
    
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"></a></li>
    <li><a data-toggle="tab" href="#menu1"></a></li>
    <li><a data-toggle="tab" href="#menu2"></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2></h2>
      <p></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2></h2>
      <p></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2></h2>
      <p></p>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
