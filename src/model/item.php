<?php
namespace App\model;

use App\Database\contaxt;

class item extends Contaxt{

    public function getAllitem(){
        $sql ="
        SELECT * FROM item
        ";

        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll(); //ดึงข้อมูลออกมาเเสดง
        return $data;
    }
}
?>