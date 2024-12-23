<?php   
session_start();
extract($_POST);
$cnx = mysqli_connect("localhost","root","","ifbreak");
$req = "SELECT code from produit where (code='$code');";
$res = mysqli_query($cnx , $req);
$nb = mysqli_num_rows($res);
if($nb>0){
    die("le code est deja existée");
}else{
    $id = $_SESSION['id'];
    $req1 = "SELECT id FROM personne WHERE id = $id";
    $res1 = mysqli_query($cnx , $req1);
    $nb5 = mysqli_num_rows($res1);
    if($nb5>0){
        $req5 = "insert into produit (qua,code,nom,prix,id) values('$qua','$code','$nom','$prix','$id');";
        $res9 = mysqli_query($cnx,$req5) or die("problim l13");
        $nb5 = mysqli_affected_rows($cnx);
        if($nb5<1) die("problem");
        sleep(3);
        header("location:../produit/index.html");
    }else{
        die("fama moshkla");
    }
}
mysqli_close($cnx);
?>