@if( isset( $noInclude ) && $noInclude == true )
@extends('masters.index')
@endif

@section('breadcrumbs')
<li>Dashboard</li>
@stop

@section('content')
	page content
@stop