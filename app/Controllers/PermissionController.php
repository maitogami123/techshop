<?php
namespace App\Controllers;

use App\Models\Permission;
use App\Models\Permissions;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class PermissionController {

  public function getPermissionFormAction(RouteCollection $routes, Request $request) {
    $roleId = json_decode($_GET['roleId']);
    require_once APP_ROOT . '/views/admin/permissionGroups/edit.view.php';
  }
  public function postPermissionFormAction(RouteCollection $routes, Request $request) {
    startSession();
    $permission = new Permission();
    $permission->createPermission($_POST);
  }
  public function getPermissionDetailAction(RouteCollection $routes, Request $request) {
    $roleId = json_decode($_GET['roleId']);
    $roleName = json_decode($_GET['roleName']);

    $permissions = new Permissions();
    $permissions->getPermissionsWithGroupId($roleId);
    require_once APP_ROOT . '/views/admin/permissionGroups/detail.view.php';
  }

  public function updatePermissionStateAction(RouteCollection $routes, Request $request) {
    $roleId = json_decode($_POST['roleId']);
    $state = json_decode($_POST['state']);
    $permission = new Permission();
    $permission->updatePermissionState($roleId, $state);
  }

  public function removeUserGroupPermissionAction(RouteCollection $routes, Request $request) {
    $roleId = json_decode($_POST['roleId']);
    $permissionId = json_decode($_POST['permissionId']);
    $permission = new Permission();
    $permission->removePermissionToUserGroup($permissionId, $roleId);    
  }

  public function addUserGroupPermissionAction(RouteCollection $routes, Request $request) {
    $roleId = json_decode($_POST['roleId']);
    $permissionId = json_decode($_POST['permissionId']);
    $permission = new Permission();
    $permission->addPermissionToUserGroup($permissionId, $roleId);
    // print_r($_POST);
  }
}