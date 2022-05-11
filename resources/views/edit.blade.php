@extends('layouts.create')

@section('content')
<body>
<div style="background-image: url('img/boat.png');  background-size: cover;">    
    {{-- ヘッダー部分 --}}
    <div class="header">
        <div class="logo h1">
            <span class="logo-text fw-bold">【Ｍｙ予想編集モード】</span>
        </div>
        <div class="header-btn">
            <button class="btn fw-bold">編集を完了する</button>       
            <button class="btn fw-bold" >予想を削除する</button>
        </div>
    </div>
    {{-- ここからメイン部分 --}}
    <div class="main">
    {{-- メイン部分左側 着順 会場 R 入力コンテンツ --}}
        <div class="left col-4">
            <div class="race">
                <input id="race-name" type="text" placeholder="会場名" />
                <input id="race-round" type="text" placeholder="R" />
            </div>
            <div class="pattern fw-bold">
                <div class="pattern-item">
                    <div class="pattern-item-head border-bottom">
                        <span claas="pattern-item-head-name">パターン1</span><button class="btn btn-outline-warning">追加</button>
                    </div>    
                    <div class="pattern-item-input">
                        <div class="rank">1着</div>
                        <ul class="pattern-checkbox-list">
                            <li>
                                <input type="checkbox">1
                            </li>
                            <li>
                                <input type="checkbox">2
                            </li>
                            <li>
                                <input type="checkbox">3
                            </li>
                            <li>
                                <input type="checkbox">4
                            </li>
                            <li>
                                <input type="checkbox">5
                            </li>
                            <li>
                                <input type="checkbox">6
                            </li>
                        </ul>
                        
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">2着</div>
                        <ul class="pattern-checkbox-list">
                            <li>
                                <input type="checkbox">1
                            </li>
                            <li>
                                <input type="checkbox">2
                            </li>
                            <li>
                                <input type="checkbox">3
                            </li>
                            <li>
                                <input type="checkbox">4
                            </li>
                            <li>
                                <input type="checkbox">5
                            </li>
                            <li>
                                <input type="checkbox">6
                            </li>
                        </ul>                    
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">3着</div>
                        <ul class="pattern-checkbox-list">
                            <li>
                                <input type="checkbox">1
                            </li>
                            <li>
                                <input type="checkbox">2
                            </li>
                            <li>
                                <input type="checkbox">3
                            </li>
                            <li>
                                <input type="checkbox">4
                            </li>
                            <li>
                                <input type="checkbox">5
                            </li>
                            <li>
                                <input type="checkbox">6
                            </li>
                        </ul>
                    
                    </div>
                    <div class="pattern-item-head border-bottom">
                        <span claas="pattern-item-head-name">パターン2</span><button class="btn btn-outline-warning">追加</button>
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">1着</div>
                        <ul class="pattern-checkbox-list">
                            <li>
                                <input type="checkbox">1
                            </li>
                            <li>
                                <input type="checkbox">2
                            </li>
                            <li>
                                <input type="checkbox">3
                            </li>
                            <li>
                                <input type="checkbox">4
                            </li>
                            <li>
                                <input type="checkbox">5
                            </li>
                            <li>
                                <input type="checkbox">6
                            </li>
                        </ul>
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">2着</div>
                        <ul class="pattern-checkbox-list">
                            <li>
                                <input type="checkbox">1
                            </li>
                            <li>
                                <input type="checkbox">2
                            </li>
                            <li>
                                <input type="checkbox">3
                            </li>
                            <li>
                                <input type="checkbox">4
                            </li>
                            <li>
                                <input type="checkbox">5
                            </li>
                            <li>
                                <input type="checkbox">6
                            </li>
                        </ul>                    
                    </div>
                    <div class="pattern-item-input">
                        <div class="rank">3着</div>
                        <ul class="pattern-checkbox-list">
                            <li>
                                <input type="checkbox">1
                            </li>
                            <li>
                                <input type="checkbox">2
                            </li>
                            <li>
                                <input type="checkbox">3
                            </li>
                            <li>
                                <input type="checkbox">4
                            </li>
                            <li>
                                <input type="checkbox">5
                            </li>
                            <li>
                                <input type="checkbox">6
                            </li>
                        </ul>                    
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