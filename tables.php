<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tables.css">
</head>
<body>

<header>
    <h1>Liste des stages disponibles</h1>
</header>

<div id="nav">
<nav>
    <li><a href="index.html"><button>Acceuil</button></a></li>
    <li><a href="form.html"><button>partager son offre de stage</button></a></li>
</nav>
</div>


<?php
    $servname = 'localhost';
    $dbname = 'mhghqtep_stage';
    $user = 'mhghqtep_jrm';
    $pass = 'Ab@123456789/';
    
    $date = "";
    $adresse = "";
    $capacite = "";
    $phone = "";
    $heure1 = "";
    $heure2 = "";
    $number = 0;
    
    try {
        $user = 'mhghqtep_jrm';
        $pass = 'Ab@123456789/';
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
        $request = 'SELECT * FROM stage';
        $hour = date('H\hi');
        $sql = 'DELETE FROM stage WHERE heure2 >= '.$hour.'';
        
        foreach($conn->query($request) as $row) {
            createTable($row);
        }
    
        $dbh = null;
    }   catch(PDOException $e){
          echo "Erreur : " . $e->getMessage();
          die();
    }
    
    function createTable($row) {
        echo '<table>
                <tr>
                    <th>Date</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Adresse</th>
                    <th>Capacité</th>
                    <th>Téléphone</th>
                </tr>
                <tr>
                    <td>'.substr($row['date'], 1).'</td>
                    <td>'.substr($row['heure1'], 1).'</td>
                    <td>'.substr($row['heure2'], 1).'</td>
                    <td>'.substr($row['adresse'], 1).'</td>
                    <td>'.substr($row['capacite'], 1).'</td>
                    <td>'.substr($row['phone'], 1).'</td>
                </tr>
            </table>';
    }

    
?>
</body>
</html>