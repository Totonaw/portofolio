<?php
namespace portofolio\HTTP\Controllers\Cms;

use portofolio\Http\Controllers\Controller;
use portofolio\Menu;

use Illuminate\Http\Request;
use \Exception;
class MenuController extends Controller{

	
	public function listMenu(Request $request){
		
		$menuMdl = new Menu;
		var_dump($menuMdl->menu_id);
		
		return 'list menu';
	}
	
	public function createMenu(Request $request){
		
		$menuMdl = new Menu();
		try{
			$menuMdl->menu_title = "test";
			$menuMdl->save();
		}catch(Exception $err){
			var_dump($err);
		}
		return 'test create';
	}
}
