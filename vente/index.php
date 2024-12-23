<?php
include("../connect.php");
session_start();
$id = $_SESSION['id'];
$res = mysqli_query($cnx,"SELECT nom,prix from produit where id = '$id';");
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
extract($_POST);
$arr1 = [$opt_0 , $opt_1 , $opt_2];
$arr2 = [$quant_0 , $quant_1 , $quant_2];
$d = date("Y-m-d h:i:sa");
for($i = 0 ; $i<3 ; $i++){
$req = "INSERT INTO vent (DP,QV,DV) VALUES ('$arr1[$i]','$arr2[$i]','$d');";
$res = mysqli_query($cnx,$req);
}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <!-- Bootstrap CSS -->
    <link href="" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des ventes en ligne</title>
    <link rel="stylesheet" href="style.css">
    <script src=""></script>
    <script src="act.js"></script>
</head>
<body>
    <nav>
        <ul id="left">
            <li class="left">A propos</li>
            <li class="left"><a href="../produit/index.html">Produits</a></li>
            <li class="left"><a href="../vente/index.html">Vents</a></li>
            <li class="left"><a href="../Requetes/index.php">Requetes</a></li>
            <li class="left">Aide</li>
            <li class="right"><a href="../connexion/index.html">Deconnexion</a></li>
        </ul>
    </nav>
<div class="container">
    <!-- Section du formulaire -->
    <div class="form-section">
        <form method="POST" onsubmit="return aff() && act()">
            <div class="buttons">
                <button type="submit" class="submit-button" >Enregistrer les ventes</button>
                <button type="submit" class="refresh-button" id="act">Actualiser la page</button>
            </div>
            <!-- Product Row Template (hidden by default) -->

            <div class="" id="" style="">
                <h3>case 1 :</h3>
                <div>
                    <label for="produit">Produit :</label>
                    <select class="produit" name="opt_0">
                        <option value="">--Sélectionner un produit--</option>
                        <?php
                            $i = 0 ;
                            $arr = [];
                            while($t = mysqli_fetch_array($res)){
                                echo"
                                    <option value='$t[0]'>$t[0]</option>
                                ";
                                $i++;
                                $arr = [...$arr , $t[0]];
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="quantite">Quantité :</label>
                    <input name = "quant_0" type="number" class="quantite" min="1" placeholder="Entrez la quantité" id="q">
                </div>
                <div>
                <h3>case 2 :</h3>
                    <label for="produit">Produit :</label>
                    <select class="produit" name="opt_1">
                        <option value="">--Sélectionner un produit--</option>
                        <?php
                            for($j = 0 ; $j<$i ; $j++){
                                echo"
                                    <option value='$arr[$j]'>$arr[$j]</option>
                                ";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="quantite">Quantité :</label>
                    <input name = "quant_1" type="number" class="quantite" min="1" placeholder="Entrez la quantité" id="q">
                </div>
                <div>
                <h3>case 3 :</h3>
                    <label for="produit">Produit :</label>
                    <select class="produit" name="opt_2">
                        <option value="">--Sélectionner un produit--</option>
                        <?php
                            for($j = 0 ; $j<$i ; $j++){
                                echo"
                                    <option value='$arr[$j]'>$arr[$j]</option>
                                ";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="quantite">Quantité :</label>
                    <input name = "quant_2" type="number" class="quantite" min="1" placeholder="Entrez la quantité" id="q">
                </div>
                
                            
            </div>
            <div id="inputContainer">

            </div>
            
        </form>
    </div>

    <!-- Section des ventes -->
    <div class="sales-section">
        <p class="message" id="m1"></p>
        <p class="message" id="m2"></p>
        <h2>Les dernières ventes enregistrées</h2>
        <table>
            <thead>
                <tr>
                    <th>Désignation Produit</th>
                    <th>Quantité Vendue</th>
                    <th>Date de la Vente</th>
                    <th>Annuler la vente</th>
                </tr>
            </thead>
            <tbody id="sales-list">

            </tbody>
        </table>
        <br><br>
        <a href="#" id="db">Voir la liste complète des ventes du jour</a> 
    </div>
</div>
<footer>
    <p>&copy 2024 Touts Droits reservée .</p>
    <p>Site web crée par "<a href="mailto:malali3b@gmail.com">malali3b@gmail.com</a>"</p>
</footer>
</body>
</html>
<?php
mysqli_close($cnx);
?>