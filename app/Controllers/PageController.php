<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		session_start();
		$_SESSION['role'] = 'Admin';
		$routeToProduct = str_replace('{id}', 'MSI_GF65_2', $routes->get('product')->getPath());
		$name = 'home';
    require_once APP_ROOT . '/views/layout.view.php';
	}
}