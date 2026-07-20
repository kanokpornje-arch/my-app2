<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function blog2(){
        $blog2 = [
    [   'title' => 'บทความที่ 1',
        'content' => 'เนื้อหาบทความที่ 1', 
        'status' =>true
    ],

        ['title' => 'บทความที่ 2',
        'content' => 'เนื้อหาบทความที่ 2', 
        'status' =>false
    ],

        ['title' => 'บทความที่ 3',
        'content' => 'เนื้อหาบทความที่ 3', 
        'status' =>true
    ],
      ['title' => 'บทความที่ 4',
        'content' => 'เนื้อหาบทความที่ 4', 
        'status' =>true
    ]
];
    return view('blog2', compact ('blog2'));
    }
    function about2(){
        $name = "Kanokporn Jeamthong";
        $date = "5 กรกฎาคม 2026";
        return view('about2', compact('name','date'));   
    }
    function create()
    {
        return view('form');
    }
    function insert(Request $request)
    {
        $request->validate([
            'title' => 'required | max:50',
            'content' => 'required',
        ],[
            'title.required' => 'กรุณากรอกหัวข้อ',
            'title.max' => 'ห้ามเกิน 50 ตัวอักษร',
            'content.required' => 'กรุณากรอกเนื้อหา'
        ]);

    }
}
