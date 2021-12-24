

		 {!! Form::open(array('url'=>'usulankerjasama', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-6">
						<fieldset><legend> Usulan Dokumen</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Jenis Kerjasama" class=" control-label col-md-4 text-left"> Jenis Kerjasama </label>
										<div class="col-md-6">
										  <input  type='text' name='jenis_kerjasama' id='jenis_kerjasama' value='{{ $row['jenis_kerjasama'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bentuk Kerjasama" class=" control-label col-md-4 text-left"> Bentuk Kerjasama </label>
										<div class="col-md-6">
										  <input  type='text' name='bentuk_kerjasama' id='bentuk_kerjasama' value='{{ $row['bentuk_kerjasama'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nama Mitra" class=" control-label col-md-4 text-left"> Nama Mitra </label>
										<div class="col-md-6">
										  <input  type='text' name='nama_mitra' id='nama_mitra' value='{{ $row['nama_mitra'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Alamat Mitra" class=" control-label col-md-4 text-left"> Alamat Mitra </label>
										<div class="col-md-6">
										  <input  type='text' name='alamat_mitra' id='alamat_mitra' value='{{ $row['alamat_mitra'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jenis Lembaga" class=" control-label col-md-4 text-left"> Jenis Lembaga </label>
										<div class="col-md-6">
										  <input  type='text' name='jenis_lembaga' id='jenis_lembaga' value='{{ $row['jenis_lembaga'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Dokumen" class=" control-label col-md-4 text-left"> Dokumen </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-copy"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="dokumen" class="upload"       />
						</div>
						<div class="dokumen-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["dokumen"],"dokumen_usulan") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div><div class="col-md-6">
						<fieldset><legend> Penanggung Jawab</legend>
									
									  <div class="form-group row  " >
										<label for="Nama Penandatangan" class=" control-label col-md-4 text-left"> Nama Penandatangan </label>
										<div class="col-md-6">
										  <input  type='text' name='nama_penandatangan' id='nama_penandatangan' value='{{ $row['nama_penandatangan'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jabatan Penandatangan" class=" control-label col-md-4 text-left"> Jabatan Penandatangan </label>
										<div class="col-md-6">
										  <input  type='text' name='jabatan_penandatangan' id='jabatan_penandatangan' value='{{ $row['jabatan_penandatangan'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nama Penanggung Jawab" class=" control-label col-md-4 text-left"> Nama Penanggung Jawab </label>
										<div class="col-md-6">
										  <input  type='text' name='nama_penanggung_jawab' id='nama_penanggung_jawab' value='{{ $row['nama_penanggung_jawab'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email Penanggung Jawab" class=" control-label col-md-4 text-left"> Email Penanggung Jawab </label>
										<div class="col-md-6">
										  <input  type='text' name='email_penanggung_jawab' id='email_penanggung_jawab' value='{{ $row['email_penanggung_jawab'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Telepon Penanggung Jawab" class=" control-label col-md-4 text-left"> Telepon Penanggung Jawab </label>
										<div class="col-md-6">
										  <textarea name='telepon_penanggung_jawab' rows='5' id='telepon_penanggung_jawab' class='form-control form-control-sm '  
				           >{{ $row['telepon_penanggung_jawab'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tgl Mulai" class=" control-label col-md-4 text-left"> Tgl Mulai </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('tgl_mulai', $row['tgl_mulai'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tgl Berakhir" class=" control-label col-md-4 text-left"> Tgl Berakhir </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('tgl_berakhir', $row['tgl_berakhir'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
