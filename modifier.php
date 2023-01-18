<?php
include "header.php";
include "navbar.php";

$connexion = new PDO(
    'mysql:host=localhost;dbname=bestiaire;charset=utf8',
    'root',
    ''
);
?>

<form method='POST'>
    <input name='modifier'>
    <input name='password' type='password'>
    <input type="submit" value='connection'>
</form>
<html>