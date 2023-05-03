<?php
namespace App\Controllers;

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
    require_once APP_ROOT . '/views/user/layout.view.php';
  }
}