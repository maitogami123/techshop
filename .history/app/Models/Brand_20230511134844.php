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
  protected $delete_at;
  // GET METHODS
  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }
  public function getDeleteAt(){
    return $this->delete_at;
  }
  // SET METHODS
  public function setId($id)
  {
    $this->id =$id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }
  public function setDeleteAt($delete_at)
  {
    $this->delete_at = $delete_at;
  }
  // CRUD OPERATIONS
  public function create(array $data)
  {
    $db = connect();
    $this->id = $data['brandId'];
    $this->name = $data['brandName'];
    $sql = "INSERT INTO `brand` (`BrandID`, `BrandName`,`Delete_At`) 
            VALUES (:brandId, :brandName,NULL )";
    $statement = $db->prepare($sql);
    $statement->execute([
      ':brandId' => $this->id,
      ':brandName' => $this->name
    ]);

  }

  public function read(string $id)
  {
    $db = connect();

    $countSql = "SELECT COUNT(`product_warranty`.`product_line`)
                  FROM `product_warranty`
                  WHERE `product_warranty`.`product_line` = :productLine
                    AND `product_warranty`.`purchased_at` IS NULL
                  GROUP BY `product_warranty`.`product_line`
    ;";
    $countStm = $db->prepare($countSql);
    $countStm->execute([
      ":productLine" => $id
    ]);
  }

  public function update(int $id, array $data)
  {

  }

  public function delete(int $id)
  {

  }
}