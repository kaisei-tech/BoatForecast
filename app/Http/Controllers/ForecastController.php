<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;




class ForecastController extends Controller
{
    public function index() {

        return view('index');
    }


    public function edit() {

        return view('edit');
    }


    public function create() {
        return view('create');
    }


    public function browse() {
        return view('browse');
    }





}