@extends('layout')
@section('content')

<div>
<h5>Отправить сообщение администрации сайта</h5>
<form action="/website-feedback" method="POST" name="popForm" >
@csrf
  <div class="form-group">
    <label for="exampleInputName">Контактное лицо:</label>
    <input type="text" class="form-control" id="InputName"
    placeholder="Контактное лицо" name="name">
  </div>
  <div>

    <label for="exampleInputPhone">Телефон:</label>
    <input type="tel" class="form-control" id="InputPhone"
    placeholder="Телефон:"name="phone">
  </div>

<div>
    <label for="InputEmail1">E-mail:</label>
    <input type="email" class="form-control" id="InputEmail1"
    aria-describedby="emailHelp"
    placeholder="Enter email" name="email">
  </div>

  <div>
    <label for="popup_textarea">Сообщение:</label>
    <textarea class="form-control" id="popup_textarea" name="message"
    placeholder="Сообщение:" rows="4" cols='7'></textarea>
  </div>

  <div id="w-success"></div>

  <div>
  <input type="submit" class="btn btn-primary btn-web-feedback"  value="Отправить"></input>
</div>
</form>
</div>


@endsection
