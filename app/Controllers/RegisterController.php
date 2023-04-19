<?php 

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;

class RegisterController
{
    // Homepage action
	public function indexAction(RouteCollection $routes, Request $request)
	{
		startSession();
		$_SESSION['showNav'] = false;
		$name = 'register';
    require_once APP_ROOT . '/views/layout.view.php';
	}
}