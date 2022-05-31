<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Forecast;
use App\Models\Pattern;
use App\Models\Course;




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

    public function store(Request $request) {
        
        $forecast = new Forecast();
        $forecast->race = $request->race;
        $forecast->stadium = $request->stadium;
        $forecast->comment = $request->comment;
        $forecast->user_id =auth()->user()->id;
        $forecast->save();


        $course = new Course();
        $course->forecast_id = $forecast->id;
        $course->course1 = $request->course1;
        $course->course2 = $request->course2;
        $course->course3 = $request->course3;
        $course->course4 = $request->course4;
        $course->course5 = $request->course5;
        $course->course6 = $request->course6;
        $course->timestamps = false;
        $course->save();
        
        
        $pattern = new Pattern();
        $pattern->forecast_id = $forecast->id;
        //$pattern->pattern_num = $request->pattern_num;
        //$pattern->first = $request->first;
        //$pattern->second = $request->second;
        //$pattern->third = $request->third;
        $pattern->timestamps = false;
        $pattern->save();


        return redirect("/browse");

}

}