@extends('layouts.create')

@section('content')
<body>
<div style="background-image: url('img/boat.png');  background-size: cover;">    
    {{-- ヘッダー部分 --}}
    <div class="header">
        <div class="logo h1">
            <span class="logo-text fw-bold">【Ｍｙ予想】</span>
        </div>
        <div class="header-btn">
            <button class="btn fw-bold">予想一覧へ</button>       
            <button class="btn fw-bold" >予想を作成する</button>
        </div>
    </div>
    {{-- ここからメイン部分 --}}
    <div class="main">
    {{-- メイン部分左側 着順 会場 R 入力コンテンツ --}}
        <div class="left col-4">
            <div class="race">
                <input id="race-name" type="text" placeholder="会場名" />
                <input id="race-round" type="text" placeholder="R" /><span fw-bold>R</span>
            </div>
            <div class="pattern fw-bold">
                <div class="pattern-item">
                    <div class="pattern-item-head border-bottom">
                        <span claas="pattern-item-head-name">パターン1</span><button class="btn btn-outline-warning">追加</button>
                    </div>    
                    <div class="pattern-item-input">
                        <div class="rank">1着</div>
                        <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-light" for="btncheck1">1</label>

                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                            <label class="btn btn-outline-dark" for="btncheck2">2</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                            <label class="btn btn-outline-danger" for="btncheck3">3</label>

                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck4">4</label>

                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck5">5</label>

                            <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                            <label class="btn btn-outline-success" for="btncheck6">6</label>
                        </div>
                        
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">2着</div>
                        <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                            <label class="btn btn-outline-light" for="btncheck7">1</label>

                            <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                            <label class="btn btn-outline-dark" for="btncheck8">2</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                            <label class="btn btn-outline-danger" for="btncheck9">3</label>

                            <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck10">4</label>

                            <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck11">5</label>

                            <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off">
                            <label class="btn btn-outline-success" for="btncheck12">6</label>
                        </div>
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">3着</div>
                        <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">
                            <label class="btn btn-outline-light" for="btncheck13">1</label>

                            <input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off">
                            <label class="btn btn-outline-dark" for="btncheck14">2</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off">
                            <label class="btn btn-outline-danger" for="btncheck15">3</label>

                            <input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck16">4</label>

                            <input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck17">5</label>

                            <input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off">
                            <label class="btn btn-outline-success" for="btncheck18">6</label>
                        </div>
                    
                    </div>
                    <div class="pattern-item-head border-bottom">
                        <span claas="pattern-item-head-name">パターン2</span><button class="btn btn-outline-warning">追加</button>
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">1着</div>
                        <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off">
                            <label class="btn btn-outline-light" for="btncheck19">1</label>

                            <input type="checkbox" class="btn-check" id="btncheck20" autocomplete="off">
                            <label class="btn btn-outline-dark" for="btncheck20">2</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck21" autocomplete="off">
                            <label class="btn btn-outline-danger" for="btncheck21">3</label>

                            <input type="checkbox" class="btn-check" id="btncheck22" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck22">4</label>

                            <input type="checkbox" class="btn-check" id="btncheck23" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck23">5</label>

                            <input type="checkbox" class="btn-check" id="btncheck24" autocomplete="off">
                            <label class="btn btn-outline-success" for="btncheck24">6</label>
                        </div>
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">2着</div>
                        <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck25" autocomplete="off">
                            <label class="btn btn-outline-light" for="btncheck25">1</label>

                            <input type="checkbox" class="btn-check" id="btncheck26" autocomplete="off">
                            <label class="btn btn-outline-dark" for="btncheck26">2</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck27" autocomplete="off">
                            <label class="btn btn-outline-danger" for="btncheck27">3</label>

                            <input type="checkbox" class="btn-check" id="btncheck28" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck28">4</label>

                            <input type="checkbox" class="btn-check" id="btncheck29" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck29">5</label>

                            <input type="checkbox" class="btn-check" id="btncheck30" autocomplete="off">
                            <label class="btn btn-outline-success" for="btncheck30">6</label>
                        </div>            
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">3着</div>
                        <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck31" autocomplete="off">
                            <label class="btn btn-outline-light" for="btncheck31">1</label>

                            <input type="checkbox" class="btn-check" id="btncheck32" autocomplete="off">
                            <label class="btn btn-outline-dark" for="btncheck32">2</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck33" autocomplete="off">
                            <label class="btn btn-outline-danger" for="btncheck33">3</label>

                            <input type="checkbox" class="btn-check" id="btncheck34" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck34">4</label>

                            <input type="checkbox" class="btn-check" id="btncheck35" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck35">5</label>

                            <input type="checkbox" class="btn-check" id="btncheck36" autocomplete="off">
                            <label class="btn btn-outline-success" for="btncheck36">6</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- メイン部分右側 進入予想 コメント欄--}}
        <div class="right col-8">
            <div class=" h2 border-bottom fw-bold">進入予想</div>
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
            <div class="comment">
                <div class="comment-logo h2  fw-bold">コメント</div>
                <textarea name="introduction" id="introduction" cols="67" rows="22"placeholder="予想コメントを書いてください" class="form-control"></textarea>
                <p class="help-block">※1100文字以内で書いてください</p>
            </div>    
        </div>
    </div>
</div>     
</body>





@endsection