<?php

//if(session_id() == '' || !isset($_SESSION)) {
//    session_start();
//} 

session_start();
require_once 'class/User.php';
require_once 'class/Lang.php';
require_once 'class/Db.php';

$db = new Db();
$db->connect();

//$mysqli = new mysqli('localhost', 'root', 'www', 'forma');
//$result = $mysqli->query("SELECT COUNT(id) AS c FROM user;");
//$row = $result->fetch_assoc();
//echo $row['c'];

//echo $result;
//print_r($query);


//die(' stop');
if (!empty($_GET['lang'])) {
    $lang = new Lang();
    $lang->setLang($_GET['lang']);
}

if (!empty($_POST['login'])) {
    User::login($_POST['login'], $db->getConnection());
}

User::checkLogin();

//$form = (isset($_GET['action']) && $_GET['action'] == 'register')? 'register' : 'login';

require_once "views/profile.php";
