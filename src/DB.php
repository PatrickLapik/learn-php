<?php

namespace App;

use App\Models\Post;
use PDO;
use PDOException;


class DB
{
  private $conn;

  public function __construct()
  {
    try {
      $this->conn = new PDO("sqlite:db.sqlite");
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function all($table, $class) {
    $stmt = $this->conn->prepare("SELECT * FROM $table");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
    return $stmt->fetchAll();
  }
}

