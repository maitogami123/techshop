<?php

namespace App\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
    public function showAction(string $id, RouteCollection $routes, Request $request)
    {
        startSession();
        $name = 'product';
        $product = new Product();
        try {
            $product->read($id);
        } catch (ResourceNotFoundException $err) {
            redirect(getPath($routes, 'homepage'));
        }
        require_once APP_ROOT . '/views/layout.view.php';
    }

    public function showCreateForm(RouteCollection $routes, Request $request)
    {
        startSession();
        if ($request->isMethod('post')) {
            $product = new Product();
            $product->create($_POST, $_FILES);
        } else {
            $brands = new Brands();
            $brands->readAll();
            $categories = new Categories();
            $categories->readAll();
            $name = 'admin/product/create';
            require_once APP_ROOT . '/views/layout.view.php';
        }
    }

    public function indexAction(RouteCollection $routes, Request $request) {
        startSession();
        $productList = new Products();
        $productList->getAll();
        $name = 'admin/product/index';
        require_once APP_ROOT . '/views/layout.view.php';
    }

    public function editAction(string $id, RouteCollection $routes, Request $request) {
        startSession();
        $name = 'admin/product/edit';
        require_once APP_ROOT . '/views/layout.view.php';
    }

    public function deleteAction(string $id, RouteCollection $routes, Request $request) {
        $product = new Product();
        $product->delete($id);
    }
}   