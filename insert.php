<?php
$connect = mysqli_connect("3.109.187.205", "root", "royale1987", "db_automation");
if(isset($_POST["name"], $_POST["cashapp"], $_POST["RS"], $_POST["XG"], $_POST["FK"], $_POST["UM"], $_POST["OS"], $_POST["MW"], $_POST["DU"]))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $cashapp = mysqli_real_escape_string($connect, $_POST["cashapp"]);
 $RS = mysqli_real_escape_string($connect, $_POST["RS"]);
 $XG = mysqli_real_escape_string($connect, $_POST["XG"]);
 $FK = mysqli_real_escape_string($connect, $_POST["FK"]);
 $UM = mysqli_real_escape_string($connect, $_POST["UM"]);
 $OS = mysqli_real_escape_string($connect, $_POST["OS"]);
 $MW = mysqli_real_escape_string($connect, $_POST["MW"]);
 $DU = mysqli_real_escape_string($connect, $_POST["DU"]);
 $query = "INSERT INTO customer_list(name,cashapp,rs,xg,fk,um,os,mw,du) VALUES('$name', '$cashapp','$RS', '$XG','$FK', '$UM','$OS', '$MW','$DU')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
