<?php

class DbConn
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "Root_1!@";
        $this->dbname = "musicland";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;
    }
}
