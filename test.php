<?php

	$PARAM_hote='sql301.byethost24.com'; // le chemin vers le serveur
$PARAM_port='3306';
$PARAM_nom_bd='b24_19746570_commerce'; // le nom de votre base de données
$PARAM_utilisateur='b24_19746570'; // nom d'utilisateur pour se connecter
$PARAM_mot_passe='izilfsaid'; // mot de passe de l'utilisateur pour se connecter
       // $connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
$con=mysqli_connect($PARAM_hote,$PARAM_utilisateur,$PARAM_mot_passe,$PARAM_nom_bd);
$nom=$_POST['nom'];
$tel=$_POST['tel'];
$sql = "INSERT INTO contacts VALUES ('$nom','$tel')";
                                          

$res=mysqli_query($con,$sql);

 
if($res)
{
	
echo 'ajout effectuée avec succès';
}
else
{
echo 'Erreur';
}
?>