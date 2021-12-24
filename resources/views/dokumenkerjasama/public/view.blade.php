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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	