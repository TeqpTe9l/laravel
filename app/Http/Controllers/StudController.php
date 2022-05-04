<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudRequest;
use Illuminate\Http\Request;
use App\Models\Stud;
use DB;

class StudController extends Controller
{
    public function Stud(){
        $post = DB::table('studs')->select('*')->get();
        return view('StudTable',compact('post'));
    }

    public function CreateStud(StudRequest $req){
        $tabl = new Stud();
        $tabl->Фамилия = $req->input('fam');
        $tabl->Имя = $req->input('name');
        $tabl->Отчество = $req->input('oth');
        $tabl->Дата_рождения = $req->input('dr');
        $tabl->Адрес = $req->input('adr');
        $tabl->Номер_телефона = $req->input('nom');
        $tabl->Класс = $req->input('klas');
        $tabl->Балл_учащегося = $req->input('ball');
        $tabl->Срок_обучения = $req->input('srok');

        $tabl->save();

        return redirect()->route('StudTable');      
    }

    public function destroy($id) {
        DB::delete('delete from studs where id = ?',[$id]);
        echo "Запись была удалена.<br/>";
        echo '<a href="/StudTable">Назад</a>';
     }
       
}
