@extends('masters.tilesMenu')

@section('title')
	{{ $title or 'Welcome' }}
@stop

@section('content')
	{{ $content or '' }}
@stop