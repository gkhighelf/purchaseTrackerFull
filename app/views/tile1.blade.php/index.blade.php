@extends('masters.tilesMenu')

@section('title')
	{{ $title or 'Stores' }}
@stop

@section('content')
	{{ $content or '' }}
@stop