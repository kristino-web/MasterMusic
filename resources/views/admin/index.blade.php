@extends('layouts.adm')

@section('content')
		
		<div class="container body">
			
			<div class="main_container">
				@include('admin.admin_left')

				@include('admin.admin_top')

				@include('admin.centro')

				@include('admin.admin_footer')
			</div>

		</div>

@endsection