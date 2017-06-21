<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/15/2017
 * Time: 5:02 PM
 */
class DBConnection
{
    private $host;
    private $user;
    private $pass;
    private $database;
    private $conn;

    public function DBConnection()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->database = 'pizza_hut';
    }

    public function getConnection()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database) or
        die($this->conn->error);

        return $this->conn;
    }
}
?>
