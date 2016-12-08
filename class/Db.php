<?php

/**
 * Description of DB
 *
 * @author dima
 */
class Db {
    private $server = 'localhost';
    private $username = 'root';
    private $password = 'www';
    private $db = 'forma';
    
    private $connection;


    public function connect()
    {
        $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->db);
        
        if(!$this->connection)
        {
            die("DataBase не подкдючена ".mysql_error());
        }
        
        mysqli_query($this->connection, "set names utf8") or die("set names utf8 failed "); 
    }
    
    public function getConnection()
    {
        return $this->connection;
    }
}
