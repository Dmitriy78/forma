<?php

//require_once 'class/Session.php';
//Session::checkSession();

    require_once 'views/layout/beginPage.php';
    echo('Profile: ' . $_SESSION['login'] . ' ');
?>
<a href="/logout.php">Выход</a>
<?php
    include_once 'views/layout/endPage.php';

