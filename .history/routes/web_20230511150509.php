<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '([^&]*)')));
// $routes->add('viewProduct', new Route(constant('URL_SUBFOLDER') . '/view/product', array('controller' => 'ProductController', 'method'=>'indexAction'), array()));
// $routes->add('editProduct', new Route(constant('URL_SUBFOLDER') . '/edit/product/{id}', array('controller' => 'ProductController', 'method'=>'editAction'), array('id' => '([^&]*)')));
$routes->add('deleteProduct', new Route(constant('URL_SUBFOLDER') . '/delete/product/{id}', array('controller' => 'ProductController', 'method'=>'deleteAction'), array('id' => '([^&]*)')));

$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('getCategory', new Route(constant('URL_SUBFOLDER') . '/getCategory', array('controller' => 'PageController', 'method'=>'changeCategory'), array()));
$routes->add('search', new Route(constant('URL_SUBFOLDER') . '/search/{searchStr}', array('controller' => 'PageController', 'method'=>'searchAction'), array('searchStr' => '([^&]*)')));
$routes->add('viewProducts', new Route(constant('URL_SUBFOLDER') . '/view/product', array('controller' => 'PageController', 'method'=>'viewProduct'), array('searchStr' => '([^&]*)')));
$routes->add('viewCategory', new Route(constant('URL_SUBFOLDER') . '/view/category/{category}', array('controller' => 'PageController', 'method'=>'viewCategory'), array('category' => '([^&]*)')));
$routes->add('updateViewCategory', new Route(constant('URL_SUBFOLDER') . '/filter/category', array('controller' => 'PageController', 'method'=>'filterCategory'), array()));

$routes->add('viewCart', new Route(constant('URL_SUBFOLDER') . '/cart', array('controller' => 'CartController', 'method'=>'indexAction'), array()));
$routes->add('getCartItems', new Route(constant('URL_SUBFOLDER') . '/getCart', array('controller' => 'CartController', 'method'=>'getCartItemsAction'), array()));
$routes->add('paymentInfo', new Route(constant('URL_SUBFOLDER') . '/paymentInfo', array('controller' => 'CartController', 'method'=>'paymentInfoAction'), array()));

$routes->add('viewOrders', new Route(constant('URL_SUBFOLDER') . '/orders', array('controller' => 'OrderController', 'method'=>'viewOrdersAction'), array()));
$routes->add('viewOrderDetail', new Route(constant('URL_SUBFOLDER') . '/order/{orderId}', array('controller' => 'OrderController', 'method'=>'viewOrderDetailAction'), array('orderId' => '([^&]*)')));
$routes->add('createOrder', new Route(constant('URL_SUBFOLDER') . '/createOrder', array('controller' => 'OrderController', 'method'=>'createOrderAction'), array()));
$routes->add('cancelOrder', new Route(constant('URL_SUBFOLDER') . '/cancelOrder/{id}', array('controller' => 'OrderController', 'method'=>'cancelOrderAction'), array('id' => '([^&]*)')));
$routes->add('viewPersonalInfo', new Route(constant('URL_SUBFOLDER') . '/information', array('controller' => 'OrderController', 'method'=>'viewPersonalInformationAction'), array()));

$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'SessionController', 'method'=>'loginAction'), array()));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'SessionController', 'method'=>'logoutAction'), array()));
$routes->add('register', new Route(constant('URL_SUBFOLDER') . '/register', array('controller' => 'RegisterController', 'method'=>'indexAction')));

$routes->add('admin', new Route(constant('URL_SUBFOLDER') . '/admin', array('controller' => 'AdminController', 'method'=>'indexHomeAction'), array()));
$routes->add('adminProduct', new Route(constant('URL_SUBFOLDER') . '/admin/product', array('controller' => 'AdminController', 'method'=>'indexProductAction'), array()));
$routes->add('createProduct', new Route(constant('URL_SUBFOLDER') . '/admin/product/create', array('controller' => 'ProductController', 'method'=>'createProduct'), array()));
$routes->add('getProductDetail', new Route(constant('URL_SUBFOLDER') . '/admin/product/detail/{id}', array('controller' => 'ProductController', 'method'=>'getProductDetail'), array('id' => '([^&]*)')));
$routes->add('editProduct', new Route(constant('URL_SUBFOLDER') . '/admin/product/edit/{id}', array('controller' => 'ProductController', 'method'=>'editAction'), array('id' => '([^&]*)')));
$routes->add('updateProduct', new Route(constant('URL_SUBFOLDER') . '/admin/product/saveChange', array('controller' => 'ProductController', 'method'=>'updateAction'), array()));
$routes->add('addQty', new Route(constant('URL_SUBFOLDER') . '/admin/product/addQty/{id}', array('controller' => 'ProductController', 'method'=>'addQtyAction'), array('id' => '([^&]*)')));
$routes->add('saveQty', new Route(constant('URL_SUBFOLDER') . '/admin/product/saveQty', array('controller' => 'ProductController', 'method'=>'saveQtyAction'), array()));

$routes->add('adminOrders', new Route(constant('URL_SUBFOLDER') . '/admin/orders', array('controller' => 'AdminController', 'method'=>'indexOrderAction'), array()));
$routes->add('getOrderDetail', new Route(constant('URL_SUBFOLDER') . '/admin/order/detail/{id}', array('controller' => 'OrderController', 'method'=>'getOrderDetail'), array('id' => '([^&]*)')));
$routes->add('updateOrderStatus', new Route(constant('URL_SUBFOLDER') . '/admin/order/updateStatus', array('controller' => 'OrderController', 'method'=>'updateOrderStatusAction'), array()));

$routes->add('adminUsers', new Route(constant('URL_SUBFOLDER') . '/admin/users', array('controller' => 'AdminController', 'method'=>'indexUserAction'), array()));

$routes->add('adminBrands', new Route(constant('URL_SUBFOLDER') . '/admin/brands', array('controller' => 'AdminController', 'method'=>'indexBrandAction'), array()));
$routes->add('createBrands', new Route(constant('URL_SUBFOLDER') . '/admin/brands/create', array('controller' => 'BrandController', 'method'=>'createBrand'), array()));
$routes->add('editBrands', new Route(constant('URL_SUBFOLDER') . '/admin/brand/edit/{id}', array('controller' => 'BrandController', 'method'=>'editAction'), array('id' => '([^&]*)')));
$routes->add('updateBrand', new Route(constant('URL_SUBFOLDER') . '/admin/brand/saveChange', array('controller' => 'BrandController', 'method'=>'updateAction'), array()));


$routes->add('adminRoles', new Route(constant('URL_SUBFOLDER') . '/admin/roles', array('controller' => 'AdminController', 'method'=>'indexRoleAction'), array()));

$routes->add('adminPermissions', new Route(constant('URL_SUBFOLDER') . '/admin/permissions', array('controller' => 'AdminController', 'method'=>'indexPermissionAction'), array()));
$routes->add('getRolePermission', new Route(constant('URL_SUBFOLDER') . '/admin/getRolePermission', array('controller' => 'RoleController', 'method'=>'getRolePermissionAction'), array()));

$routes->add('adminPermissionGroups', new Route(constant('URL_SUBFOLDER') . '/admin/permissionGroups', array('controller' => 'AdminController', 'method'=>'indexPermissionGroupAction'), array()));