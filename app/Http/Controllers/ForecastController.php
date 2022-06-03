<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\Hankaku;
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
    $forecast = Forecast::find($id);
    $course = $forecast->course;
    $patterns = $forecast->patterns;
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
    return view('edit', ['forecasts' => $forecast,'courses' => $course, 'array_patterns1'=> $array_patterns1,'array_patterns2'=> $array_patterns2]); 
}


    //予想編集モードで更新された内容を保存ー＞my予想viewページにデータを渡す
    public function update(Request $request) {


        $request->validate([

            'stadium'     => 'required',
            'race'        => new Hankaku,
            'pattern_num' => 'required',
            'first'       => 'required',
            'second'      => 'required',
            'third'       => 'required',
            'course1'     => new Hankaku,
            'course2'     => new Hankaku,
            'course3'     => new Hankaku,
            'course4'     => new Hankaku,
            'course5'     => new Hankaku,
            'course6'     => new Hankaku,
            'comment'     => 'required'
            
            
        ]);

        $forecast = Forecast::find($request->id);
        $forecast->race = $request->race;
        $forecast->stadium = $request->stadium;
        $forecast->comment = $request->comment;
        $forecast->user_id =auth()->user()->id;
        $forecast->save();


        $course = $forecast->course;
        $course->forecast_id = $forecast->id;
        $course->course1 = $request->course1;
        $course->course2 = $request->course2;
        $course->course3 = $request->course3;
        $course->course4 = $request->course4;
        $course->course5 = $request->course5;
        $course->course6 = $request->course6;
        $course->timestamps = false;
        $course->save();
        


        $forecast->patterns()->delete();
        $first_list = $request->first;
        $second_list = $request->second;
        $third_list = $request->third;
        
        foreach ((array)$first_list as $first) {
            foreach ((array)$second_list as $second) {
                foreach ((array)$third_list as $third) {
                    if(($first === $second) || ($first === $third) || ($second === $third)) continue;
                    
                    $pattern = new Pattern();
                    $pattern->forecast_id = $forecast->id;
                    $pattern->pattern_num = $request->pattern_num[0];
                    $pattern->first = $first;
                    $pattern->second = $second;
                    $pattern->third = $third;
                    $pattern->timestamps = false;
                    $pattern->save();
                }
            }
            
        } 
        
        $first_list = $request->first2;
        $second_list = $request->second2;
        $third_list = $request->third2;
        
        foreach ((array)$first_list as $first2) {
            foreach ((array)$second_list as $second2) {
                foreach ((array)$third_list as $third2) {
                    if(($first2 === $second2) || ($first2 === $third2) || ($second2 === $third2)) continue;
                    
                    $pattern = new Pattern();
                    $pattern->forecast_id = $forecast->id;
                    $pattern->pattern_num = $request->pattern_num[1];
                    $pattern->first = $first2;
                    $pattern->second = $second2;
                    $pattern->third = $third2;
                    $pattern->timestamps = false;
                    $pattern->save();
                }
            }
            
        }

        return redirect("/browse/" . $forecast->id);


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

        $forecast = Forecast::find($id);
        $course = $forecast->course;
        $patterns = $forecast->patterns;
        
        $patternString = "";
        

        foreach ($patterns as $pattern) {
            $patternString .= "{$pattern->first}-{$pattern->second}-{$pattern->third}";
            $patternString .= "     ";
            

        }
        
        
        return view('browse', ['forecasts' => $forecast,'courses' => $course, 'pattern' => $patternString]); 
        
    }
    
    


    

    //my予想で入力した情報を保存ー＞my予想viewページにデータを渡す
    public function store(Request $request) {

        $request->validate([

            'stadium'     => 'required',
            'race'        => new Hankaku,
            'pattern_num' => 'required',
            'first'       => 'required',
            'second'      => 'required',
            'third'       => 'required',
            'course1'     => new Hankaku,
            'course2'     => new Hankaku,
            'course3'     => new Hankaku,
            'course4'     => new Hankaku,
            'course5'     => new Hankaku,
            'course6'     => new Hankaku,
            'comment'     => 'required'
            
            
        ]);
        
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
        
        

        
        
        $first_list = $request->first;
        $second_list = $request->second;
        $third_list = $request->third;
        foreach ((array)$first_list as $first) {
            foreach ((array)$second_list as $second) {
                foreach ((array)$third_list as $third) {
                    if(($first === $second) || ($first === $third) || ($second === $third)) continue;
                    
                    $pattern = new Pattern();
                    $pattern->forecast_id = $forecast->id;
                    $pattern->pattern_num = $request->pattern_num[0];
                    $pattern->first = $first;
                    $pattern->second = $second;
                    $pattern->third = $third;
                    $pattern->timestamps = false;
                    $pattern->save();
                
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
                    if(($first2 === $second2) || ($first2 === $third2) || ($second2 === $third2)) continue;
                    
                    $pattern = new Pattern();
                    $pattern->forecast_id = $forecast->id;
                    $pattern->pattern_num = $request->pattern_num[1];
                    $pattern->first = $first2;
                    $pattern->second = $second2;
                    $pattern->third = $third2;
                    $pattern->timestamps = false;
                    $pattern->save();
                }
            }
            
        }





        return redirect("/browse/" . $forecast->id);

}




}