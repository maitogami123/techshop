<?php
namespace App\Controllers;

use App\Models\PermissionGroup;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class PermissionGroupController {
  public function updatePermissionGroupStateAction(RouteCollection $routes, Request $request) {
    $permissionGroupId = json_decode($_POST['permissionGroupId']);
    $state = json_decode($_POST['state']);
    $permissionGroup = new PermissionGroup();
    $permissionGroup->updatePermissionGroupState($permissionGroupId, $state);
  }

  public function createPermissionGroupAction(RouteCollection $routes, Request $request) {
    $permissionGroup = new PermissionGroup();
    $name = ($_POST['permission_group_name']);
    $desc = ($_POST['permission_group_desc']);
    $permissionGroup->create($name, $desc);

  }
}