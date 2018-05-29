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
        
    <body style="background: #f2f2f2;">
      <?php
include 'connect.php';

$id=$_GET['id'];
$data=$db->prepare('select * from oeuvre where id=?');
$data->bindParam(1,$id);
$data->execute();
$a = $data->fetch()
?>  
        <div class="container-fluid">
        <div class="row">
            <div class="column">
            <div class="image-encours" style="margin-top: 100px; margin-left: 100px; height: 520px;; width:400px; float: left;"> 
            <img src="<?php echo $a["image"];?>" style="width: 100%;">
            <div class="image-encours" style=" margin-top: 10px; height: 66px; border: ridge; color: black; width:400px; "> 
            <a href="ajout_p.php?id=<?php echo $a['id']?>&ref=<?php echo $a['reference'] ?>"><center><button type="button" class="btn" style="margin-top: 10px; margin-left: 10px; width: 150px"><span class="glyphicon glyphicon-shopping-cart"></span>Ajouter au Panier</button></center></a>
                
                </div>
                </div>       
                           
            </div>             
           
            <div class="column">
                 <div class="container" style="margin-top: 100px; margin-left: 20px; height: 500px;; width:700px; float: left;">
  <h2>Presentation de l'oeuvre</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Presentation</a></li>
    <li><a data-toggle="tab" href="#menu1">Formats</a></li>
    <li><a data-toggle="tab" href="#menu2">cadres</a></li>
    <li><a data-toggle="tab" href="#menu3">Couleurs</a></li>
    <li><a data-toggle="tab" href="#menu4">Prix</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Description de l'Oeuvre</h3>
      <p><?php echo $a["pres"];?></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3><?php echo $a["reference"];?></h3>
      <p><?php echo $a["reference"];?></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Type de cadre</h3>
      <p>Description des types de cadres disponibles.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Couleurs Dispoinibles</h3>
      <p>couleurs Proposées pour l'Oeuvre ???</p>
    </div>
      <div id="menu4" class="tab-pane fade">
      <h3>Prix de l'Oeuvre</h3>
      <p>Prix offerts</p>
    </div>
          </div>
                </div>
                    </div>

    </div>    
        </div>
            
   
   
        </body>