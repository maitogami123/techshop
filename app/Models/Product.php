<?php

namespace App\Models;
use PDO;

class Product
{
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $sku;
    protected $image;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getImage()
    {
        return $this->image;
    }

    // SET METHODS
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {
        $db = connect();

        $productLine = 'KB.FL.ES.De';
        $productName = 'Bàn Phím Cơ Fuhlen Eraser LED Switch Quang Học (Đen)';
        $price = 780000;
        $createdBy = 'testadmin1';
        $brand = 'MSI';
        $category = '3';

        $sql = ("INSERT INTO `product` (`Product_Line`, `Product_Name`, `Price`, `Discount`, `Created_at`, 
        `Modified_at`, `Deleted_at`, `Created_by`, `BrandID`, `Category`) 
        VALUES (:productLine, :productName, :price, :discount, 
        :createdAt, :modifiedAt, :deletedAt, :createdBy, :brand, :category)");

        $statement = $db->prepare($sql);

        $statement->execute([
            ':productLine' => $productLine,
            ':productName' => $productName,
            ':price' => $price,
            ':discount' => 0,
            ':createdAt' => date("Y-m-d H:i:s", time()),
            ':modifiedAt' => NULL,
            ':deletedAt' => NULL,
            ':createdBy' => $createdBy,
            ':brand' => $brand,
            ':category' => $category
        ]);

        $db = null;
        $sql = null;
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
            $this->id = $data['Product_Line'];
            $this->title = $data['Product_Name'];
            $this->price = $data['Price'];
            $this->sku = $data['Created_by'];
            $this->image = $data['BrandID'];
            $this->description = $data['Created_at'];
            return $this;
        } else {
            echo "The publisher with id $id was not found.";
        }

        $db = null;
        $query = null;
    }

    public function update(int $id, array $data)
    {
        
    }

    public function delete(int $id)
    {

    }
}