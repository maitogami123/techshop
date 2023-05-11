<?php
namespace App\Controllers;

use App\Models\PermissionGroups;
use App\Models\Permissions;
use App\Models\Role;
use App\Models\Roles;
use App\Models\User;
use App\Models\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class RoleController {
  public function getRolePermissionAction(RouteCollection $routes, Request $request) {
    startSession();
    $permissions = new Permissions();
    $role = json_decode($_GET['role']);
    $permissions->getAll($role);
    require_once APP_ROOT . ('/views/admin/permissions/permission_tables.view.php');
  }
}