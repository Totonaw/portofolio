<?php
namespace portofolio\HTTP\Controllers\Cms;
use portofolio\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\View;

class LoginController extends Controller{

	protected $redirectTo = '/cms';
	
	public function auth(Request $request){

		$username = $request->input('username');
		$password = $request->input('password');
		
		var_dump($username);
		var_dump($password);
	}
	
	public function login(){
		return View::make('cms.login');
	}
}
