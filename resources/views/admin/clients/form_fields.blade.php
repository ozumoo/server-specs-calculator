<div class="row">
	<div class="col-md-12">
		{{Form::label('name','Name')}}
		{{Form::text('name',null,['class' => 'form-control'])}}
	</div>

	<div class="col-md-12">
		{{Form::label('company_name','Company Name')}}
		{{Form::text('company_name',null,['class' => 'form-control'])}}
	</div>

	<div class="col-md-12">
		{{Form::label('email','Email')}}
		{{Form::text('email',null,['class' => 'form-control'])}}
	</div>

	<div class="col-md-12">
		{{Form::label('password','password')}}
		{{Form::password('password',['class' => 'form-control'])}}
	</div>

</div>
<br><br>