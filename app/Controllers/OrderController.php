<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;
class OrderController {
  public function viewOrdersAction(RouteCollection $routes, Request $request) {
    startSession();
    $name = 'orders/index';
    require_once APP_ROOT . '/views/user/layout.view.php';
  }

  public function viewPersonalInformationAction(RouteCollection $routes, Request $request) {
    startSession();
    $name = 'information/index';
      $user = new User();
      $this -> UpdateUserInfo($user);
      require_once APP_ROOT . '/views/user/layout.view.php';
  }
  public function UpdateUserInfo($user){
    if (!isLoggedIn()) {
      $_SESSION['isLoggedIn'] = false;
    }
    if (isLoggedIn()) {
      $user = unserialize($_SESSION['user']);
    }
    if (isset($_GET['account'])) {
      # code...
      $Fullname = $_GET['account'];
      $user -> UpdateUserInfo($Fullname,$user -> getUsername());
    }
  }
}