<?php 

namespace App\Controllers;
use App\Models\User;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Request;

class RegisterController
{
    // Homepage action
	public function getAccountInDB(){
		$user = new User();
		return $user->getAccountInDB();
	}

	public function getGmailInDB(){
		$user = new User();
		return $user->getGmailInDB();
	}

	public function indexAction(RouteCollection $routes, Request $request)
	{
		startSession();
		$_SESSION['showNav'] = false;
		$name = 'register';
		if($request -> isMethod('POST')){
			// echo "fjlakjflajsf";
			$user = new User();
			$this -> createAccount($user);
		}
		else {
			# code...
			 require_once APP_ROOT . '/views/layout.view.php';
		}
	}

	public function createAccount($user)
	{
		if (isset($_POST['userName']) && isset($_POST['fistName']) && isset($_POST['lastName']) && isset($_POST['Email']) && isset($_POST['Password'])) {
			$username= $_POST['userName'];
			$FirstNname= $_POST['fistName'];
			$password = $_POST['Password'];
			$LastNname= $_POST['lastName'];
			$Email= $_POST['Email'];
			# code...
			$user -> createAccount($username, $password);
			$user -> createUserDetail($username, $FirstNname, $LastNname, $Email);
			$user -> createAccountGroup($username);
		}
		echo $Email;
		echo $username;
		echo $password;
	}
}
