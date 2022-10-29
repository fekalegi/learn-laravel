<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $listStudent = [
            ['code' => '411201176', 'name' => 'Koeman'],
            ['code' => '411201177', 'name' => 'Agus'],
            ['code' => '411201178', 'name' => 'Soleh'],
            ['code' => '411201179', 'name' => 'Asep']
        ];
        return view('student', compact('listStudent'));
    }

    public function detail($code, $name)
    {
        $detail = ['code' => $code, 'name' => $name];
        return view('student_detail', compact('detail'));
    }
}
