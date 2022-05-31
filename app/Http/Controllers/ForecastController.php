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

        $forecasts = Forecast::all();
        $user = auth()->user();
        return view('index',compact('forecasts','user'));

    }


    public function edit($id)
{
    $forecasts = Forecast::find($id);
    $courses = Course::find($id);
    return view('edit', ['forecasts' => $forecasts,'courses' => $courses]); 
}

    public function update(Request $request) {

        $forecasts = Forecast::find($request->id);
        $forecasts->race = $request->race;
        $forecasts->stadium = $request->stadium;
        $forecasts->comment = $request->comment;
        $forecasts->user_id =auth()->user()->id;
        $forecasts->save();


        $courses = $forecasts->course;
        $courses->forecast_id = $forecasts->id;
        $courses->course1 = $request->course1;
        $courses->course2 = $request->course2;
        $courses->course3 = $request->course3;
        $courses->course4 = $request->course4;
        $courses->course5 = $request->course5;
        $courses->course6 = $request->course6;
        $courses->timestamps = false;
        $courses->save();
        
        
        // $patterns = Pattern::find($id);
        // $patterns->forecast_id = $forecasts->id;
        //$patterns->pattern_num = $request->pattern_num;
        //$patterns->first = $request->first;
        //$patterns->second = $request->second;
        //$patterns->third = $request->third;
        // $patterns->timestamps = false;
        // $patterns->save();


        return view("/browse_update",['forecasts' => $forecasts,'courses' => $courses]);


    }



    public function delete($id)
{
    Forecast::destroy($id);
    
    return redirect("/index");
}




    public function create() {
        return view('create');
    }


    public function browse() {
        return view('browse');
    }
    
    


    public function browse_update() {
        return view('browse_update');
    }



    public function store(Request $request) {
        
        $forecasts = new Forecast();
        $forecasts->race = $request->race;
        $forecasts->stadium = $request->stadium;
        $forecasts->comment = $request->comment;
        $forecasts->user_id =auth()->user()->id;
        $forecasts->save();


        $courses = new Course();
        $courses->forecast_id = $forecasts->id;
        $courses->course1 = $request->course1;
        $courses->course2 = $request->course2;
        $courses->course3 = $request->course3;
        $courses->course4 = $request->course4;
        $courses->course5 = $request->course5;
        $courses->course6 = $request->course6;
        $courses->timestamps = false;
        $courses->save();
        
        
        $patterns = new Pattern();
        $patterns->forecast_id = $forecasts->id;
        //$patterns->pattern_num = $request->pattern_num;
        //$patterns->first = $request->first;
        //$patterns->second = $request->second;
        //$patterns->third = $request->third;
        $patterns->timestamps = false;
        $patterns->save();




        return view("/browse",['forecasts' => $forecasts,'courses' => $courses]);

}




}