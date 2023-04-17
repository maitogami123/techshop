<?php 

namespace App\Controllers;

use App\Models\User;
use ErrorException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class SessionController
{
    // Homepage action
	public function loginAction(RouteCollection $routes, Request $request = null)
	{
		startSession();
		$_SESSION['showNav'] = false;
		if ($request != null && isset($_POST['username']) && isset($_POST['password'])) {
			$username = $_POST['username'];
			$pwd = $_POST['password'];
			$user = new User();
			try {
				$user->read($username, $pwd);
				$_SESSION['user'] = serialize($user);
				$_SESSION['isLoggedIn'] = true;
			} catch (ErrorException $err) {
				$errMsg = $err->getMessage();
				$status = 'fail';
			}
			$package = ['status' => $status ?? '', 'message' => $errMsg ?? ''];
			echo json_encode($package);
		} else if ($_SESSION['isLoggedIn'] == true){
			redirect($routes->get('homepage')->getPath());
		} else {
			$name = 'login';
			require_once APP_ROOT . '/views/layout.view.php';
		}
	}

	public function logoutAction(RouteCollection $routes) {
		session_start();
		session_destroy();
		redirect($routes->get('homepage')->getPath());
	}
}