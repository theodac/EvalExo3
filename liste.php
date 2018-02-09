
<?php
include "./functions/connectionPDO.php";
$db = connectionPDO();

$sql = "SELECT * FROM movies ";
$reponse =  $db ->query($sql);
echo "<table>";
while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>". $donnees['TITRE'] .   "<td>".$donnees['REALISATEUR'] . "</td> <td>".$donnees['ANNEEPROD'] . "</td></tr>" ;
}
echo "</table>";