<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
    public function index()
    {   
        // $allSessions = session()->all();
        // dd($allSessions);
        return view('admin.users.index');
        return view('admin.user.index', [
            'users' => Session::get('user'),
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
        $this->store($request->validated());
        $input = $request->validated();
        $collection = collect($input);
        Session::push('user', $collection);
        return view('admin.user.index');
    }
}   