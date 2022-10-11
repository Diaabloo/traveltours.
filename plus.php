<?php include 'header.php'; ?>





<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=travel_tours;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('erreur:' . $e->getMessage());
}
$reponse = $con->query('SELECT * FROM bookform');
$donnees = $reponse->fetch();
echo "<center><table border=1 bgcolor=grey><tr><th>nom</th><th>email</th><th>phone</th><th>adrese</th></tr>";

//$i=1;
while ($donnees = $reponse->fetch()) {
    echo "<tr><td>" . $donnees['name'] . "</td><td>" . $donnees['email'] . "</td><td>" . $donnees['phone'] . "</td><td>" . $donnees['adresse'] . "</td></tr>";
    //echo"<td><center><a href=\"supprimer.php?num=".$donnees['Nclient']."\"><img src=delete.png></a><a href=\"modifier.php?num=".$donnees['Nclient']."\"><img src=modifier.png></a></center></td></tr>";
}

echo "</table></center>";

//var_dump($etudiant);




?>
<?php include 'footer.php'; ?>
