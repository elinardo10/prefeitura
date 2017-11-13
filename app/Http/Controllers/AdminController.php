<?php

namespace prefeitura\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{
public function __construct(){
    
    $this->middleware('auth');
}

/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
public function index(){
    return view('admin.index');
}

public function listar(){
    return view('admin.listar');
}


public function novo(){
	
    return view('admin.create');
}
public function store(){
	
   
}

}