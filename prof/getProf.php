<?php
include $_SERVER['DOCUMENT_ROOT'] . '/prof/prof.php';

try{
    $result = $pdo->query('SELECT id, text FROM autocomplete');
}
catch (PDOException $e){
    $error = 'Error fetching prof details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/prof/error.php';
    exit();
}
?>