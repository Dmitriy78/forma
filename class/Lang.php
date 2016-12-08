<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lang
 *
 * @author dima
 */
class Lang {
    
    protected $arr;
    protected $defaultLang = 'en';


    public function __construct() {
        
        $lang = (!empty($_COOKIE['lang']))? $_COOKIE['lang'] : $this->defaultLang;
        
        $this->setLang($lang);
    }

    public function setLang($lang)
    {
        $_SESSION['lang'] = $lang;
        setcookie("lang", $lang, time()+3600);
        require_once "message/{$lang}/index.php";
        $this->arr = $arr;
    }
    
    public function getTranslate($key)
    {
        return array_key_exists($key, $this->arr)? $this->arr[$key] : $key;
    }
}
