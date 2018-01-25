<?php


$con=mysqli_connect("localhost","root","","gestion");


$res=mysqli_query($con,"select * from categorie");
$tab=[];
while($r=mysqli_fetch_assoc($res))
{
$tab[]=$r;

}

echo json_encode($tab);

?>