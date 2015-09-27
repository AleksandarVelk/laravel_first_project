@extends('shablon')

@section('content')

<h1>List names</h1>

	@foreach($getProd as $item)
	<div class="form-group error">
  <div class="row">
		<li><a href="{{ action('AgriproductsController@show',[$item->id])}}">{{$item->title}}</a></li>


	</div></div>
	@endforeach	



@section('foother')

<p>Tuka ide java scripta</p>

@stop