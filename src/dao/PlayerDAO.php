<?php

require_once( __DIR__ . '/DAO.php');

class PlayerDAO extends DAO {

  public function search($max=10, $name = ''){
    $sql = "SELECT * FROM `players` WHERE `Name` LIKE :name ORDER BY `Overall` DESC LIMIT :max";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':name','%'.$name.'%');
    $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllCountries() {
    $sql = "SELECT DISTINCT `Nationality` FROM `players` ORDER BY `Nationality` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `players` WHERE `Id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


}
