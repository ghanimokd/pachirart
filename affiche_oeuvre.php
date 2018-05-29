<?php
session_start();    
include 'connect.php';

if(isset($_GET['pan'])){
    session_destroy();
    header('location:affiche_oeuvre.php');
}
 
if (isset($_POST['id'])){
   
    /**if (isset($_SESSION))
    {*/
        
   
        
        if (empty($_SESSION['pan']))
        {
                $item_array = array(
        'item_id'       => $_POST["id"],
        'item_name'     => $_POST["hidden_name"],
        'item_price'    =>$_POST["hidden_price"],
        'item_qte'      =>$_POST["qte"]
        );
    $_SESSION['pan'][0] = $item_array;

            
        }
        else
            
{  
            
            $item_array_id = array_column($_SESSION, "item_id");
            $count = count($_SESSION['pan']);
            
            
            $item_array = array(
        'item_id'       => $_POST["id"],
        'item_name'     => $_POST["hidden_name"],
        'item_price'    => $_POST["hidden_price"],
        'item_qte'      => $_POST["qte"]
        );
    $_SESSION['pan'][$count+1] = $item_array;
         
            
            //
        
        }
//        else 
        
  
}
   

if (isset($_GET["action"]))
{
    if($_GET["action"] =="delete")
    {
        foreach($_SESSION["pan"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["pan"][$keys]);
                echo '<script>alert("suppression réussie")</script>';
                echo '<script>window.location="affiche_oeuvre.php"</script>';
            }
            
        }
    }
    
}

if (isset($_GET["action"]))
{
    if($_GET["action"] =="inserer")
    {
        foreach($_SESSION["pan"] as $keys => $values)
        {
          
            
                //Insertion de la commande
                $id=$values["item_id"];
                $qte=$values["item_qte"];
//update nbrex dans oeuvre

$data3=$db->prepare('update oeuvre set nbrex=nbrex-? where id=?');
$data3->bindParam(1,$qte);
$data3->bindParam(2,$id);
$data3->execute();
                //update num_vnt dans ventes
$data4=$db->prepare('update ventes set num_vnt=num_vnt+? where id=?');
$data4->bindParam(1,$qte);
$data4->bindParam(2,$id);
$data4->execute();
                //unset($_SESSION["pan"][$keys]);
                //echo '<script>alert("suppression réussie")</script>';
                //echo '<script>window.location="affiche_oeuvre.php"</script>';
            header('location:https://www.paypal.com/signin?country.x=FR&locale.x=fr_FR');
            }
            
        }
    }
    

    //$ligne_supp = $_GET["id"];
    //$_id_supp= $_SESSION['pan'] as $keys;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Mon Panier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 <style>
  body {
      background: #5e4b4b69;
  } 
</style
    <body>
        <br />
        <div class="container">
            <h3  style="font-size: 24px; margin-top: 15px;" align="center"></h3><br />
     
            <?php
            $data1 = $db->query('select * from meth_vnt');
            $data1->execute();
            while ($b = $data1->fetch()) {
                $p_init=$b['prix_init'];
                $pas=$b['pas'];
            }
            $data = $db->query('select * from oeuvre o , ventes v where id=id_o');
            $data->execute();
            while ($a = $data->fetch()) {
             ?>
     
            <div class="col-sm-2" style="width: 250px; height: 220px; margin-right:20px; margin-bottom: 200px;">
                <form    method="post" action="affiche_oeuvre.php">
                    <div style="border: 1px solid gray; background-color: #f1f1f1; margin-bottom: auto;">
                        <img src="<?php echo $a['image']; ?>" class="img-responsive" style="display: block; margin-left: auto; margin-right: auto; width: auto; height: 220px; margin-top:15px; border: 1px groove #C0BFA9;" /><br />
                        <center><h4 class="text-info"><?php echo $a['nomO']; ?></h4></center>
                            <input name="id" value="<?php echo $a['id']?>" type="hidden">
                            <input name="num_vnt" value="<?php echo $a['id']?>" type="hidden">
                        <center><h4 class="text-danger"><?php echo $a['prix']; ?> €</h4></center>
     <center><input type="number" style="margin-left:5px; margin-right:5px; width:180px; " name="qte"/></center>                  
     
                        <input type="hidden" name="hidden_name" value="<?php echo $a['pres']; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo ($p_init+($a['num_vnt']*$pas));?>" />
                        <center><input type="submit" name="ajout_panier" style="margin-top: 10px; margin-bottom:10px;" class="btn btn-success" value="Ajouter au panier" /></center>
                    </div>           
                </form>  
            </div>
     
        <?php }
//            var_dump($_SESSION);
            
//            exit;
        
        ?>
     </div>
        <div style="clear:both; margin-top: 1200px;"></div>
            
        <h3>Détail Commande</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Nom</th>
                    <th width="10%">Qte</th>
                    <th width="20%">Prix</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>      
                </tr>        
                <?php
                 $total = 0;
                 //var_dump($_SESSION);
                if(!empty($_SESSION['pan']))
                {
                   
                    foreach($_SESSION['pan'] as $keys => $values)
                    {
                ?>
                <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_qte"]; ?></td>
                    <td><?php echo $values["item_price"]; ?> €</td>
                    <td><?php echo number_format($values["item_qte"] * $values["item_price"], 2); ?></td>
                    <td><a href="affiche_oeuvre.php?action=delete&id=<?php echo $values["item_id"];?>"><span class="text_danger">Supprimer</span></a></td>          
                </tr>
                <?php
                        $total = $total + ($values["item_qte"] * $values["item_price"]);
                    }
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="left"><?php echo number_format($total, 2); ?>
</td>
                    <td></td>
              </tr>                    
              </table>
                
                <a href="affiche_oeuvre.php?action=inserer"><button style="float: right;">Confirmer ma Commande</button></a> 
                <a href="affiche_oeuvre.php?pan=false"><button style="float: right; margin-right: 10px;">Annuler Commande</button></a>
            </div>
        </div>
        </body>
</html>