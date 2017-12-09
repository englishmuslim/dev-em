@extends('template/master')
@section('content')
  <div class="notfound">
    <h1 class="text-center not-found-header">404</h1>
    <h3 class="text-center not-found-caption">Not Found</h1>
    <center>
      <a class="not-found btn btn-flat" href="{{ url ('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Back to Home</a>
    </center>
  </div>
@stop
