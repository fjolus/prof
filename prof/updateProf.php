<?php
include $_SERVER['DOCUMENT_ROOT'] . '/prof/prof.php';
try{
    $sql = 'UPDATE autocomplete SET text = :text WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':text', $_POST['text']);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error updating submitted category.';
    include $_SERVER['DOCUMENT_ROOT'] . '/prof/error.php';
    exit();
}
?>