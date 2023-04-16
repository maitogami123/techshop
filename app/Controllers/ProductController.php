<?php

namespace App\Controllers;

use App\Models\Brands;
use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;

class ProductController
{
    // Show the product attributes based on the id.
    public function showAction(string $id, RouteCollection $routes)
    {
        startSession();
        $product = new Product();
        $product->read($id);
        $name = 'product';
        require_once APP_ROOT . '/views/layout.view.php';
    }

    public function showCreateForm(RouteCollection $routes)
    {
        startSession();
        $category = $_POST['category'] ?? 'Temp';
        $brands = new Brands();
        $brands->readAll();
        $name = 'product/create_product';
        // create product instance then call create method with data get from post method
        require_once APP_ROOT . '/views/layout.view.php';
    }
}