@extends('layout')

@section('title')Музыкальная школа@endsection

@section('main_content')

<div class='dashboard-app'>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='cards'>
                    <div class='card-header'>
                        <h1>Добро пожаловать в "Гармонию"</h1>
                    </div>
                    <div class='card-body'>
                        <p>Музыкальная школа "Гармония" основана в 2017 г. как альтернатива уже существующим музыкальным школам. Авторская методика и главная идея нашей школы заключается в том, чтобы дать людям возможность развиваться и играть именно ту музыку, которая им нравится,как сольно, так и в составе настоящих коллективов. Регулярно проходящие концерты повышают мотивацию учеников и помогают им быстрее достигать желаемых результатов.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cards {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #7751193a;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0);
    border-radius: 0;
}
</style>
@endsection