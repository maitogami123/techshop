<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '([^&]*)')));
$routes->add('createProduct', new Route(constant('URL_SUBFOLDER') . '/create/product', array('controller' => 'ProductController', 'method'=>'showCreateForm'), array()));
$routes->add('viewProduct', new Route(constant('URL_SUBFOLDER') . '/view/product', array('controller' => 'ProductController', 'method'=>'indexAction'), array()));
$routes->add('editProduct', new Route(constant('URL_SUBFOLDER') . '/edit/product/{id}', array('controller' => 'ProductController', 'method'=>'editAction'), array('id' => '([^&]*)')));
$routes->add('deleteProduct', new Route(constant('URL_SUBFOLDER') . '/delete/product/{id}', array('controller' => 'ProductController', 'method'=>'deleteAction'), array('id' => '([^&]*)')));

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('getCategory', new Route(constant('URL_SUBFOLDER') . '/getCategory', array('controller' => 'PageController', 'method'=>'changeCategory'), array()));
$routes->add('search', new Route(constant('URL_SUBFOLDER') . '/search/{searchStr}', array('controller' => 'PageController', 'method'=>'searchAction'), array('searchStr' => '([^&]*)')));

$routes->add('viewCart', new Route(constant('URL_SUBFOLDER') . '/cart', array('controller' => 'CartController', 'method'=>'indexAction'), array()));
$routes->add('getCartItems', new Route(constant('URL_SUBFOLDER') . '/getCart', array('controller' => 'CartController', 'method'=>'getCartItemsAction'), array()));
$routes->add('paymentInfo', new Route(constant('URL_SUBFOLDER') . '/paymentInfo', array('controller' => 'CartController', 'method'=>'paymentInfoAction'), array()));

$routes->add('viewOrders', new Route(constant('URL_SUBFOLDER') . '/orders', array('controller' => 'OrderController', 'method'=>'viewOrdersAction'), array()));
$routes->add('viewPersonalInfo', new Route(constant('URL_SUBFOLDER') . '/information', array('controller' => 'OrderController', 'method'=>'viewPersonalInformationAction'), array()));

$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'SessionController', 'method'=>'loginAction'), array()));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'SessionController', 'method'=>'logoutAction'), array()));
$routes->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'RegisterController', 'method'=>'indexAction')));
