<?php

namespace App\Models;

use PDO;

class PermissionGroup {
  protected $ID;
  protected $Name;
  protected $description;
  protected $deletedAt;
  

  /**
   * Get the value of ID
   */ 
  public function getID()
  {
    return $this->ID;
  }

  /**
   * Set the value of ID
   *
   * @return  self
   */ 
  public function setID($ID)
  {
    $this->ID = $ID;

    return $this;
  }

  /**
   * Get the value of Name
   */ 
  public function getName()
  {
    return $this->Name;
  }

  /**
   * Set the value of Name
   *
   * @return  self
   */ 
  public function setName($Name)
  {
    $this->Name = $Name;

    return $this;
  }

  /**
   * Get the value of description
   */ 
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description)
  {
    $this->description = $description;

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

  
}