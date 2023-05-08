<?php

namespace App\Models;

use PDO;
use App\Models\Order;

class Orders {
  public $orders = [];

  public function getOrdersById(string $id, string $statusCode = "0", string $offset = "0") {
    $db = connect();
    $sql = "SELECT `userorder`.*, `orderstatus`.`StatusName`
            FROM `userorder` 
            LEFT JOIN `orderstatus` ON `userorder`.`Status` = `orderstatus`.`StatusID`
            WHERE `userorder`.`Username` = :username".
              ($statusCode != 0 ? " AND `orderstatus`.`StatusID` = :statusId " : " AND `orderstatus`.`StatusID` IS NOT NULL ")
            ."ORDER BY `userorder`.`OrderID` DESC
            LIMIT 5 OFFSET :offset";
    $statement = $db->prepare($sql);
    $statement->bindParam(":username", $id);
    if ($statusCode != 0)
      $statement->bindParam(":statusId", $statusCode);
    $statement->bindParam(":offset", $offset);
    $statement->execute();

    $responseData = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($responseData as $data) {
      $order = new Order();
      $order->setId($data['OrderID']);
      $order->setUsername($data['Username']);
      $order->setCreatedAt(date('Y-m-d', strtotime($data['Created_at'])));
      $order->setTotal($data['Total']);
      $order->setStatusName($data['StatusName']);
      $order->setStatusId($data['Status']);
      $this->orders[] = $order;
    }

    return $this->orders;
  }

  public function getAllOrdersById(string $id, string $statusCode = "0") {
    $db = connect();
    $sql = "SELECT `userorder`.*, `orderstatus`.`StatusName`
            FROM `userorder` 
            LEFT JOIN `orderstatus` ON `userorder`.`Status` = `orderstatus`.`StatusID`
            WHERE `userorder`.`Username` = :username".
              ($statusCode != 0 ? " AND `orderstatus`.`StatusID` = :statusId " : " AND `orderstatus`.`StatusID` IS NOT NULL ")
            ."ORDER BY `userorder`.`OrderID` DESC";
    $statement = $db->prepare($sql);
    $statement->bindParam(":username", $id);
    if ($statusCode != 0)
      $statement->bindParam(":statusId", $statusCode);
    $statement->execute();

    $responseData = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($responseData as $data) {
      $order = new Order();
      $order->setId($data['OrderID']);
      $order->setUsername($data['Username']);
      $order->setCreatedAt(date('Y-m-d', strtotime($data['Created_at'])));
      $order->setTotal($data['Total']);
      $order->setStatusName($data['StatusName']);
      $order->setStatusId($data['Status']);
      $this->orders[] = $order;
    }

    return $this->orders;
  }

}