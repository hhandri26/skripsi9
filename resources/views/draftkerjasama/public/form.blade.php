

		 {!! Form::open(array('url'=>'draftkerjasama', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Draft Kerjasama</legend>
				{!! Form::hidden('id', $row['id']) !!}{!! Form::hidden('jenis_kerjasama', $row['jenis_kerjasama']) !!}{!! Form::hidden('bentuk_kerjasama', $row['bentuk_kerjasama']) !!}{!! Form::hidden('nama_mitra', $row['nama_mitra']) !!}{!! Form::hidden('alamat_mitra', $row['alamat_mitra']) !!}{!! Form::hidden('jenis_lembaga', $row['jenis_lembaga']) !!}{!! Form::hidden('dokumen', $row['dokumen']) !!}{!! Form::hidden('nama_penandatangan', $row['nama_penandatangan']) !!}{!! Form::hidden('jabatan_penandatangan', $row['jabatan_penandatangan']) !!}{!! Form::hidden('nama_penanggung_jawab', $row['nama_penanggung_jawab']) !!}{!! Form::hidden('email_penanggung_jawab', $row['email_penanggung_jawab']) !!}{!! Form::hidden('telepon_penanggung_jawab', $row['telepon_penanggung_jawab']) !!}{!! Form::hidden('tgl_mulai', $row['tgl_mulai']) !!}{!! Form::hidden('tgl_berakhir', $row['tgl_berakhir']) !!}					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
					
					<input type='radio' name='status' value ='Setuju' required @if($row['status'] == 'Setuju') checked="checked" @endif class='minimal-green' > Setuju 
					
					<input type='radio' name='status' value ='Tolak' required @if($row['status'] == 'Tolak') checked="checked" @endif class='minimal-green' > Tolak  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Remaks" class=" control-label col-md-4 text-left"> Remaks </label>
										<div class="col-md-6">
										  <textarea name='remaks' rows='5' id='remaks' class='form-control form-control-sm '  
				           >{{ $row['remaks'] }}</textarea> 
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
