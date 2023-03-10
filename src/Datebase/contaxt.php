<?php
namespace App\Database;

use PDO;

class contaxt {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $dbName = "Stock_management";

	protected $pdo; //รอรับ ofject จาก pdo

	function __construct() { //ทำงานทันทีเมื่อมีการสร้างออฟเจ็คจากคลาสนี้
		$this->pdo = $this->connect();
	}

    protected function connect() {
		$dsn = "mysql:host={$this->host};dbname={$this->dbName}";
		$pdo = new PDO($dsn, $this->user, $this->password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
}	
?>