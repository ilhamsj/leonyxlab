<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'collection' => User::all()
        ]);
    }

    public function data_user()
    {
        $users = User::all();
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'"><i class="fas fa-edit"></i></a>';
            })
            ->removeColumn('password')
            ->make(true);
    }
}
