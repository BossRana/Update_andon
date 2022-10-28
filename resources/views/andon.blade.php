@extends('layouts.app') 
@section('content')    
	<h1>Blog Posts</h1>        	
	@if(count($posts)>0)             
		<!-- @foreach ($db2s as $post)                 -->
		<div class="well">                
			<!-- <h3><a href="/andon/{{$db2s->nim}}">
			{{$db2s->namamhs}}</a></h3>                    
			<small>Tanggal: 
			{{$db2s->alamat}}</small>                 -->
		</div>               
		@endforeach         
	@else             
		<h3>Tidak ada data.</h3>        
	@endif 
@endsection