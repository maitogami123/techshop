<?php 

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class RegisterController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		startSession();
		$_SESSION['showNav'] = false;
		$name = 'register';
    require_once APP_ROOT . '/views/layout.view.php';
	}
}