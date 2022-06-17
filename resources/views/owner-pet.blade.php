@extends('layout')

@section('content')

  <h1>{{$result->first_name . ' ' . $result->surname}}</h1>


@endsection