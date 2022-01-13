@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'draftkerjasama?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm   "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm "  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		<div class="row">
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
	
		</div>
		
		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("draftkerjasama/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop