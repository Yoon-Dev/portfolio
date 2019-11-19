<?php
$adresse = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER["REQUEST_URI"];

$c_projets = "Projets";
$c_page = "Page";
$c_manager = "Manager";

$conn = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'mo_high999', 'meepmeeP', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échouéconn
function chargerclass($classname){
    require "./C/".$classname.".php";
}
?>