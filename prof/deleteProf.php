<?php
include $_SERVER['DOCUMENT_ROOT'] . '/prof/prof.php';

try
{
    $sql = 'DELETE FROM autocomplete WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}

catch (PDOException $e)
{
    $error = 'Error deleting author.';
    include $_SERVER['DOCUMENT_ROOT'] . '/prof/error.php';
    exit();
}
?>