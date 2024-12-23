<?php
extract($_POST);
$cnx = mysqli_connect("127.0.0.1","root","","ifbreak");
$req5 = "insert into personne (passe,nom,mail,monnaire) values('$mp','$nom','$email','$flous');" or die("probelm l4") ;
$res9 = mysqli_query($cnx,$req5) or die("problim ins");
$nb5 = mysqli_affected_rows($cnx);
if($nb5<1) die("problem");
echo"mar7ba bik m3ana a 5ouya ";
sleep(20);
header("location:../connexion/index.html");
mysqli_close($cnx);
?>