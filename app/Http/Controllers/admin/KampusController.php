<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kampus'
        ];

        return view('admin.kampus.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kampus'
        ];

        return view('admin.kampus.create', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Kampus'
        ];

        return view('admin.kampus.update', $data);
    }

    public function show()
    {
        $data = [
            'title' => 'Detail Kampus'
        ];

        return view('admin.kampus.detail', $data);
    }
}
