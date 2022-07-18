<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class MailController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return view('admin.mails.create');
    }
    public function store(Request $request)
    {
        $this->store($request->validated());
        $request->session()->put('key', 'value');
    }

    public function show($id)
    {
        $value = $request->session()->get('key');
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }  
    public function getSession(){
        $data = Session::all();
        dd($data);
    }
    public function setSession(){

    } 
}
