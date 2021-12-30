@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'dokumenkerjasama?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
	<div id="wizard-step" class="wizard-circle number-tab-steps"> <h3>Dokumen Kerjasama</h3> <section> {!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Nama Dokumen" class=" control-label col-md-4 text-left"> Nama Dokumen <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='nama_dokumen' id='nama_dokumen' value='{{ $row['nama_dokumen'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jenis Dokumen" class=" control-label col-md-4 text-left"> Jenis Dokumen <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='jenis_dokumen' id='jenis_dokumen' value='{{ $row['jenis_dokumen'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Pihak 1" class=" control-label col-md-4 text-left"> Pihak 1 </label>
										<div class="col-md-6">
										  <input  type='text' name='pihak_1' id='pihak_1' value='{{ $row['pihak_1'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Pihak 2" class=" control-label col-md-4 text-left"> Pihak 2 </label>
										<div class="col-md-6">
										  <input  type='text' name='pihak_2' id='pihak_2' value='{{ $row['pihak_2'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="No Dokumen" class=" control-label col-md-4 text-left"> No Dokumen </label>
										<div class="col-md-6">
										  <input  type='text' name='no_dokumen' id='no_dokumen' value='{{ $row['no_dokumen'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tempat" class=" control-label col-md-4 text-left"> Tempat </label>
										<div class="col-md-6">
										  <input  type='text' name='tempat' id='tempat' value='{{ $row['tempat'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </section> <h3>Tanggal Kerjasama</h3> <section> 					
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
									  </div> 					
									  <div class="form-group row  " >
										<label for="Logo1" class=" control-label col-md-4 text-left"> Logo1 </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="logo1" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="logo1-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["logo1"],"logo") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Logo2" class=" control-label col-md-4 text-left"> Logo2 </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="logo2" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="logo2-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["logo2"],"logo") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </section> <h3>Pihak Kerjasama</h3> <section> 					
									  <div class="form-group row  " >
										<label for="Nama Pihak 1" class=" control-label col-md-4 text-left"> Nama Pihak 1 </label>
										<div class="col-md-6">
										  <input  type='text' name='nama_pihak_1' id='nama_pihak_1' value='{{ $row['nama_pihak_1'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jabatan Pihak 1" class=" control-label col-md-4 text-left"> Jabatan Pihak 1 </label>
										<div class="col-md-6">
										  <input  type='text' name='jabatan_pihak_1' id='jabatan_pihak_1' value='{{ $row['jabatan_pihak_1'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Alamat Pihak 1" class=" control-label col-md-4 text-left"> Alamat Pihak 1 </label>
										<div class="col-md-6">
										  <textarea name='alamat_pihak_1' rows='5' id='alamat_pihak_1' class='form-control form-control-sm '  
				           >{{ $row['alamat_pihak_1'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Keterangan Pihak 1" class=" control-label col-md-4 text-left"> Keterangan Pihak 1 </label>
										<div class="col-md-6">
										  <textarea name='keterangan_pihak_1' rows='5' id='keterangan_pihak_1' class='form-control form-control-sm '  
				           >{{ $row['keterangan_pihak_1'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nama Pihak 2" class=" control-label col-md-4 text-left"> Nama Pihak 2 </label>
										<div class="col-md-6">
										  <input  type='text' name='nama_pihak_2' id='nama_pihak_2' value='{{ $row['nama_pihak_2'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jabatan Pihak 2" class=" control-label col-md-4 text-left"> Jabatan Pihak 2 </label>
										<div class="col-md-6">
										  <input  type='text' name='jabatan_pihak_2' id='jabatan_pihak_2' value='{{ $row['jabatan_pihak_2'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Alamat Pihak 2" class=" control-label col-md-4 text-left"> Alamat Pihak 2 </label>
										<div class="col-md-6">
										  <textarea name='alamat_pihak_2' rows='5' id='alamat_pihak_2' class='form-control form-control-sm '  
				           >{{ $row['alamat_pihak_2'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Keterangan Pihak 2" class=" control-label col-md-4 text-left"> Keterangan Pihak 2 </label>
										<div class="col-md-6">
										  <textarea name='keterangan_pihak_2' rows='5' id='keterangan_pihak_2' class='form-control form-control-sm '  
				           >{{ $row['keterangan_pihak_2'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mengingat" class=" control-label col-md-4 text-left"> Mengingat </label>
										<div class="col-md-6">
										  <input  type='text' name='mengingat' id='mengingat' value='{{ $row['mengingat'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </section> <h3>Isi Kerjasama</h3> <section> 					
									  <div class="form-group row  " >
										<label for="Pasal" class=" control-label col-md-4 text-left"> Pasal </label>
										<div class="col-md-6">
										  <input  type='text' name='pasal' id='pasal' value='{{ $row['pasal'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Judul" class=" control-label col-md-4 text-left"> Judul </label>
										<div class="col-md-6">
										  <input  type='text' name='judul' id='judul' value='{{ $row['judul'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Isi" class=" control-label col-md-4 text-left"> Isi </label>
										<div class="col-md-6">
										  <textarea name='isi' rows='5' id='editor' class='form-control form-control-sm '  
						 >{{ $row['isi'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mengetahui" class=" control-label col-md-4 text-left"> Mengetahui </label>
										<div class="col-md-6">
										  <input  type='text' name='mengetahui' id='mengetahui' value='{{ $row['mengetahui'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Jabatan Mengetahui" class=" control-label col-md-4 text-left"> Jabatan Mengetahui </label>
										<div class="col-md-6">
										  <input  type='text' name='jabatan_mengetahui' id='jabatan_mengetahui' value='{{ $row['jabatan_mengetahui'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </section></div>
	
		</div>
		
		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		
			$(".submitted-button").hide()
			$("#wizard-step").steps({
		          headerTag: "h3",
		          bodyTag: "section",
		          transitionEffect: "fade",
		          titleTemplate: "<span class='step'>#index#</span> #title#",
		          autoFocus: true,
		          labels: {
		            finish: "Submit"
		        },
		        onFinished: function (event, currentIndex) {
		          $("#saved-button").click();
		        }
		     });
	       	$(".steps ul > li > a span").removeClass("number") 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("dokumenkerjasama/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop