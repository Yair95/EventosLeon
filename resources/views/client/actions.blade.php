<a href="{{ route('client.show', $id) }}" class="btn btn-info btn-sm">
  <i class="fa fa-eye"></i></a>

<button class="btn btn-primary btn-sm"
  data-idclient="{{$id}}"
  data-nameclient="{{$name}}"
  data-lastnameclient="{{$lastname}}"
  data-phone1client="{{$phone1}}"
  data-phone2client="{{$phone2}}"
  data-emailclient="{{$email}}"
  data-prestigeclient="{{$prestige}}"
  data-commentsclient="{{$comments}}"
  data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>

<a href="{{ route('client.destroy', $id) }}" id="delete" onclick="add( {{ $id }} );" data-idclient="{{$id}}" class="btn btn-danger btn-sm">
  <i class="fa fa-trash"></i></a>

<!--
  <button type="button" onclick="add( {{ $id }} );" data-idclient="{{$id}}" id="delete" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>
-->
