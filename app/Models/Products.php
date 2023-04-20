<?php

namespace App\Models;

use PDO;

class Products
{
  public $productList = [];

  public function readByBrand(string $brand)
  {
    $db = connect();

    $query = ('SELECT * FROM product WHERE BrandID = :brand');
    $statement = $db->prepare($query);
    $statement->bindParam(':brand', $brand, PDO::PARAM_STR);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($data as $item) {
      if ($item['Deleted_at'] != null) {
        continue;
      }
      $product = new Product();
      $product->setProductLine($item['Product_Line']);
      $product->setProductName($item['Product_Name']);
      $product->setThumbNail($item['Thumbnail']);
      $product->setPrice($item['Price']);
      $product->setDiscount($item['Discount']);
      $product->setCreatedAt($item['Created_at']);
      $product->setModifiedAt($item['Modified_at']);
      $product->setDeletedAt($item['Deleted_at']);
      $product->setCreatedBy($item['Created_by']);
      $this->productList[] = $product;
    }
    $db = null;
    $query = null;
    return $this->productList;
  }

  public function getAll() {
    $db = connect();

    $query = ('SELECT * FROM product');
    $statement = $db->prepare($query);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($data as $item) {
      if ($item['Deleted_at'] != null) {
        continue;
      }
      $product = new Product();
      $product->setProductLine($item['Product_Line']);
      $product->setProductName($item['Product_Name']);
      $product->setThumbNail($item['Thumbnail']);
      $product->setBrandID($item['BrandID']);
      $product->setCategory($item['Category']);
      $product->setPrice($item['Price']);
      $product->setDiscount($item['Discount']);
      $product->setCreatedAt($item['Created_at']);
      $product->setModifiedAt($item['Modified_at']);
      $product->setDeletedAt($item['Deleted_at']);
      $product->setCreatedBy($item['Created_by']);
      $this->productList[] = $product;
    }
    $db = null;
    $query = null;
    return $this->productList;
  }

}