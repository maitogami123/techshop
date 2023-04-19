<?php

namespace App\Controllers;

use App\Models\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
	// Homepage action
	public function indexAction(RouteCollection $routes, Request $request)
	{
		startSession();
		$productList = new Products();
		$brand = 'MSI';
		$productList->readByBrand($brand);
		$name = 'home';
		require_once APP_ROOT . '/views/layout.view.php';
	}

	public function changeCategory(RouteCollection $routes, Request $request)
	{
		startSession();
		$productList = new Products();
		$brand = $_GET['content'];
		$productList->readByBrand($brand);
		$name = 'product_slide';
		require APP_ROOT . "/views/$name.view.php";
		$productList = new Products();
		$brand = $_GET['content'];
		$productList->readByBrand($brand);
		require APP_ROOT . "/views/$name.view.php";
	}
}