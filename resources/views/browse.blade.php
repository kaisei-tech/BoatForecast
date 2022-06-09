@extends('layouts.browse')

@section('content')
<body>
<div style="background-image: url('../img/boat.png'); background-size: cover;">   
    {{-- ヘッダー部分 --}}
    <div class="header">
        <div class="logo h1">
            <h1 class="logo-text fw-bold">【Ｍｙ予想 view】</h1>
        </div>
        <div class="header-btn">
            <button type="button" class="btn btn-success  fw-bold " onclick="location.href='/index'">予想一覧へ</button>     
            <button type="button" class="btn btn-success  fw-bold " onclick="location.href='/create'">Ｍｙ予想へ</button>
        </div>
    </div>
    {{-- ここからメイン部分 --}}
    <div class="main">
        {{-- メイン部分左側　進入予想　フォーカス --}}
        <div class="left col-6">
                <div class=" h2 border-bottom fw-bold entry-title">進入予想</div>
                <div class="entry fw-bold">
                    <div class="entry-cource fw-bold h3">1コース</div> 
                    <input id="entry-boat" type="text"value="{{ $courses->course1 }}" readonly >号艇                
                    <div class="entry-cource fw-bold h3">2コース</div> 
                    <input id="entry-boat" type="text"value="{{ $courses->course2 }}" readonly>号艇
                    <div class="entry-cource fw-bold h3">3コース</div> 
                    <input id="entry-boat" type="text"value="{{ $courses->course3 }}" readonly>号艇
                    <div class="entry-cource fw-bold h3">4コース</div> 
                    <input id="entry-boat" type="text" value="{{ $courses->course4 }}"readonly>号艇
                    <div class="entry-cource fw-bold h3">5コース</div> 
                    <input id="entry-boat" type="text" value="{{ $courses->course5 }}"readonly>号艇
                    <div class="entry-cource fw-bold h3">6コース</div> 
                    <input id="entry-boat" type="text" value="{{ $courses->course6 }}"readonly>号艇
                </div>
                <div class="race">
                    <input id="race-name" type="text" value="{{ $forecasts->stadium }}"readonly >
                    <input id="race-round" type="text" value="{{ $forecasts->race }}"readonly><span fw-bold>R</span>
                </div>
                
                <div class=" form-floating">
                    <textarea class="forecast-pattern " style="height: 480px" cols="43" rows="13"readonly>{{$pattern}}</textarea>
                </div>
        </div>
        {{-- メイン部分右側　コメント --}}
        <div class="right col-5">
            <div class="comment">
                <div class="comment-logo h2  fw-bold">コメント</div>
                <textarea name="comment" id="comment" cols="41" rows="16" class="form-control"readonly>{{ $forecasts->comment }}</textarea>
                <p></p>
            </div>    
        </div>
        
    </div>
</div>     
</body>





@endsection