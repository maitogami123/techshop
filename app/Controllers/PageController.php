<?php

namespace App\Controllers;

use App\Models\Products;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
	// Homepage action
	public function indexAction(RouteCollection $routes)
	{
		startSession();
		$productList = new Products();
		$brand = 'MSI';
		$productList->readByBrand($brand);
		$name = 'home';
		require_once APP_ROOT . '/views/layout.view.php';
	}
}