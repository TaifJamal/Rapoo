@extends('site.master')
@section('titel','Project |'.env('APP_NAME'))
@section('content')

@include('site.hero',['name'=>'project','text'=>'Creative It project'])

@include('site.part.proces')
@include('site.part.project')

@stop
