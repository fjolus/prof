<?php

if (isset($_GET['add']))
{

    $pageTitle = 'New prof';
    $action = 'addform';
    $name = '';
    $id = '';
    $button = 'Add prof';
    include '../prof/form.php';
    exit();
}

if (isset($_GET['addform']))
{
    include_once $_SERVER['DOCUMENT_ROOT'] . '/prof/insertProf.php';
    header('Location: .');
    exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Edit') {

    include_once $_SERVER['DOCUMENT_ROOT'] . '/prof/getProfWhereId.php';

    $pageTitle = 'Edit prof';
    $action = 'editform';
    $name = $row['name'];
    $id = $row['id'];
    $button = 'Update prof';
    include 'form.php';
    exit();
}

if (isset($_GET['editform']))
{
    include_once $_SERVER['DOCUMENT_ROOT'] . '/prof/updateProf.php';

    header('Location: .');
    exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Delete')
{


    include_once $_SERVER['DOCUMENT_ROOT'] . '/prof/deleteProf.php';

    header('Location: .');
    exit();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/prof/getProf.php';


foreach ($result as $row)
{
    $autocomplete[] = array('id' => $row['id'], 'name' => $row['text']);
}
var_dump($_POST);
exit();
?>