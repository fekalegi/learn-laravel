<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $listItem = [
            ['code' => 'Item_1', 'name' => 'Item 1'],
            ['code' => 'Item_2', 'name' => 'Item 2'],
            ['code' => 'Item_3', 'name' => 'Item 3'],
            ['code' => 'Item_4', 'name' => 'Item 4']
        ];
        return view('item', compact('listItem'));
    }

    public function detail($code, $name)
    {
        $detail = ['code' => $code, 'name' => $name];
        return view('item_detail', compact('detail'));
    }
}
