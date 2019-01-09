@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Clintes
    <small>Agregar cliente</small>
  </h1>
</section>

<form action="{{url('client')}}" method="post">
  {{csrf_field()}}
@include('data_contact.create')
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
