<?php
require_once "config.php";

class Database {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli(HOST, USER, PASS, DB);
        if($this->conn->connect_error){
            die("Koneksi gagal");
        }
    }
}
?>