@extends('shablon')
@section('content')
<h1>Create new Product</h1>
	{!! Form::open(['url' => 'homepage']) !!}
	
	@include('form',['submit_button'=>'Create'])


		
	{!! Form::close() !!}

@include('errors.validation_error')

@stop