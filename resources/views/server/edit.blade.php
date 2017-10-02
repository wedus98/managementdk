@extends('layouts.dash')
@section('page_heading','Edit Dokumentasi Server')
@section('section')
<div  >
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			{{Form::model($data,['route'=>['server.update',$data],'method'=>'put','files'=>true,'data-parsley-validate'=>"parsley"])}}
			@include('server._form')
			<p class="stdformbutton">
				<button class="btn btn-info radius2">Simpan</button>
				<a class="btn btn-default radius2" href="{{url('server')}}">Kembali</a>
			</p>
			{{Form::close()}}
		</div>
		<!-- /.box-body -->
	</div>
	
</div>
</div>
@endsection
@section('script')
<script>
		$(".select2").select2();
		
</script>
@endsection