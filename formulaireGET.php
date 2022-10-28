<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    try{
        $conn = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $number = 1;
        }
    
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }

if ($number === 1) {
    $date = $_GET["jour"];
    $adresse = $_GET["adresse"];
    $capacite = $_GET["capacite"];
    $phone = $_GET["phone"];
    $heure1 = $_GET["heure1"];
    $heure2 = $_GET["heure2"];

    $sql = "INSERT INTO stage(date, heure1, heure2, adresse, capacite, phone)VALUES('.$date', '.$heure1', '.$heure2', '.$adresse', '.$capacite', '.$phone')";

    $conn->exec($sql);
    $number = 2;
}

?>


<script>
    window.location.replace("https://stage-hectorberlioz-seconde.go.yj.fr//tables.php");
</script>
</body>
</html>






