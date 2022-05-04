@extends('layout')

@section('title')Таблица учителя@endsection

@section('main_content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">Отчество</th>
      <th scope="col">Дата рождения</th>
      <th scope="col">Должность</th>
      <th scope="col">Зарплата</th>
      <th scope="col">Номер телефона</th>
      <th scope="col">Стаж</th>
      <th scope="col">Адрес</th>
      <th><a href="/CreateTeacher" target="_self" class="nav-link text-light"><i class="fas fa-pen"></i> Добавить</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach($post as $post) 		
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->Фамилия}}</td>
      <td>{{$post->Имя}}</td>
      <td>{{$post->Отчество}}</td>
      <td>{{$post->Дата_рождения}}</td>
      <td>{{$post->Должность}}</td>
      <td>{{$post->Зарплата}}</td>
      <td>{{$post->Номер_телефона}}</td> 
      <td>{{$post->Стаж}}</td>
      <td>{{$post->Адрес}}</td>
        <td>
          <form action='delete/{{ $post->id }}'>
            <input type="submit" value="Удалить" class="btn btn-danger btn-sm" />
          </form>
        </td>       
    </tr>
    @endforeach
  </tbody>
</table>

@endsection