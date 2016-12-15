@extends('backend.template.master')

@section('title', '報表 (活動)')
@section('pagetitle', '報表 (活動)')
@section('pagetitleright')
<a href="{{ action('Backend\ReportController@export') }}" class="btn btn-info">下載報表</a>
@stop

@section('body')
<div class="table-responsive">

	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>郵箱</th>
				<th>電話號碼</th>
				<th>建立日期</th>
			</tr>
		</thead>

		<tbody>
			@foreach( $records as $record )
			<tr>
				<td>{{ $record->id }}</td>
				<td>{{ $record->email }}</td>
				<td>{{ $record->phone }}</td>
				<td>{{ $record->created_at }}</td>
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