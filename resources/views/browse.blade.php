@extends('layouts.browse')

@section('content')
<body>
<div style="background-image: url('img/boat.png'); background-size: cover;">   
    {{-- ヘッダー部分 --}}
    <div class="header">
        <div class="logo h1">
            <span class="logo-text fw-bold">【Ｍｙ予想 view】</span>
        </div>
        <div class="header-btn">
            <button class="btn fw-bold">予想一覧へ</button>       
            <button class="btn fw-bold" >Ｍｙ予想へ</button>
        </div>
    </div>
    {{-- ここからメイン部分 --}}
    <div class="main">
        {{-- メイン部分左側　進入予想　フォーカス --}}
        <div class="left col-6">
                <div class=" h2 border-bottom fw-bold entry-title">進入予想</div>
                <div class="entry fw-bold">
                    <div class="entry-cource fw-bold h3">1コース</div> 
                    <input id="entry-boat" type="text" placeholder="" />号艇                
                    <div class="entry-cource fw-bold h3">2コース</div> 
                    <input id="entry-boat" type="text" placeholder="" />号艇
                    <div class="entry-cource fw-bold h3">3コース</div> 
                    <input id="entry-boat" type="text" placeholder="" />号艇
                    <div class="entry-cource fw-bold h3">4コース</div> 
                    <input id="entry-boat" type="text" placeholder="" />号艇
                    <div class="entry-cource fw-bold h3">5コース</div> 
                    <input id="entry-boat" type="text" placeholder="" />号艇
                    <div class="entry-cource fw-bold h3">6コース</div> 
                    <input id="entry-boat" type="text" placeholder="" />号艇
                </div>
                <div class="race">
                    <input id="race-name" type="text" placeholder="会場名" />
                    <input id="race-round" type="text" placeholder="R" /><span fw-bold>R</span>
                </div>
                <div class="forecast form-floating">
                    <textarea class="form-control" style="height: 240px"></textarea>
                    <label for="floatingTextarea">パターン１</label>                    
                </div>
                <div class="forecast form-floating">
                    <textarea class="form-control" style="height: 240px"></textarea>
                    <label for="floatingTextarea">パターン2</label>                    
                </div>
        </div>
        {{-- メイン部分右側　コメント --}}
        <div class="right col-5">
            <div class="comment">
                <div class="comment-logo h2  fw-bold">コメント</div>
                <textarea name="introduction" id="introduction" cols="41" rows="28" class="form-control"></textarea>
                <p></p>
            </div>    
        </div>
        
    </div>
</div>     
</body>





@endsection