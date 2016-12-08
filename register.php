<?php

session_start();

require_once 'class/Lang.php';


if (!empty($_GET['lang'])) {
    $lang = new Lang();
    $lang->setLang($_GET['lang']);
    header("Location: /register.php");
    exit;
}

require_once 'views/layout/beginPage.php';
    require_once "views/form/registerForm.php";
include_once 'views/layout/endPage.php';

