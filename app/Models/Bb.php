<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class bb extends Sximo  {
	
	protected $table = 'tb_menu';
	protected $primaryKey = 'menu_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_menu.* FROM tb_menu  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_menu.menu_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
