<?php
include $_SERVER['DOCUMENT_ROOT'] . '/prof/prof.php';
try{
    $sql = 'INSERT INTO autocomplete SET text = :text';
    $s = $pdo->prepare($sql);
    $s->bindValue(':text', $_POST['text']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error adding submitted prof.';
    include $_SERVER['DOCUMENT_ROOT'] . '/prof/error.php';
    exit();
}

?>