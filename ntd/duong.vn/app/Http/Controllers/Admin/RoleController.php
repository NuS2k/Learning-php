<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleRequest;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index');
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(RoleRequest $request)
    {
        $this->store($request->validated());
    }
}

