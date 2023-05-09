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
		$brand = $_GET['content'];
		$sections = [];
		$limit = 4;
		switch ($brand) {
			case "laptop":
				$sections[] = "ACER";
				$sections[] = "MSI";
				$sections[] = "HP";
				$sections[] = "DELL";
				
				break;
			case "vga":
				$sections[] = "NVIDIA";
				$sections[] = "AMD";
				$sections[] = "INTEL";
				break;
			case "pc":
				$limit = 12;
				$sections[] = "NoBrand";
			case "cpu":
				$sections[] = "AMD";
				$sections[] = "INTEL";
				break;
			case "gear":
				$sections[] = "Mice";
				$sections[] = "Keyboard";
				$sections[] = "Headphone";
				foreach ($sections as $section) {
					$productList = new Products();
					$productList->readByCategory($section);
					$brand = $section;
					$name = 'product_slide';
					require APP_ROOT . "/views/$name.view.php";
				}
				die();
		}
		foreach ($sections as $section) {
			$productList = new Products();
			$productList->readByCategory($brand);
			global $global_section;
			$global_section = $section;
			$productList->productList = array_filter(
				$productList->productList,
				fn($item) => $item->getBrandID() == $global_section
			);
			$name = 'product_slide';
			require APP_ROOT . "/views/$name.view.php";
		}
	}

	public function searchAction(string $searchStr, RouteCollection $routes, Request $request)
	{
		startSession();
		$productList = new Products();
		$productList->search($searchStr);
		$name = 'search_result';
		require APP_ROOT . "/views/layout.view.php";
	}

	public function viewProduct(RouteCollection $routes, Request $request) {
		startSession();
		$productList = new Products();
		$productList->readByCategory(json_decode($_POST['category']));
		global $global_section;
		$global_section = json_decode($_POST['brand']);
		$productList->productList = array_filter(
			$productList->productList,
			fn($item) => $item->getBrandID() == $global_section
		);
		$name = 'product_filter';		
		require APP_ROOT . "/views/layout.view.php";
	}
}