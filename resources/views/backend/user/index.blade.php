@extends('backend.template.master')

@section('title', '系統用戶')
@section('pagetitle', '系統用戶')
@section('pagetitleright')
<a href="{{ action('Backend\UserController@create') }}" class="btn btn-info">建立</a>
@stop

@section('body')
<div class="table-responsive">

	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>名稱</th>
				<th>電郵地址</th>
				<th>建立日期</th>
				<th>管理</th>
			</tr>
		</thead>

		<tbody>
			@foreach( $records as $record )
			<tr>
				<td>{{ $record->id }}</td>
				<td>{{ $record->name }}</td>
				<td>{{ $record->email }}</td>
				<td>{{ $record->created_at }}</td>
				<td>
					<a href="{{ action('Backend\UserController@edit', [$record->id]) }}" class="btn btn-warning btn-xs">編輯</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>

{!! $records->render() !!}

@stop


@section('js')
<script>
$(function()
{

});
</script>
@stop