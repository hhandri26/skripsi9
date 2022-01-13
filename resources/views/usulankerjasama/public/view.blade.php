<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jenis Kerjasama', (isset($fields['jenis_kerjasama']['language'])? $fields['jenis_kerjasama']['language'] : array())) }}</td>
						<td>{{ $row->jenis_kerjasama}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bentuk Kerjasama', (isset($fields['bentuk_kerjasama']['language'])? $fields['bentuk_kerjasama']['language'] : array())) }}</td>
						<td>{{ $row->bentuk_kerjasama}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Mitra', (isset($fields['nama_mitra']['language'])? $fields['nama_mitra']['language'] : array())) }}</td>
						<td>{{ $row->nama_mitra}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Alamat Mitra', (isset($fields['alamat_mitra']['language'])? $fields['alamat_mitra']['language'] : array())) }}</td>
						<td>{{ $row->alamat_mitra}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jenis Lembaga', (isset($fields['jenis_lembaga']['language'])? $fields['jenis_lembaga']['language'] : array())) }}</td>
						<td>{{ $row->jenis_lembaga}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Dokumen', (isset($fields['dokumen']['language'])? $fields['dokumen']['language'] : array())) }}</td>
						<td>{{ $row->dokumen}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Penandatangan', (isset($fields['nama_penandatangan']['language'])? $fields['nama_penandatangan']['language'] : array())) }}</td>
						<td>{{ $row->nama_penandatangan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jabatan Penandatangan', (isset($fields['jabatan_penandatangan']['language'])? $fields['jabatan_penandatangan']['language'] : array())) }}</td>
						<td>{{ $row->jabatan_penandatangan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Penanggung Jawab', (isset($fields['nama_penanggung_jawab']['language'])? $fields['nama_penanggung_jawab']['language'] : array())) }}</td>
						<td>{{ $row->nama_penanggung_jawab}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email Penanggung Jawab', (isset($fields['email_penanggung_jawab']['language'])? $fields['email_penanggung_jawab']['language'] : array())) }}</td>
						<td>{{ $row->email_penanggung_jawab}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Telepon Penanggung Jawab', (isset($fields['telepon_penanggung_jawab']['language'])? $fields['telepon_penanggung_jawab']['language'] : array())) }}</td>
						<td>{{ $row->telepon_penanggung_jawab}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Remaks', (isset($fields['remaks']['language'])? $fields['remaks']['language'] : array())) }}</td>
						<td>{{ $row->remaks}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	