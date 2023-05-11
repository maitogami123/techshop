<?php
namespace App\Controllers;

use App\Models\Category;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RouteCollection;

class CategoryController{
    public function showAction(string $id, RouteCollection $routes, Request $request)
    {
        startSession();
        $name = 'brand';
        $Category = new Category();
        try {
            $Category->read($id);
        } catch (ResourceNotFoundException $err) {
            redirect(getPath($routes, 'homepage'));
        }
        require_once APP_ROOT . '/views/layout.view.php';
    }
    public function createCategory(RouteCollection $routes ,Request $request){
        startSession();
        $category = new Category();
        $category->create($_POST);
    }
    public function editAction(string $id, RouteCollection $routes, Request $request) {
        startSession();
        $Category = new Category();
        $Category->read($id);
        require_once APP_ROOT . '/views/admin/Category/edit.view.php';
    }
    public function updateAction( RouteCollection $routes, Request $request) {
        startSession();
        $Category = new Category();
        $Category-> update($_POST);
    }
    public function deleteAction(string $id, RouteCollection $routes, Request $request) {
        startSession();
        $Category = new Category();
        $Category->delete($id);
        // require_once APP_ROOT . '/views/admin/brand/edit.view.php';
    }

}
?>