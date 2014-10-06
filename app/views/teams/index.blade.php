@extends('masters.tilesMenu')

@section('title')
	{{ $title or 'teams' }}
@stop

@section('content')
	{{ $content or '' }}
@stop