<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=autocomplete', 'autocomplete', 'GKpsFYyCzzkPBnf8');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8');
}

catch (PDOException $e)
{
    $error = "Unable to connect to the database" . $e->getMessage();
    include $SERVER['DOCUMENT_ROOT'] . '/error.php';
}
?>