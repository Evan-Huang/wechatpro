@extends('backend.template.master')

@section('title', '系統用戶 - 編輯')
@section('pagetitle', '系統用戶 - 編輯')
@section('pagetitleright')
<a href="{!! URL::previous() !!}" class="btn btn-warning">取消</a>
@stop

@section('body')

@if( count($errors) > 0 )
<div class="alert alert-danger text-center"><strong>錯誤</strong> 請檢查欄位</div>
@endif

@if( Session::get('success') )
<div class="alert alert-success text-center"><strong>儲存成功!</strong></div>
@endif

{!! Form::open(['url' => action('Backend\UserController@update', [$record->id]), 'method' => 'put']) !!}

<div class="row">

	<div class="col-xs-12 col-sm-12">
		<h5>用戶名稱</h5>
		{!! Form::text('name', $record->name, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
		{!! $errors->first('name', '<p class="bg-danger">:message</p>') !!}
	</div>

	<div class="col-xs-12">
		<hr>
	</div>

	<div class="col-xs-12 col-sm-12">
		<h5>電郵地址</h5>
		{!! Form::text('email', $record->email, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
		{!! $errors->first('email', '<p class="bg-danger">:message</p>') !!}
	</div>

	<div class="col-xs-12">
		<hr>
	</div>

	<div class="col-xs-12 col-sm-12">
		<h5>更改密碼</h5>
		{!! Form::text('password', '', ['class' => 'form-control', 'autocomplete' => 'off']) !!}
		{!! $errors->first('password', '<p class="bg-danger">:message</p>') !!}
	</div>

	<div class="col-xs-12">
		<hr>
	</div>

	<div class="col-xs-12">
		<button type="submit" class="btn btn-info btn-block">儲存變更</button>
	</div>

</div>
{!! Form::close() !!}

@stop


@section('js')

@stop