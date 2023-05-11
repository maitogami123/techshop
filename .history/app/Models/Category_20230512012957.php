<?php

namespace App\Models;

use PDO;

class Category {
  protected $CategoryID;
  protected $CategoryName;
  protected $Delete_At;

  /**
   * Get the value of CategoryID
   */ 
  public function getCategoryID()
  {
    return $this->CategoryID;
  }

  /**
   * Set the value of CategoryID
   *
   * @return  self
   */ 
  public function setCategoryID($CategoryID)
  {
    $this->CategoryID = $CategoryID;

    return $this;
  }

  /**
   * Get the value of CategoryName
   */ 
  public function getCategoryName()
  {
    return $this->CategoryName;
  }

  /**
   * Set the value of CategoryName
   *
   * @return  self
   */ 
  public function setCategoryName($CategoryName)
  {
    $this->CategoryName = $CategoryName;

    return $this;
  }
  public function getCategoryDeleteAt()
  {
    return $this->Delete_At;
  }

  /**
   * Set the value of CategoryName
   *
   * @return  self
   */ 
  public function setCategoryDeleteAt($Delete_At)
  {
    $this->Delete_At = $Delete_At;

    return $this;
  }
  public function create(array $data)
  {
    $db = connect();
    $this->CategoryName = $data['categoryName'];
    $sql = "INSERT INTO `category` (`CategoryID`, `CategoryName`, `Deleted_At`) VALUES (NULL, :CategoryName, NULL);";
    $statement = $db->prepare($sql);
    $statement->execute([
      ':CategoryName' => $this->CategoryName
    ]);
    
  }

  public function read(string $id)
  {
    $db = connect();
    $countSql = "SELECT * FROM `category` WHERE `category`.`CategoryID` = :categoryId AND `category`.`Deleted_At` IS NULL
    ;";
    $statement = $db->prepare($countSql);
    $statement->bindParam(':categoryId', $id, PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    
    $this->CategoryID = $data['CategoryID'];
    $this->CategoryName = $data['CategoryName'];
    $this->Delete_At = $data['Deleted_At'];
    echo $this;
    return $this;
  }

  public function update( array $data)
  {
    $db = connect();
    $this->id = $data['brandId'];
    $this->CategoryName = $data['brandName'];
    print_r($data);
    $updateSql = 'UPDATE `brand` SET `BrandID` = :brandId, `BrandName` = :brandName  WHERE `brand`.`BrandID` = :ID';
    $updateStm = $db->prepare($updateSql);
    $updateStm->execute([
      ':brandId' => $this->id,
      ':brandName' => $this->CategoryName,
      ':ID' => $data['ID'],
    ]);
  }

  public function delete(int $id)
  {
    $db = connect();
    $query = "UPDATE `category` SET `Deleted_At` = CURRENT_TIMESTAMP() WHERE `category`.`CategoryID` = :id";
    $statement = $db->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
  }
}