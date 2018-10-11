<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Papel;

class AdminController extends Controller
{
    public function index()
    {   
        $usuarios = User::all()->count();
        $papeis = Papel::all()->count();
        return view('admin.index',compact('usuarios','papeis'));
    }
}
