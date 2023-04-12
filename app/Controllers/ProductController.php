<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;

class ProductController
{
    // Show the product attributes based on the id.
	public function showAction(string $id, RouteCollection $routes)
	{
        $product = new Product();
        $product->read($id);
        $name = 'product';

        require_once APP_ROOT . '/views/layout.view.php';
	}

    private function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

    public function showCreateForm(RouteCollection $routes) {
        $category = $_POST['category'] ?? 'Temp';
        // create product instance then call create method with data get from post method
        $this->debug_to_console($category);
        $name = 'product/create_product';
        require_once APP_ROOT . '/views/layout.view.php';        
    }
}
