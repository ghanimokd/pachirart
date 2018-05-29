<!DOCTYPE html>
<?php
include 'connect.php';
?>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Galerie-Artiste</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #FFFCFA;">
      <div class="container-fluid">
        <div style="margin-top: 60px; margin-left: 200px; margin-bottom: 20px;">      
      <h3>Chercher un artiste</h3>
                <form action="" class="formulaire">                 
                <input type="search" placeholder="Veuillez saisir ici" name="Rechercher">
                    <a href="#" class="btn btn-success btn-lg" style="background-color: #4D664A; border: groove; color: white;">
                        <span class="glyphicon glyphicon-search"></span> 
                    </a>
                   
                </form>
    </div>
      
    <?php   
    $data = $db->query('select * from artiste');
    $data->execute();
            while ($a = $data->fetch()) 
    {
        ?> 
      
        <div class="row" style="height: 380px; width: 1500px; padding: 0px; margin-top: 10px; margin-left: auto; margin-right: auto; border: groove; border-radius: 1px;">
       <div style="float: left; margin-right: 30px; margin-left: 15px;">
         <img src="<?php echo $a['image']?>" title="<?php echo $a['pres']?>"style="height: 200px; width: auto; margin-left: auto; margin-right: auto; margin-top: 20px; border: 1px groove #C0BFA9; border-radius: 50%;">
        <h4 class="text-info"><?php echo $a['prenom'].' '.$a['nom']?></h4>
       </div>   
            <?php 
             $id=$a['id_a'];                             
       
        $data1 = $db->prepare('SELECT * from oeuvre where id_ar=?');
        $data1->bindParam(1,$id);
        $data1->execute();
            while ($b = $data1->fetch()) 
                
    {
              
      ?>
       <div class="col-md-8" style="height: 280px; width: 200px; margin-left: 10px; margin-top: 10px;"> 
           <img src="<?php echo $b['image']; ?>" class="img-responsive" style="display: block; margin-left: auto; margin-right: auto; width: auto; height: auto; margin-top:5px; margin-bottom: auto; border: 1px groove #C0BFA9;" />        
           <h4><?php echo $b['nomO']?></h4>
           <h4><?php echo $b['prix']?> €</h4>
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