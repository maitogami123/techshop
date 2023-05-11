<?php

namespace App\Models;

use ErrorException;
use PDO;
use PDOException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\Exception\FormSizeFileException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

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
    $db = connect();
    $this->id = $data['brandId'];
    $this->name = $data['brandName'];
    $sql = "INSERT INTO `brand` (`BrandID`, `Username`, `Created_at`, `Status`, `Total`, `Confirmed_by`) 
            VALUES (NULL, :username, current_timestamp(), '1', :total, NULL)";

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