<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Clicker</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php
    if(strstr($_SERVER['REQUEST_URI'], 'index.php') !== false || strstr($_SERVER['REQUEST_URI'], 'php') === false) {
    ?>
        <link rel="stylesheet" href="css/login.css">
    <?php
    }
    ?>

    <?php
    if(strstr($_SERVER['REQUEST_URI'], 'main.php') !== false) {
    ?>
        <link rel="stylesheet" href="css/main.css">
    <?php
    }
    ?>

</head>
<body>
