<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Program Studi'
        ];

        return view('admin.prodi.index', $data);
    }
}
