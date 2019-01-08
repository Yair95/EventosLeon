

@section('content-header')
  <h1>
    Clintes
    <small>Agregar cliente</small>
  </h1>
@endsection
<form action="{{url('client')}}" method="post">
@extends('data_contact.create')
@section('form-continue')
@endsection
