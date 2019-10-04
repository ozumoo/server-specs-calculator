<div class="row">
	<div class="col-md-12">
		{{Form::label('order','order')}}
		{{Form::number('order',null,['class' => 'form-control'])}}
	</div>

	<div class="col-md-12">
		{{Form::label('vCpu','vCpu')}}
		{{Form::text('vCpu',null,['class' => 'form-control'])}}
	</div>

	<div class="col-md-12">
		{{Form::label('ram','ram')}}
		{{Form::text('ram',null,['class' => 'form-control'])}}
	</div>

	<div class="col-md-12">
		{{Form::label('disk','disk')}}
		{{Form::text('disk',null,['class' => 'form-control'])}}
	</div>

	<div class="col-md-12">
		{{Form::label('transfer_limit','transfer_limit')}}
		{{Form::text('transfer_limit',null,['class' => 'form-control'])}}
	</div>


	<div class="col-md-12">
		{{Form::label('linux_price_per_month','linux_price_per_month')}}
		{{Form::text('linux_price_per_month',null,['class' => 'form-control'])}}
	</div>
	<div class="col-md-12">
		{{Form::label('windows_price_per_month','windows_price_per_month')}}
		{{Form::text('windows_price_per_month',null,['class' => 'form-control'])}}
	</div>

	<div class="col-md-12">
		{{Form::label('linux_price_per_year','linux_price_per_year')}}
		{{Form::text('linux_price_per_year',null,['class' => 'form-control'])}}
	</div>
	<div class="col-md-12">
		{{Form::label('windows_price_per_year','windows_price_per_year')}}
		{{Form::text('windows_price_per_year',null,['class' => 'form-control'])}}
	</div>


	

</div>
<br><br>