<?php

require_once 'class/Db.php';

/**
 * Description of User
 *
 * @author dima
 */
class User {
    
    /**
     * 
     */
    public static function checkLogin() {
        if ($_SESSION['authorized']<>1) {
            header("Location: /login.php");
            exit;
        }
    }
    
    public static function login($name, $link)
    {
        $query = mysqli_query($link, "SELECT COUNT(id) as c FROM user WHERE login='{$name}';");
        $row = $query->fetch_assoc();
        
        if(!$row['c']) {
            return;
        }

        $_SESSION['authorized'] = 1;
        $_SESSION['login'] = $name;
        setcookie("user", $name, time()+3600);
    }
    
    public static function logout()
    {
        session_unset();
        setcookie("user", '');
    }
}
