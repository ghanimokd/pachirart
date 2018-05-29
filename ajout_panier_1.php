<?php
include 'connect.php';
$id=$_GET['id'];
$ref=$_GET['ref'];
//session_start();
$data = $db->prepare('SELECT count(*) as nbid FROM panier where id_o=?');
$data->bindParam(1,$id);
$data->execute();
$a = $data->fetch();
//echo ($a['nbid']);
if ($a['nbid']>0) {
   echo '<script>alert("Vous avez déja choisi cette oeuvre.")</script>'; 
} 
    
else {

$data = $db->query('SELECT MAX(num_art) as maxid FROM panier');
$data->execute();
$a = $data->fetch();
//echo ($a['maxid']);
$idmax1=$a['maxid']+1;
//$row=mysql_fetch_assoc($data); 
//echo "The max num is ". $row['num']."this is it";
//while($a=$data->fetchAll()){
  // echo($a['1']);
    // exit;
       // }
//$max=$row['num'];
//echo($max);
//$max="SELECT MAX(num_art) as num FROM panier";
//$maxquery= mysql_query($max) or die (died);
//while($row = mysql_fetch_assoc($data)) {
   // echo "The max num is ". $row['num']."this is it";
//}



//$requete = "select max(num_art) from panier";
//$sql="select max(num_art) from panier"; 
//$rep = mysql_query($sql) or die(mysql_error() ) ; 
//$idmax1= mysql_fetch_assoc($rep);
//$res1=mysql_query($req1); 
//$idmax1=mysql_result($req1,0,"max(num_art)");
//$donnees = $result->fetch();
//echo $donnees; 
//$imax1=$row['num'];

//    $max= $db->query('select max(num_art) from panier');
//    $max->execute();
//        while($a=$max->fetchAll()){
//            var_dump($a);
//            exit;
//        }
//    $max=$max+1;
//$_SESSION['panier']=$_SESSION['panier']+1;
    $id=$_GET['id'];
    $ref=$_GET['ref'];
  //  $max=$_SESSION['panier']+1;
    $prix=0;
    
    $data=$db->prepare('insert into panier (num_art, id_o , reference , prix) VALUES (? , ? , ? , ?)');
$data->bindParam(1,$idmax1);
$data->bindParam(2,$id);
$data->bindParam(3,$ref);
$data->bindParam(4,$prix);
$data->execute();
//echo '<script>alert("ajout avec succÃ©es")</script>';
?>
<center><button type="button" class="btn" style="margin-top: 50px; margin-left: 10px; width: 150px"><span class="glyphicon glyphicon-shopping-cart"></span>Confirmer Commande</button></center>
<?php
} 
?>
    
