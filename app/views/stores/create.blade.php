@extends('masters.tilesMenu')

@section('title')
	{{ $id or 'createStore' }}
@stop

@section('content')
		{{ $content or 'content page' }}
@stop