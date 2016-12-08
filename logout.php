<?php

session_start();

require_once 'class/User.php';

if ($_SESSION['authorized'] == 1) {
    User::logout();
}

header("Location: /index.php");
exit;
