<?php

namespace App\Models;

use ErrorException;
use Exception;
use PDO;

class User
{
  protected $username;
  protected $password;
  protected $createdAt;
  protected $modifiedAt;
  protected $deletedAt;
  protected $userGroup;
  protected $permissions = [];

  /**
   * Get the value of username
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * Set the value of username
   *
   * @return  self
   */
  public function setUsername($username)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */
  public function setPassword($password)
  {
    $this->password = $password;

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
   * Get the value of userGroup
   */
  public function getUserGroup()
  {
    return $this->userGroup;
  }

  /**
   * Set the value of userGroup
   *
   * @return  self
   */
  public function setUserGroup($userGroup)
  {
    $this->userGroup = $userGroup;

    return $this;
  }

  /**
   * Get the value of permissions
   */
  public function getPermissions()
  {
    return $this->permissions;
  }

  /**
   * Set the value of permissions
   *
   * @return  self
   */
  public function setPermissions($permissions)
  {

    $this->permissions = $permissions;

    return $this;
  }


  // Crud function

  public function create()
  {

  }
  public function read(string $username, string $password)
  {
    $db = connect();

    $sql = "SELECT `account`.*, `accountgroup`.`accountypeid`, `accountpermission`.`PermissionID`
    FROM `account` 
      LEFT JOIN `accountgroup` ON `accountgroup`.`username` = `account`.`Username`, `accountpermission`
    WHERE `account`.`Username` = :username AND `account`.`Password` = :pwd";

    $statement = $db->prepare($sql);
    $statement->execute(
      array(
        ':username' => $username,
        ':pwd' => $password,
      )
    );
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    if (!isset($data['Username'])) {
      throw new ErrorException('Login Failed');
    }
    $this->username = $data['Username'];
    $this->password = $data['Password'];
    $this->createdAt = $data['Created_at'];
    $this->modifiedAt = $data['Modified_at'];
    $this->deletedAt = $data['Deleted_at'];
    $this->userGroup = $data['accountypeid'];

    $sql = 'SELECT * FROM accountpermission WHERE TypeID = :userType';
    $statement = $db->prepare($sql);
    $statement->execute(
      array(
        ':userType' => $this->userGroup,
      )
    );
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $item) {
      $this->permissions[] = $item['PermissionID'];
    }

    $sql = null;
    $db = null;

    return $this;
  }
  public function update()
  {

  }
  public function delete()
  {

  }
}