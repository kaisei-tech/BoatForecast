<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Forecast;
use App\Models\Pattern;
use App\Models\Course;
use Illuminate\Support\Arr;

class ForecastController extends Controller
{

    //forecastテーブルと認証済みユーザーのデータを取得し予想一覧ページにデータを渡す    
    public function index() {

        $forecasts = Forecast::all();
        $user = auth()->user();
        return view('index',compact('forecasts','user'));

    }

    //予想一覧ページからidを受け取るー＞それぞれのモデルのidに紐づいた情報を取得し予想編集ページにデータを渡す
    public function edit($id)
{
    $forecasts = Forecast::find($id);
    $courses = $forecasts->course;
    $patterns = $forecasts->patterns;
    $array_patterns1 = [[],[],[]];
    $array_patterns2 = [[],[],[]];
    foreach($patterns as $pattern) {
        if ($pattern->pattern_num == "1") {
            if(!in_array($pattern->first,$array_patterns1[0])) {
                array_push($array_patterns1[0], $pattern->first);
                
            }

            if (!in_array($pattern->second,$array_patterns1[1])) {
                array_push($array_patterns1[1], $pattern->second);
            }
            if (!in_array($pattern->third,$array_patterns1[2])) {
                array_push($array_patterns1[2], $pattern->third);
            }
            
        }
        else if ($pattern->pattern_num == "2") {
            
            if(!in_array($pattern->first,$array_patterns2[0])) {
                array_push($array_patterns2[0], $pattern->first);
                
            }

            if (!in_array($pattern->second,$array_patterns2[1])) {
                array_push($array_patterns2[1], $pattern->second);
            }
            if (!in_array($pattern->third,$array_patterns2[2])) {
                array_push($array_patterns2[2], $pattern->third);
            }
            
        }
    }

        //dd($array_patterns1);
    //dd(in_array("2",$array_patterns1[1]));
    return view('edit', ['forecasts' => $forecasts,'courses' => $courses, 'array_patterns1'=> $array_patterns1,'array_patterns2'=> $array_patterns2]); 
}


    //予想編集モードで更新された内容を保存ー＞my予想viewページにデータを渡す
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
        


        $forecasts->patterns()->delete();
        $first_list = $request->first;
        $second_list = $request->second;
        $third_list = $request->third;
        
        foreach ((array)$first_list as $first) {
            foreach ((array)$second_list as $second) {
                foreach ((array)$third_list as $third) {
                    $patterns = new Pattern();
                    $patterns->forecast_id = $forecasts->id;
                    $patterns->pattern_num = $request->pattern_num[0];
                    $patterns->first = $first;
                    $patterns->second = $second;
                    $patterns->third = $third;
                    $patterns->timestamps = false;
                    $patterns->save();
                }
            }
            
        } 
        
        $first_list = $request->first2;
        $second_list = $request->second2;
        $third_list = $request->third2;
        
        foreach ((array)$first_list as $first2) {
            foreach ((array)$second_list as $second2) {
                foreach ((array)$third_list as $third2) {
                    $patterns = new Pattern();
                    $patterns->forecast_id = $forecasts->id;
                    $patterns->pattern_num = $request->pattern_num[1];
                    $patterns->first = $first2;
                    $patterns->second = $second2;
                    $patterns->third = $third2;
                    $patterns->timestamps = false;
                    $patterns->save();
                }
            }
            
        }

        return redirect("/browse/" . $forecasts->id);


    }



    public function delete($id)
{
    Forecast::destroy($id);
    
    return redirect("/index");
}




    public function create() {
        return view('create');
    }


    
    public function browse($id) {

        $forecasts = Forecast::find($id);
        $courses = $forecasts->course;
        $patterns = $forecasts->patterns;
        
        $patternString = "";
        

        foreach ($patterns as $pattern) {
            $patternString .= "{$pattern->first}-{$pattern->second}-{$pattern->third}";
            $patternString .= "     ";
            

        }
        
        
        return view('browse', ['forecasts' => $forecasts,'courses' => $courses, 'pattern' => $patternString]); 
        
    }
    
    


    

    //my予想で入力した情報を保存ー＞my予想viewページにデータを渡す
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
        
        

        
        
        $first_list = $request->first;
        $second_list = $request->second;
        $third_list = $request->third;
        foreach ((array)$first_list as $first) {
            foreach ((array)$second_list as $second) {
                foreach ((array)$third_list as $third) {
                    $patterns = new Pattern();
                    $patterns->forecast_id = $forecasts->id;
                    $patterns->pattern_num = $request->pattern_num[0];
                    $patterns->first = $first;
                    $patterns->second = $second;
                    $patterns->third = $third;
                    $patterns->timestamps = false;
                    $patterns->save();
                }
            }
            
        } 
        
        
        $first_list = $request->first2;
        $second_list = $request->second2;
        $third_list = $request->third2;
        
        //dd ($first_list,$second_list,$third_list);
        foreach ((array)$first_list as $first2) {
            foreach ((array)$second_list as $second2) {
                foreach ((array)$third_list as $third2) {
                    $patterns = new Pattern();
                    $patterns->forecast_id = $forecasts->id;
                    $patterns->pattern_num = $request->pattern_num[1];
                    $patterns->first = $first2;
                    $patterns->second = $second2;
                    $patterns->third = $third2;
                    $patterns->timestamps = false;
                    $patterns->save();
                }
            }
            
        }





        return redirect("/browse/" . $forecasts->id);

}




}