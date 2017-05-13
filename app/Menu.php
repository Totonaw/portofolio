<?php

namespace portofolio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    //
    protected $table ='menu';
    protected $primaryKey = 'menu_id';
    const CREATED_AT = 'menu_date_insert';
    const UPDATED_AT = 'menu_date_update';
    
    
    public function _getMenu(){
    	$menu = DB::select(" SELECT * FROM menu WHERE 1=1;");
    	
    	return $menu;
    }
}
