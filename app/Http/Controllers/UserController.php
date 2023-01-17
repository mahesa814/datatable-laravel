<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        $users = $this->table();
        dd($users);
        return view('welcome', [
            'users' => $users
        ]);
    }

    public function table()
    {
        $user = User::orderBy('name','ASC')->get();
        return DataTables::of($user)
            ->addIndexColumn()
            ->editColumn('name', function ($user) {
                return $user->name;
            })
            ->addColumn('opsi', function ($user) {
                return '<span class="text-info">Edit</span> | <span class="text-danger">Delet</span>';
            })
            ->rawColumns(['opsi'])
            ->make(true);

    }
}
