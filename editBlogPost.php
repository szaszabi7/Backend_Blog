<?php 

require_once 'db.php';
require_once 'bejegyzes.php';

$bejegyzesId = $_GET['id'] ?? null;

if ($bejegyzesId === null) {
    header('Location: index.php');
    exit();
}

$bejegyzes = Bejegyzes::getById($bejegyzesId);

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $ujTartalom = $_POST['tartalom'] ?? '';

    $bejegyzes -> setTartalom($ujTartalom);

    $bejegyzes -> mentes();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
        <input type="text">
        <input type="submit" name="szerkeszt">
    </form>
</body>
</html>