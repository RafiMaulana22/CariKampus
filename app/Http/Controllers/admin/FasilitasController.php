<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Fasilitas'
        ];
        
        return view('admin.fasilitas.index', $data);
    }
}
