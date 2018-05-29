<!DOCTYPE html>
<html lang="en">
<head>
</head>
<title>Test Gallerie</title>
<body>

<h1>Gallerie d'images</h1>
<?php
    $db = new PDO('mysql:host=localhost;dbname=pachirart', 'root', '');
    $data = $db->query('select * from oeuvre');
    $data->execute();
   
    /*mysql_connect("localhost" , "root" , "");
    mysql_select_db("pachirart");
    $res=mysql_query("select * from oeuvre");*/
    echo "<table>";
    while ($a = $data->fetch()) 
    {
        
        echo "<tr>";
        echo "<td>";?><img src="<?php echo $a["image"];?>" height="100" width="100"><?php echo"</td>";
        echo "<td>"; echo $a["nomO"]; echo "</td>";              
        echo "</tr>";
    }
echo "</table>";
?>
</body>
</html>