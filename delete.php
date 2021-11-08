<?php
$connect = mysqli_connect("3.108.184.34", "royale", "royale1987", "db_automation");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM customer_list WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
