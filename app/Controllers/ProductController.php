<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
	public function showAction(string $id, RouteCollection $routes)
	{
        $product = new Product();
        $product->read($id);
        $name = 'product';
		$routeToProductDetail = str_replace('{id}', 1, $routes->get('detail')->getPath());
        require_once APP_ROOT . '/views/layout.view.php';
	}

    public function showDetail(int $id, RouteCollection $routes)
	{
        $product = new Product();
        $product->read($id);
        $name = 'product/details';
        require_once APP_ROOT . '/views/layout.view.php';
	}
}
