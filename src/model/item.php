<?php
namespace App\model;

use App\Database\contaxt;

class item extends Contaxt{

    public function getAllitem(){
        $sql ="
        select * FROM items
        ";

        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>