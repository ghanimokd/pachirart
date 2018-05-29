<?php
include 'connect.php';
$id=$_GET['id'];
// Start the session
session_start();
// eventuellement vider le panier
if (isset($_GET["vider"]))
{
  session_unset();
}
?>
<!DOCTYPE html>
<html>
<body>
    <div class="table">
        <div class="wrap">
            <div class="rowtitle">
                <span class="name">Nom de l'Oeuvre</span>
                <span class="price">Prix</span>
                <span class="qte">Quantité</span>
                <span class="action">Action</span>      
            </div>
        <?php 
        $ids = array_keys($_session['panier']);
        $products =$db->query('select * from oeuvre where id in ('.implode(',',$ids).')');
        foreach($products as $products):
        ?>
        <div class="row">
            <a href="#" class="img"><img src="<?=$products->image?>"></a>
            <span class="name"><?=$products->nomO?></span>
            <span class="nbex"><?=$products->nb_ex?></span>
                <a href="#" class="del">supprimer</a>      
            </div>   
        </div>
    </div>

<?php
            }
            echo"Bonjour";
//afficher le contenu de la session
//if (isset($_SESSION["list"]))
//{
//  foreach ($_SESSION["list"] as $value){
//    print $value . "<br>";
//  }
//}
?>
</body>
</html>