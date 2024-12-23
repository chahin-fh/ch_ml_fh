<?php
session_start();
$cnx = mysqli_connect("localhost", "root", "", "ifbreak");
$id = $_GET['id'];
$requete =("DELETE FROM 'vente' WHERE id =?");
$res=$cnx->query($requete);
header('Location: ../index.php');
?>