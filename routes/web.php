<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '([^&]*)')));
$routes->add('create', new Route(constant('URL_SUBFOLDER') . '/create_product', array('controller' => 'ProductController', 'method'=>'showCreateForm'), array()));
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));