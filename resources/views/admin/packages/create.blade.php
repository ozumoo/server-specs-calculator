@extends('admin._master')
	@section('content')
		<div class="page">
		    <div class="page-content">
	          	<!-- Panel Table Add Row -->
	          	<div class="panel">
		            <header class="panel-heading">
		              <h3 class="panel-title">Create</h3>
		            </header>
		            <div class="panel-body">
		              	<div class="row" data-plugin="matchHeight" data-by-row="true">
			        		<div class="error">
						 		@if ($errors->any())
								    <div class="alert alert-danger">
								        <ul>
								            @foreach ($errors->all() as $error)
								                <li>{{ $error }}</li>
								            @endforeach
								     	</ul>
								 	</div>
								@endif
							</div>
							{{Form::open(['action' => 'Admin\clientController@store', 'method' => 'POST'  ,'class' => 'form-group'])}}	
					
								@include('admin.clients.form_fields')		
								
								{{Form::submit('Create Client',['class' => 'form-control  btn btn-primary waves-effect '])}}	
						
							{{Form::close()}}
			        	</div>
		          	</div>
	          		<!-- End Panel Table Add Row -->
		        </div>
		    </div>
		</div>
	@stop

	