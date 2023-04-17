<?php

namespace App\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
    public function showAction(string $id, RouteCollection $routes)
    {
        startSession();
        $name = 'product';
        $product = new Product();
        try {
            $product->read($id);
        } catch (ResourceNotFoundException $err) {
            redirect($routes->get('homepage')->getPath());
        }   
        require_once APP_ROOT . '/views/layout.view.php';
    }

    public function showCreateForm(RouteCollection $routes, Request $request)
    {
        startSession();
        $brands = new Brands();
        $brands->readAll();
        $categories = new Categories();
        $categories->readAll();
        $name = 'admin/product/create';
        // create product instance then call create method with data get from post method
        require_once APP_ROOT . '/views/layout.view.php';
    }
}