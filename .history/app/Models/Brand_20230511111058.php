<?php

namespace App\Models;

use PDO;

class Brand
{
  protected $id;
  protected $name;

  // GET METHODS
  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  // SET METHODS
  public function setId()
  {
    return $this->id;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  // CRUD OPERATIONS
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