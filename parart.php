<?php
   
include 'connect.php';
?>

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
  </head>
  <body style="background: #FFFAFA; font-size: 16px;">

<style type="text/css">
.roundedImage{
    overflow:hidden;
    -webkit-border-radius:80px;
    -moz-border-radius:80px;
    border-radius:80px;
    width:180px;
    height:180px;
    }
    body {
color: #FFFAFA;
    }

      </style>
    <div id="searchbar" class="container" style="margin-top: 60px;">               
                
                <form action="rech" style="margin-bottom: 15px;" >
                <input type="search" placeholder="Choissisez un artsite" name="the_search">
                <button onclick="rech.php"><span class="glyphicon glyphicon-search"></span></button>
                </form>
                </div>
  <?php
    $data = $db->query('select * from artiste');
    $data->execute();
    ?>
       
    <div class="container-fluid" style="margin-left:20px;">
        <?php
        while ($a = $data->fetch()) 
    {
        ?> 
        
  <div class="row" style="margin-top: 8px; height:318px; width:1500px; position; centered; border: groove; border-radius: 5px;">
      
  
    <div class="col-md-1" style="margin-left: 10px; margin-top: 10px; height:80%; width:18%;">
      
        <a><img src="<?php echo $a['image']?>" title="<?php echo $a['pres'] ?>"                                  style="border-radius: 50%; border: groove; color: gray; width: 200px;"></a>
        
        <a href="#Blob" style="color: black;"><?php echo $a['prenom'].' '.$a['nom']?></a>
      </div>
      
  
        <?php
$idart=$a['id_a'];
    $data1 = $db->prepare('select * from oeuvre where id_ar=?');    
    $data1->bindParam(1,$idart);        
    $data1->execute();      
    
        while ($b = $data1->fetch()) 
            {
            ?>    
        <div class="col-md-3" style="margin-top:5px; margin-left:5px; margin-right:5px;height:320px; width:auto; border-radius: 4px; font-size: 14px ; color: black;">
        
        <a href="#Blob"><img style="height: 220px; width: auto; border: groove; color: gray; margin-top: 10px; padding: 1px;" src="<?php echo $b['image']?>" class="img-responsive"></a><br>
            <a href="#Blob" style="color: black; text-align: center;"><?php echo $b['nomO']?></a><br>        
        <?php echo $b['prix'].'£'?>
    </div>
        <?php 
        }
            ?>
    </div>
        
    
      <?php 
            }
        
      ?>
      
    </div>
    
    </body>
  
  
  
  
  </html>