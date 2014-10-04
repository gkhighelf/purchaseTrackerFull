@extends('masters.index')

@section('breadcrumbs')
<li>Dashboard</li>
@stop

@section('content')
	{{ $index  }}
	{{ $create }}
@stop