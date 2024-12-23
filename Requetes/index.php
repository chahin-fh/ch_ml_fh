<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        /* Styles globaux */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

/* Navigation */
nav {
    background-color:#93441A;
    padding: 20px 0; 
    border-radius: 20px;
    margin-top: 3px;
}
nav ul {
    list-style-type: none; 
    margin: 0; 
    padding: 0; 
    display: flex; 
    justify-content: center; 
    
}
nav ul li {
    margin: 0 10px; 
    color: white; 
    font-size: 18px; 
    font-family: Arial, sans-serif; 
}
nav ul li a{
    text-decoration: none;
    color: white;
}
nav ul li:hover {
    color: #ffb400;
    cursor: pointer; 
}

/* Bouton PDF */
.btn {
    background-color: #dc3545;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-bottom: 20px;
}

.btn:hover {
    background-color: #c82333;
}

/* Contenu principal */
main {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Formulaire */
form {
    margin-bottom: 20px;
}

form label {
    font-weight: bold;
    margin-right: 10px;
}

form input[type="text"] {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 200px;
}

form input[type="submit"] {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #218838;
}

/* Tableau */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #007bff;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #ddd;
}

/* Message total des ventes */
p {
    font-size: 18px;
    font-weight: bold;
    margin-top: 20px;
    color: #28a745;
}

footer {
    background-color:#B67332;
    color: white;
    text-align: center;
    padding: 1rem 0;
    border-radius: 30px;
    height: 80px;

}
footer p{
    color: white;
}
footer p a{
    text-decoration: none;
    color: white;
}
    </style>
</head>
<body>
    <nav>
        <ul id="left">
            <li class="left">A propos</li>
            <li class="left"><a href="../produit/index.html">Produits</a></li>
            <li class="left"><a href="../vente/index.html">Vents</a></li>
            <li class="left"><a href="#">Requetes</a></li>
            <li class="left">Aide</li>
            <li class="right"><a href="../connexion/index.html">Deconnexion</a></li>
        </ul>
    </nav>
    <main>
        <button id="convertToPdf" class="btn btn-danger">Convertir la page en PDF</button>
        <h1>Rechercher des ventes effectuées à une date donnée</h1>
        <form action="index.php" method="post">
            <label for="requete">Date:</label>
            <input type="text" name="requete" id="requete" placeholder="AAAA-MM-JJ">
            <input type="submit" value="Recherche">
        </form>
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Date</th>
                    <th>Annuler une vente</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $requete = $_POST['requete'];
                    $cnx = mysqli_connect("127.0.0.1","root","","ifbreak");
                    $requete = "SELECT produit, prix, quantite, date FROM ventes WHERE date = ?";
                    $reponse = $cnx->query($requete);
                    while ($donnees = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($donnees['produit']) . "</td>";
                        echo "<td>" . htmlspecialchars($donnees['prix']) . "</td>";
                        echo "<td>" . htmlspecialchars($donnees['quantite']) . "</td>";
                        echo "<td>" . htmlspecialchars($donnees['date']) . "</td>";
                        echo "<td><a href='annuler.php?id=" . htmlspecialchars($donnees['id']) . "'>Annuler</a></td>";
                        echo "</tr>";
                    }                    
                ?>
            </tbody>
        </table>
        <?php
            $cnx = mysqli_connect("127.0.0.1","root","","ifbreak");
            $req="SELECT SUM(prix * quantite) AS total_ventes FROM ventes WHERE date = ?";
            $result = $cnx->query($req);
            $donnees = $result->fetch_assoc();
            echo "<p>Le total des ventes est de " . htmlspecialchars($donnees['total_ventes']) . "</p>";
        ?>
    </main>
    <script>
        document.getElementById('convertToPdf').addEventListener('click', function() {
            var pdf = new PDF('p', 'pt', 'letter');
            pdf.addHTML(document.body, function() {
                pdf.save('ventes.pdf');
            });
        });
    </script>
    <footer>
        <p>&copy 2024 Touts Droits reservée .</p>
        <p>Site web crée par "<a href="mailto:anoirlool@gmail.com">malali3b@gmail.com</a>"</p>
    </footer>
</body>
</html>