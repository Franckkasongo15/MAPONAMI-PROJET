<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function create(){
        return view('user.register');
    }

    public function store() {

        Excel::import(new UsersImport, request()->file('file'));

        return redirect()->back()->with('success', 'Le fichier Excel a été importé avec succès.');
    }

}
