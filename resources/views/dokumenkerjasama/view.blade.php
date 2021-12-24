@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('dokumenkerjasama/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('dokumenkerjasama?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('dokumenkerjasama/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('dokumenkerjasama/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Dokumen', (isset($fields['nama_dokumen']['language'])? $fields['nama_dokumen']['language'] : array())) }}</td>
						<td>{{ $row->nama_dokumen}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jenis Dokumen', (isset($fields['jenis_dokumen']['language'])? $fields['jenis_dokumen']['language'] : array())) }}</td>
						<td>{{ $row->jenis_dokumen}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tgl Mulai', (isset($fields['tgl_mulai']['language'])? $fields['tgl_mulai']['language'] : array())) }}</td>
						<td>{{ $row->tgl_mulai}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tgl Berakhir', (isset($fields['tgl_berakhir']['language'])? $fields['tgl_berakhir']['language'] : array())) }}</td>
						<td>{{ $row->tgl_berakhir}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pihak 1', (isset($fields['pihak_1']['language'])? $fields['pihak_1']['language'] : array())) }}</td>
						<td>{{ $row->pihak_1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pihak 2', (isset($fields['pihak_2']['language'])? $fields['pihak_2']['language'] : array())) }}</td>
						<td>{{ $row->pihak_2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Dokumen', (isset($fields['no_dokumen']['language'])? $fields['no_dokumen']['language'] : array())) }}</td>
						<td>{{ $row->no_dokumen}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tempat', (isset($fields['tempat']['language'])? $fields['tempat']['language'] : array())) }}</td>
						<td>{{ $row->tempat}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Logo1', (isset($fields['logo1']['language'])? $fields['logo1']['language'] : array())) }}</td>
						<td>{{ $row->logo1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Logo2', (isset($fields['logo2']['language'])? $fields['logo2']['language'] : array())) }}</td>
						<td>{{ $row->logo2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Pihak 1', (isset($fields['nama_pihak_1']['language'])? $fields['nama_pihak_1']['language'] : array())) }}</td>
						<td>{{ $row->nama_pihak_1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Pihak 2', (isset($fields['nama_pihak_2']['language'])? $fields['nama_pihak_2']['language'] : array())) }}</td>
						<td>{{ $row->nama_pihak_2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jabatan Pihak 1', (isset($fields['jabatan_pihak_1']['language'])? $fields['jabatan_pihak_1']['language'] : array())) }}</td>
						<td>{{ $row->jabatan_pihak_1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jabatan Pihak 2', (isset($fields['jabatan_pihak_2']['language'])? $fields['jabatan_pihak_2']['language'] : array())) }}</td>
						<td>{{ $row->jabatan_pihak_2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Alamat Pihak 1', (isset($fields['alamat_pihak_1']['language'])? $fields['alamat_pihak_1']['language'] : array())) }}</td>
						<td>{{ $row->alamat_pihak_1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Alamat Pihak 2', (isset($fields['alamat_pihak_2']['language'])? $fields['alamat_pihak_2']['language'] : array())) }}</td>
						<td>{{ $row->alamat_pihak_2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Keterangan Pihak 1', (isset($fields['keterangan_pihak_1']['language'])? $fields['keterangan_pihak_1']['language'] : array())) }}</td>
						<td>{{ $row->keterangan_pihak_1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Keterangan Pihak 2', (isset($fields['keterangan_pihak_2']['language'])? $fields['keterangan_pihak_2']['language'] : array())) }}</td>
						<td>{{ $row->keterangan_pihak_2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mengingat', (isset($fields['mengingat']['language'])? $fields['mengingat']['language'] : array())) }}</td>
						<td>{{ $row->mengingat}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pasal', (isset($fields['pasal']['language'])? $fields['pasal']['language'] : array())) }}</td>
						<td>{{ $row->pasal}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Judul', (isset($fields['judul']['language'])? $fields['judul']['language'] : array())) }}</td>
						<td>{{ $row->judul}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Isi', (isset($fields['isi']['language'])? $fields['isi']['language'] : array())) }}</td>
						<td>{{ $row->isi}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mengetahui', (isset($fields['mengetahui']['language'])? $fields['mengetahui']['language'] : array())) }}</td>
						<td>{{ $row->mengetahui}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jabatan Mengetahui', (isset($fields['jabatan_mengetahui']['language'])? $fields['jabatan_mengetahui']['language'] : array())) }}</td>
						<td>{{ $row->jabatan_mengetahui}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
