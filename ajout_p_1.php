<?php
// Start the session
session_start();
//stocker les ajouts dans la session
if (isset($_GET["id"]))
{
  if (!isset($_SESSION["panier"]))
  {
    $_SESSION["panier"] = array();
  }
  array_push($_SESSION["panier"], $_GET["id"]);
}
//compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["panier"]))
{
  $panier_count = sizeof($_SESSION["panier"]);
}
?>

<a href="panier.php">Voir le panier</a> (<?php print $panier_count; ?> Oeuvre (s))<br><br><br>

<center><button type="button" class="btn" style="margin-top: 10px; margin-left: 10px; width: 150px"><span class="glyphicon glyphicon-shopping-cart"></span>Confirmer Commande</button></center>

    
