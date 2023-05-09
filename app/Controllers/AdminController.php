<?php
namespace App\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use App\Models\Users;
use App\Models\Warranties;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class AdminController {
  public function indexHomeAction(RouteCollection $routes, Request $request) {
    startSession();
    $name = 'home';
    require_once APP_ROOT . '/views/admin/layout.view.php';
  }

  public function indexProductAction(RouteCollection $routes, Request $request) {
    startSession();
    $user = new User();
    $user = unserialize($_SESSION['user']);
    // if (!in_array('P_View', $user->getPermissions())) {
    //   redirect(getPath($routes, 'homepage'));
    //   die();
    // }
    $warrantyList = new Warranties();
    $warrantyList->getAll();
    $productList = new Products();
    $productList->getAll(includeDeleted: true, includeOutOfStock: true);
    $brands = new Brands();
    $brands->readAll();
    $categories = new Categories();
    $categories->readAll();
    $name = 'product/new_index';
    require_once APP_ROOT . '/views/admin/layout.view.php';
  }

  public function indexOrderAction(RouteCollection $routes, Request $request) {
    startSession();
    $statusCode = json_decode($_GET['statusCode'] ?? "0");
    $orders = new Orders();
    $orders->getAllOrders($statusCode);
    if (isset($_GET['statusCode'])) {
      $name = 'orders/order_list';
      require_once APP_ROOT . "/views/admin/$name.view.php";
    } else {
      $name = 'orders/index';
      require_once APP_ROOT . '/views/admin/layout.view.php';
    }
  }

  public function indexUserAction(RouteCollection $routes, Request $request) {
    startSession();
    $name = 'users/index';
    $users = new Users();
    $users->getAllUsers();
    require_once APP_ROOT . '/views/admin/layout.view.php';
  }

  public function indexBrandAction(RouteCollection $routes, Request $request) {
    startSession();
    $name = 'brand/index';
    require_once APP_ROOT . '/views/admin/layout.view.php';
  }
  public function indexRoleAction(RouteCollection $routes, Request $request) {
    startSession();
    $name = 'roles/index';
    require_once APP_ROOT . '/views/admin/layout.view.php';
  }

}