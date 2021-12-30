<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class draftkerjasama extends Sximo  {
	
	protected $table = 'tb_usulan_kerjasama';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_usulan_kerjasama.* FROM tb_usulan_kerjasama  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_usulan_kerjasama.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
