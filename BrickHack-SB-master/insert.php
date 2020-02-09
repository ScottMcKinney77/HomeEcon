<?php
$connect = mysqli_connect("localhost", "brickhack", "sb", "brickhack");
if(isset($_POST["first_name"]))
{
  $grocery = mysqli_real_escape_string($connect, $_POST["grocery"]);
 $quantity = mysqli_real_escape_string($connect, $_POST["quantity"]);
 $query = "INSERT INTO tabletest(grocery, quantity) VALUES('$grocery', '$quantity')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
