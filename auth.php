<?php
session_start();
require_once "Database.php";

class Auth extends Database {

    public function register($user, $pass){
        $this->conn->query("INSERT INTO akun (username,password) VALUES ('$user','$pass')");
    }

    public function login($user, $pass){
        $data = $this->conn->query("SELECT * FROM akun WHERE username='$user' AND password='$pass'");

        if($data->num_rows > 0){
            $_SESSION['login'] = true;
            header("Location: dashboard.php");
        } else {
            echo "Login gagal";
        }
    }

    public static function cek(){
        if(!isset($_SESSION['login'])){
            header("Location: index.php");
        }
    }

    public static function logout(){
        session_destroy();
        header("Location: index.php");
    }
}
?>