<?php

namespace App\Models;

use PDO;

class Role {
  protected $roleId;
  protected $roleName;
  protected $roleDescription;
  protected $createdAt;
  protected $deletedAt;
  protected $deteleAble;

  

  /**
   * Get the value of roleId
   */ 
  public function getRoleId()
  {
    return $this->roleId;
  }

  /**
   * Set the value of roleId
   *
   * @return  self
   */ 
  public function setRoleId($roleId)
  {
    $this->roleId = $roleId;

    return $this;
  }

  /**
   * Get the value of roleName
   */ 
  public function getRoleName()
  {
    return $this->roleName;
  }

  /**
   * Set the value of roleName
   *
   * @return  self
   */ 
  public function setRoleName($roleName)
  {
    $this->roleName = $roleName;

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
   * Get the value of deteleAble
   */ 
  public function getDeteleAble()
  {
    return $this->deteleAble;
  }

  /**
   * Set the value of deteleAble
   *
   * @return  self
   */ 
  public function setDeteleAble($deteleAble)
  {
    $this->deteleAble = $deteleAble;

    return $this;
  }

  

  /**
   * Get the value of roleDescription
   */ 
  public function getRoleDescription()
  {
    return $this->roleDescription;
  }

  /**
   * Set the value of roleDescription
   *
   * @return  self
   */ 
  public function setRoleDescription($roleDescription)
  {
    $this->roleDescription = $roleDescription;

    return $this;
  }
}