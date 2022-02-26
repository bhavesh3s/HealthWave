<?php
//delete.php
$connect = mysqli_connect("localhost","root","","gk");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM galleryimages WHERE id = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>