<?php

require_once 'class/Lang.php';
require_once 'class/Db.php';

$db = new Db();
$db->connect();

$lang = new Lang();

if (empty($_POST)) {
    header("Location: /index.php");
    exit;
}

$post = $_POST;

switch ($post['action']) {
    case 'registr' : registr($post, $db, $lang); break;
    default : login($post, $db, $lang);
}


function login($post, $db, $lang) 
{
    $err = [];
    
    if (strlen($post['login']) < 3) {
        $err['login'] = $lang->getTranslate('Allowed at least 3 characters');
    }
    
    if (empty($err['login'])) {
        $query = mysqli_query($db->getConnection(), "SELECT id, password FROM user WHERE login='{$post['login']}';");
        $row = $query->fetch_assoc();

        if(!$row['id']) {
            $err['login'] = $lang->getTranslate('User_not_found');
        }
    }
    
    if (empty($err['login'])) {
        if ($row['password'] != md5($row['password'])) {
            $err['password'] = $lang->getTranslate('Incorrect_password');
        }
    }
    
    
    echo json_encode($err);
    //print_r($post); 
}

function registr($post) 
{
    print_r($post); 
}