<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function about2()
    {
        $name = "Kanokporn Jeamthong";
        $date = "5 กรกฎาคม 2026";

        return view('about2', compact('name', 'date'));
    }

    public function blog2()
    {
        $blog2 = [
            [
                'title' => 'บทความที่ 1',
                'content' => 'เนื้อหาบทความที่ 1',
                'status' => true
            ],
            [
                'title' => 'บทความที่ 2',
                'content' => 'เนื้อหาบทความที่ 2',
                'status' => false
            ],
            [
                'title' => 'บทความที่ 3',
                'content' => 'เนื้อหาบทความที่ 3',
                'status' => true
            ],
            [
                'title' => 'บทความที่ 4',
                'content' => 'เนื้อหาบทความที่ 4',
                'status' => true
            ]
        ];

        return view('blog2', compact('blog2'));
    }

    public function form()
    {
        return view('form');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'serial_number' => 'required|min:6|max:20',
            'email' => 'required|email',
            'problem' => 'required|min:10',
            'priority' => 'required'
        ]);

        return redirect()->route('form')->with('success', 'ส่งข้อมูลเรียบร้อย');
    }
}