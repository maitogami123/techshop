<?php

namespace App\Models;

use ErrorException;
use PDO;
use PDOException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\Exception\FormSizeFileException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class Product
{

  protected $productLine;
  protected $productName;
  protected $thumbnail;
  protected $price;
  protected $discount;
  protected $createdAt;
  protected $modifiedAt;
  protected $deletedAt;
  protected $createdBy;
  protected $brandID;
  protected $category;
  protected $infor = [];
  protected $images = [];
  protected $serialNumbers = [];
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
   * Get the value of thumbnail
   */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }

  /**
   * Set the value of thumbnail
   *
   * @return  self
   */
  public function setThumbnail($thumbnail)
  {
    $this->thumbnail = $thumbnail;

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

  /**
   * Get the value of brandID
   */
  public function getBrandID()
  {
    return $this->brandID;
  }

  /**
   * Set the value of brandID
   *
   * @return  self
   */
  public function setBrandID($brandID)
  {
    $this->brandID = $brandID;

    return $this;
  }

  /**
   * Get the value of category
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Set the value of category
   *
   * @return  self
   */
  public function setCategory($category)
  {
    $this->category = $category;

    return $this;
  }

  /**
   * Get the value of serialNumbers
   */
  public function getSerialNumbers()
  {
    return $this->serialNumbers;
  }

  /**
   * Set the value of serialNumbers
   *
   * @return  self
   */
  public function setSerialNumbers($serialNumbers)
  {
    $this->serialNumbers = $serialNumbers;

    return $this;
  }

  // CRUD functions

  public function create(array $data, array $files)
  {
    $this->productLine = $data['product_line'];
    $this->productName = $data['product_name'];
    $this->price = $data['price'];
    $this->discount = $data['discount'] ?? 0;
    $this->createdBy = $data['userID'];
    $this->brandID = $data['brand'];
    $this->category = $data['category'];
    $this->infor = $data['information'];

    if ($files['thumbnail']['error'] == UPLOAD_ERR_OK) {
      // move uploaded thumbnail to public folder
      $tmp_name = $_FILES["thumbnail"]["tmp_name"];
      $name = basename($_FILES["thumbnail"]["name"]);
      $ext = pathinfo($name, PATHINFO_EXTENSION);
      // if ($ext != 'png' || $ext != 'jpg' || $ext != 'jpeg')
      //   throw new FormSizeFileException("File isn't in the correct format!");
      move_uploaded_file($tmp_name, APP_ROOT . "/public/images/thumbnail/$this->productLine.$ext");
      try {
        $db = connect();
        // Add product to db
        $sql = "INSERT INTO `product` (`Product_Line`, `Product_Name`, `Thumbnail`, `Price`, 
          `Discount`, `Created_at`, `Modified_at`, `Deleted_at`, `Created_by`, `BrandID`, `Category`) 
          VALUES ('$this->productLine', '$this->productName', '$this->productLine.$ext', $this->price,
          '$this->discount', current_timestamp(), NULL, NULL, '$this->createdBy', '$this->brandID', '$this->category')";
        $statement = $db->prepare($sql);
        $statement->execute();
      } catch (PDOException $err) {
        echo $err->getMessage();
      }

      // Sau này tách ra, mà chắc cũng không cần lắm :))
      // Inser infomation for product
      $sql = "INSERT INTO `productinfo` (`Info_ID`, `Product_Line`, `Product_Information`) VALUES (NULL, :productLine, :productInfo)";

      $statement = $db->prepare($sql);
      foreach ($data['information'] as $info) {
        $statement->execute([
          ':productLine' => $data['product_line'],
          ':productInfo' => $info
        ]);
      }
    } else {
      throw new FileException('File corrupted!');
    }
  }


  public function read(string $id)
  {
    $db = connect();

    $query = ('SELECT * FROM product WHERE Product_Line = :id');
    $statement = $db->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_ASSOC);

    if ($data) {
      $this->productLine = $data['Product_Line'];
      $this->productName = $data['Product_Name'];
      $this->thumbnail = $data['Thumbnail'];
      $this->price = $data['Price'];
      $this->discount = $data['Discount'];
      $this->createdAt = $data['Created_at'];
      $this->modifiedAt = $data['Modified_at'];
      $this->deletedAt = $data['Deleted_at'];
      $this->createdBy = $data['Created_by'];
      $this->brandID = $data['BrandID'];
    } else {
      throw new ResourceNotFoundException("Sản phẩm không tồn tại!");
    }

    $query = 'SELECT `productinfo`.*
    FROM `productinfo` WHERE `productinfo`.`Product_Line` = :productLine';
    $statement = $db->prepare($query);
    $statement->bindParam(':productLine', $this->productLine, PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $item) {
      $this->infor[] = $item['Product_Information'];
    }

    $query = 'SELECT `productimage`.*
    FROM `productimage` WHERE `productimage`.`ProductLine` = :productLine';
    $statement = $db->prepare($query);
    $statement->bindParam(':productLine', $this->productLine, PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $item) {
      $this->images[] = $item['imgPath'];
    }

    $query = null;
    $db = null;
    return $this;
  }

  public function update()
  {

  }

  public function delete(string $id)
  {
    $db = connect();

    $query = "UPDATE `product` SET `Deleted_at` = current_timestamp() WHERE `product`.`Product_Line` = :id";
    $statement = $db->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_STR);
    $statement->execute();
    
  }
}