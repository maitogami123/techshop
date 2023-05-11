<?php

namespace App\Models;

use PDO;

class Permission {
  
  protected $permissionId;
  protected $permissionName;
  protected $permissionDescription;
  protected $permissionGroupId;
  protected $permissionGroupName;

  /**
   * Get the value of permissionId
   */ 
  public function getPermissionId()
  {
    return $this->permissionId;
  }

  /**
   * Set the value of permissionId
   *
   * @return  self
   */ 
  public function setPermissionId($permissionId)
  {
    $this->permissionId = $permissionId;

    return $this;
  }

  /**
   * Get the value of permissionName
   */ 
  public function getPermissionName()
  {
    return $this->permissionName;
  }

  /**
   * Set the value of permissionName
   *
   * @return  self
   */ 
  public function setPermissionName($permissionName)
  {
    $this->permissionName = $permissionName;

    return $this;
  }

  /**
   * Get the value of permissionDescription
   */ 
  public function getPermissionDescription()
  {
    return $this->permissionDescription;
  }

  /**
   * Set the value of permissionDescription
   *
   * @return  self
   */ 
  public function setPermissionDescription($permissionDescription)
  {
    $this->permissionDescription = $permissionDescription;

    return $this;
  }

  /**
   * Get the value of permissionGroupId
   */ 
  public function getPermissionGroupId()
  {
    return $this->permissionGroupId;
  }

  /**
   * Set the value of permissionGroupId
   *
   * @return  self
   */ 
  public function setPermissionGroupId($permissionGroupId)
  {
    $this->permissionGroupId = $permissionGroupId;

    return $this;
  }

  /**
   * Get the value of permissionGroupName
   */ 
  public function getPermissionGroupName()
  {
    return $this->permissionGroupName;
  }

  /**
   * Set the value of permissionGroupName
   *
   * @return  self
   */ 
  public function setPermissionGroupName($permissionGroupName)
  {
    $this->permissionGroupName = $permissionGroupName;

    return $this;
  }
}