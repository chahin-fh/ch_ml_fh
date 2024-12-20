<?php

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin: 0 auto;
}
th, td {
    padding: 15px;
    background-color: rgba(255,255,255,0.2);
    color: #fff;
}
th {
    text-align: center;
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
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                </tr>
            </thead>';
while($ligne = mysqli_fetch_array($res)){
    echo"
            <tbody>
                <tr>
                    <td><p>$ligne[0]</p></td>
                    <td><p>$ligne[1]</p></td>
                    <td><p>$ligne[2]</p></td>
                    <td><p>$ligne[3]</p></td>
                    
                </tr>
            </tbody>";
}
        echo'</table>
    </main>
    <footer>
        <p>&copy 2024 Touts Droits reservée .</p>
        <p>Site web crée par "<a href="https://mail.google.com/mail/u/0/#inbox?compose=VpCqJbPWTpHzVQGWQpDDHrdLRjXVzRHFwLwfNlCfdZbdsCmdSDDvRnkVKQqTWwqRbjSmdsL">malali3b@gmail.com</a>"</p>
    </footer>
</body>
</html>
';

?>