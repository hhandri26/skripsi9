<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class dokumenkerjasama extends Sximo  {
	
	protected $table = 'tb_dokumen_kerjasama';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_dokumen_kerjasama.* FROM tb_dokumen_kerjasama ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_dokumen_kerjasama.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
