<?php

namespace App\Models;

use PDO;

class Category {
  protected $CategoryID;
  protected $CategoryName;

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

  public function create(array $data)
  {
  }

  public function read(string $id)
  {

  }

  public function update(int $id, array $data)
  {

  }

  public function delete(int $id)
  {

  }
}