@extends('layout')

@section('title')Добавление нового ученика@endsection

@section('main_content')
<div class="container">
    <div class="create-post">
        <h4>Добавить нового обучающегося</h4>       
        <form action="" method="post">
        @csrf
            <input type="string" class="form-control" placeholder="Введите фамилию" name="fam">
            <input type="string" class="form-control" placeholder="Введите имя" name="name">
            <input type="string" class="form-control" placeholder="Введите отчество" name="oth">
            <input type="string" class="form-control" placeholder="Введите дату рождения" name="dr">
            <input type="double" class="form-control" placeholder="Введите адрес" name="adr">
            <input type="string" class="form-control" placeholder="Введите номер телефона" name="nom">
            <input type="string" class="form-control" placeholder="Введите класс" name="klas">
            <input type="string" class="form-control" placeholder="Введите балл учащегося" name="ball">
            <input type="string" class="form-control" placeholder="Введите Срок обучения" name="srok">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-success">Добавить</button>
                </div>
        </form>
    </div>
</div>
@endsection