<?php
include $_SERVER['DOCUMENT_ROOT'] . '/prof/prof.php';
try{
    $sql = $pdo->query('SELECT id, text FROM autocomplete WHERE id = :id');
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error fetching prof details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/prof/error.php';
    exit();
}
$row = $s->fetch();
?>