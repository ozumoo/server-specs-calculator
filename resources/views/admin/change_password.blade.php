@extends('admin._master')
	@section('content')
		<div class="page">
		    <div class="page-content">
	          	<!-- Panel Table Add Row -->
	          	<div class="panel">
		            <header class="panel-heading">
		              <h3 class="panel-title">تغيير كلمة السر</h3>
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
							{{Form::open(['action' => 'adminController@changePassword','class' => 'form-group', 'enctype'=>'multipart/form-data'])}}	
								<div class="col-md-12">
									{{Form::label('password','كلمة السر')}}
									{{Form::password('password',['class' => 'form-control'])}}
								</div>

								<div class="col-md-12">
									{{Form::label('password_confirmation','اعادة كلمة السر')}}
									{{Form::password('password_confirmation',['class' => 'form-control'])}}
								</div>
							{{Form::submit('تغيير كلمة السر',['class' => 'form-control  btn btn-primary waves-effect '])}}	
							{{Form::close()}}
			        	</div>
		          	</div>
	          		<!-- End Panel Table Add Row -->
		        </div>
		    </div>
		</div>
	@stop
	