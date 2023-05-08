<?php
namespace App\Controllers;

use App\Models\Order;
use App\Models\Orders;
use App\Models\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class OrderController {
  public function viewOrdersAction(RouteCollection $routes, Request $request) {
    startSession();

    $statusCode = json_decode($_GET['statusCode'] ?? "0");
    $offset = json_decode($_GET['offset'] ?? "0");

    $user = new User();
    $user = unserialize($_SESSION['user']);

    $orders = new Orders();
    $orders->getAllOrdersById($user->getUsername(), (int)$statusCode);
    $subOrders = new Orders();
    $subOrders->getOrdersById($user->getUsername(), (int)$statusCode, (int)$offset);
    if (isset($_GET['statusCode'])) {
      $name = 'orders/order_list';
      require_once APP_ROOT . "/views/user/$name.view.php";
    } else {
      $name = 'orders/index';
      require_once APP_ROOT . '/views/user/layout.view.php';
    }
  }

  public function viewOrderDetailAction(string $orderId, RouteCollection $routes, Request $request) {
    startSession();
    $order = new Order();
    $data = $order->read($orderId);
    $name = 'orders/detail';
    require_once APP_ROOT . '/views/user/layout.view.php';
   
  }

  public function viewPersonalInformationAction(RouteCollection $routes, Request $request) {
    startSession();
    $name = 'information/index';
    require_once APP_ROOT . '/views/user/layout.view.php';
  }
  public function createOrderAction(RouteCollection $routes, Request $request) {
    startSession();
    $order = new Order();
    $order->createOrder($_POST);
  }

  public function cancelOrderAction(string $id, RouteCollection $routes, Request $request) {
    startSession();
    $order = new Order();
    $order->cancelOrder($id);
    print_r($order);
  }

  public function getUserOrder(string $username, RouteCollection $routes, Request $request) {
    startSession();
  }
}