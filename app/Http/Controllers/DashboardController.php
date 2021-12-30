<?php namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use DB;

class DashboardController extends Controller {

	public function __construct()
	{
		parent::__construct();
		
        $this->data = array(
            'pageTitle' =>  $this->config['cnf_appname'],
            'pageNote'  =>  'Welcome to Dashboard',
            
        );			
	}

	public function index( Request $request )
	{
		$month = date("m");
		$day = date("d");
		$count_per_month = DB::table('tb_dokumen_kerjasama')
							->select(DB::Raw('count(id) as total'),
							DB::Raw('DATE_FORMAT(tgl_mulai,"%m") AS month_number'),
							DB::Raw('DATE_FORMAT(tgl_mulai,"%M") AS month'))
							->groupBy(DB::raw('DATE_FORMAT(tgl_mulai,"%m")'))
							->get();
		$count_user 	= DB::table('tb_users')
						->select(DB::Raw('count(id) as total'))
						->pluck('total')
						->first();
		$count_document = DB::table('tb_dokumen_kerjasama')
						->select(DB::Raw('count(id) as total'))
						->pluck('total')
						->first();
		$usulan_kerjasama = DB::table('tb_usulan_kerjasama')
						->select(DB::Raw('count(id) as total'))
						->pluck('total')
						->first();
		
		$this->data = array_merge(array(
			'count_per_month'	=> 	$count_per_month,
			'count_user' 	=> $count_user,
			'count_document' =>$count_document,
			'usulan_kerjasama' =>$usulan_kerjasama
			
		),$this->data);
	
		
		return view('dashboard.index',$this->data);
	}	


	


}