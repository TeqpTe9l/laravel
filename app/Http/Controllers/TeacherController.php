<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use Illuminate\Http\Request;
use App\Models\Teacher;
use DB;

class TeacherController extends Controller
{
    public function Teacher(){
        $post = DB::table('teachers')->select('*')->get();
        return view('TeacherTable',compact('post'));
    }

    public function CreateTeacher(TeacherRequest $req){
        $tabl = new Teacher();
        $tabl->Фамилия = $req->input('fam');
        $tabl->Имя = $req->input('name');
        $tabl->Отчество = $req->input('oth');
        $tabl->Дата_рождения = $req->input('dr');
        $tabl->Должность = $req->input('dol');
        $tabl->Зарплата = $req->input('zp');
        $tabl->Номер_телефона = $req->input('nom');
        $tabl->Стаж = $req->input('sta');
        $tabl->Адрес= $req->input('adr');

        $tabl->save();

        return redirect()->route('TeacherTable');    
    }

    public function destroy($id) {
        DB::delete('delete from teachers where id = ?',[$id]);
     echo "Запись была удалена.<br/>";
     echo '<a href="/TeacherTable">Назад</a>';
     }
}
