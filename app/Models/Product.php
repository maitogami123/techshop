<?php 

namespace App\Models;

use PDO;

class Product {
  
  protected $productLine;
  protected $productName;
  protected $price;
  protected $discount;
  protected $createdAt;
  protected $modifiedAt;
  protected $deletedAt;
  protected $createdBy;
  protected $infor;
  protected $images;

  /**
   * Get the value of productLine
   */ 
  public function getProductLine()
  {
    return $this->productLine;
  }

  /**
   * Set the value of productLine
   *
   * @return  self
   */ 
  public function setProductLine($productLine)
  {
    $this->productLine = $productLine;

    return $this;
  }

  /**
   * Get the value of productName
   */ 
  public function getProductName()
  {
    return $this->productName;
  }

  /**
   * Set the value of productName
   *
   * @return  self
   */ 
  public function setProductName($productName)
  {
    $this->productName = $productName;

    return $this;
  }

  /**
   * Get the value of price
   */ 
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */ 
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of discount
   */ 
  public function getDiscount()
  {
    return $this->discount;
  }

  /**
   * Set the value of discount
   *
   * @return  self
   */ 
  public function setDiscount($discount)
  {
    $this->discount = $discount;

    return $this;
  }

  /**
   * Get the value of createdAt
   */ 
  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  /**
   * Set the value of createdAt
   *
   * @return  self
   */ 
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;

    return $this;
  }

  /**
   * Get the value of modifiedAt
   */ 
  public function getModifiedAt()
  {
    return $this->modifiedAt;
  }

  /**
   * Set the value of modifiedAt
   *
   * @return  self
   */ 
  public function setModifiedAt($modifiedAt)
  {
    $this->modifiedAt = $modifiedAt;

    return $this;
  }

  /**
   * Get the value of deletedAt
   */ 
  public function getDeletedAt()
  {
    return $this->deletedAt;
  }

  /**
   * Set the value of deletedAt
   *
   * @return  self
   */ 
  public function setDeletedAt($deletedAt)
  {
    $this->deletedAt = $deletedAt;

    return $this;
  }

  /**
   * Get the value of createdBy
   */ 
  public function getCreatedBy()
  {
    return $this->createdBy;
  }

  /**
   * Set the value of createdBy
   *
   * @return  self
   */ 
  public function setCreatedBy($createdBy)
  {
    $this->createdBy = $createdBy;

    return $this;
  }



  /**
   * Get the value of infor
   */ 
  public function getInfor()
  {
    return $this->infor;
  }

  /**
   * Set the value of infor
   *
   * @return  self
   */ 
  public function setInfor($infor)
  {
    $this->infor = $infor;

    return $this;
  }

  /**
   * Get the value of images
   */ 
  public function getImages()
  {
    return $this->images;
  }

  /**
   * Set the value of images
   *
   * @return  self
   */ 
  public function setImages($images)
  {
    $this->images = $images;

    return $this;
  }

  // CRUD functions

  public function create() {

  }

  public function read(string $id) {
    $db = connect();

    $query = ('SELECT * FROM product WHERE Product_Line = :id');
    $statement = $db->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    
    if ($data) {
      $this->productLine = $data['Product_Line'];
      $this->productName = $data['Product_Name'];
      $this->price = $data['Price'];
      $this->discount = $data['Discount'];
      $this->createdAt = $data['Created_at'];
      $this->modifiedAt = $data['Modified_at'];
      $this->deletedAt = $data['Deleted_at'];
      $this->createdBy = $data['Created_by'];
      return $this;
    } else {
        echo "The publisher with id $id was not found.";
    }

    $db = null;
    $query = null;
  }

  public function update() {

  }

  public function delete() {

  }

}