@extends('shablon')
@section('content')
<h1>Create new Product</h1>
	{!! Form::model($product,['method' => 'PATCH', 'action' => ['AgriproductsController@update', $product->id]]) !!}
	
	@include('form',['submit_button'=>'Update'])

		
	{!! Form::close() !!}

@include('errors.validation_error')

@stop