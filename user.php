<?php
require_once "Database.php";

class User extends Database {

    public function getAll(){
        return $this->conn->query("SELECT * FROM users");
    }

    public function create($nama, $file){
        $namaFile = $file['name'];
        $tmp = $file['tmp_name'];

        move_uploaded_file($tmp, "upload/".$namaFile);

        $this->conn->query("INSERT INTO users (nama,file) VALUES ('$nama','$namaFile')");
    }

    public function delete($id){
        $this->conn->query("DELETE FROM users WHERE id=".(int)$id);
    }

    public function getById($id){
        return $this->conn->query("SELECT * FROM users WHERE id=".(int)$id)->fetch_assoc();
    }

    public function update($id,$nama){
        $this->conn->query("UPDATE users SET nama='$nama' WHERE id=".(int)$id);
    }
}
?>