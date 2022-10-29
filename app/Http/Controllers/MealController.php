<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $listMeal = [
            ['code' => 'M0001', 'name' => 'Nasi Goreng'],
            ['code' => 'M0002', 'name' => 'Mie Goreng'],
            ['code' => 'M0003', 'name' => 'Kwetiaw Goreng'],
            ['code' => 'M0004', 'name' => 'Bihun Goreng']
        ];
        return view('meal', compact('listMeal'));
    }

    public function detail($code, $name)
    {
        $detail = ['code' => $code, 'name' => $name];
        return view('meal_detail', compact('detail'));
    }
}
