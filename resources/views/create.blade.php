@extends('layouts.create')

@section('content')
<body>
<div style="background-image: url('../img/boat.png');  background-size: cover;">    
    {{-- ヘッダー部分 --}}
    <div class="header">
        <div class="logo h1">
            <h1 class="logo-text fw-bold ">【Ｍｙ予想】</h1>
        </div>
        <div class="header-btn">
            <button type="button" class="btn btn-success  fw-bold " onclick="location.href='/index'">予想一覧へ</button>
        </div>
    </div>
    {{-- ここからメイン部分 --}}
    <div class="main container">
    {{-- メイン部分左側 着順 会場 R 入力コンテンツ --}}
        <form method="POST" action="/browse">
            @csrf
            <div class="row">
                <div class="left col-4">
                    @if (count($errors) > 0)
                    <ul  class="alert alert-danger  " style="list-style: none;">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="race">
                        <input id="race-name" type="text" name="stadium"value="{{ old('stadium') }}" placeholder="会場名" />
                        <input id="race-round" type="text" name="race" value="{{ old('race') }}"placeholder="R" /><span fw-bold>R</span>
                    </div>
                    <div class="pattern fw-bold">
                        <div class="pattern-item">
                            <div class="pattern-item-head border-bottom">
                                <span claas="pattern-item-head-name">パターン1</span><input type="checkbox" name="pattern_num[0]"  class="input-pattern" value="1">
                            </div>    
                            <div class="pattern-item-input">
                                <div class="rank">1着</div>
                                <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" name="first[]" class="btn-check"  id="btncheck1"value="1" autocomplete="off">
                                    <label class="btn btn-outline-light" for="btncheck1">1</label>
                                    
                                    <input type="checkbox" name="first[]" class="btn-check" id="btncheck2" value="2" autocomplete="off">
                                    <label class="btn btn-outline-dark" for="btncheck2">2</label>
                                    
                                    <input type="checkbox" name="first[]"class="btn-check" id="btncheck3" value="3" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="btncheck3">3</label>

                                    <input type="checkbox" name="first[]" class="btn-check" id="btncheck4" value="4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck4">4</label>

                                    <input type="checkbox" name="first[]" class="btn-check" id="btncheck5" value="5" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btncheck5">5</label>

                                    <input type="checkbox" name="first[]" class="btn-check" id="btncheck6" value="6" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btncheck6">6</label>
                                </div>
                                
                            </div>
                            <div class="pattern-item-input">
                                <div class="rank">2着</div>
                                <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" name="second[]" class="btn-check" id="btncheck7" value="1" autocomplete="off">
                                    <label class="btn btn-outline-light" for="btncheck7">1</label>

                                    <input type="checkbox" name="second[]" class="btn-check" id="btncheck8" value="2" autocomplete="off">
                                    <label class="btn btn-outline-dark" for="btncheck8">2</label>
                                    
                                    <input type="checkbox" name="second[]" class="btn-check" id="btncheck9" value="3" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="btncheck9">3</label>

                                    <input type="checkbox" name="second[]" class="btn-check" id="btncheck10" value="4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck10">4</label>

                                    <input type="checkbox" name="second[]" class="btn-check" id="btncheck11" value="5" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btncheck11">5</label>

                                    <input type="checkbox" name="second[]" class="btn-check" id="btncheck12" value="6" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btncheck12">6</label>
                                </div>
                            </div>
                            <div class="pattern-item-input">
                                <div class="rank">3着</div>
                                <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" name="third[]" class="btn-check" id="btncheck13" value="1" autocomplete="off">
                                    <label class="btn btn-outline-light" for="btncheck13">1</label>

                                    <input type="checkbox" name="third[]" class="btn-check" id="btncheck14" value="2" autocomplete="off">
                                    <label class="btn btn-outline-dark" for="btncheck14">2</label>
                                    
                                    <input type="checkbox" name="third[]" class="btn-check" id="btncheck15" value="3" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="btncheck15">3</label>

                                    <input type="checkbox" name="third[]" class="btn-check" id="btncheck16" value="4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck16">4</label>

                                    <input type="checkbox" name="third[]" class="btn-check" id="btncheck17" value="5" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btncheck17">5</label>

                                    <input type="checkbox" name="third[]" class="btn-check" id="btncheck18" value="6" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btncheck18">6</label>
                                </div>
                            
                            </div>
                            <div class="pattern-item-head border-bottom">
                                <span claas="pattern-item-head-name">パターン2</span><input type="checkbox" name="pattern_num[1]"class="input-pattern" value="2">
                            </div>
                            <div class="pattern-item-input">
                                <div class="rank">1着</div>
                                <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" name="first2[]" class="btn-check" id="btncheck19" value="1" autocomplete="off">
                                    <label class="btn btn-outline-light" for="btncheck19">1</label>

                                    <input type="checkbox" name="first2[]" class="btn-check" id="btncheck20" value="2" autocomplete="off">
                                    <label class="btn btn-outline-dark" for="btncheck20">2</label>
                                    
                                    <input type="checkbox" name="first2[]" class="btn-check" id="btncheck21" value="3" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="btncheck21">3</label>

                                    <input type="checkbox" name="first2[]" class="btn-check" id="btncheck22" value="4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck22">4</label>

                                    <input type="checkbox" name="first2[]" class="btn-check" id="btncheck23" value="5" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btncheck23">5</label>

                                    <input type="checkbox" name="first2[]" class="btn-check" id="btncheck24" value="6" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btncheck24">6</label>
                                </div>
                            </div>
                            <div class="pattern-item-input">
                                <div class="rank">2着</div>
                                <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" name="second2[]" class="btn-check" id="btncheck25" value="1" autocomplete="off">
                                    <label class="btn btn-outline-light" for="btncheck25">1</label>

                                    <input type="checkbox" name="second2[]" class="btn-check" id="btncheck26" value="2" autocomplete="off">
                                    <label class="btn btn-outline-dark" for="btncheck26">2</label>
                                    
                                    <input type="checkbox" name="second2[]" class="btn-check" id="btncheck27" value="3" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="btncheck27">3</label>

                                    <input type="checkbox" name="second2[]" class="btn-check" id="btncheck28" value="4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck28">4</label>

                                    <input type="checkbox" name="second2[]" class="btn-check" id="btncheck29" value="5" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btncheck29">5</label>

                                    <input type="checkbox" name="second2[]" class="btn-check" id="btncheck30" value="6" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btncheck30">6</label>
                                </div>            
                            </div>
                            <div class="pattern-item-input">
                                <div class="rank">3着</div>
                                <div class="btn-group pattern-btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" name="third2[]" class="btn-check" id="btncheck31" value="1" autocomplete="off">
                                    <label class="btn btn-outline-light" for="btncheck31">1</label>

                                    <input type="checkbox" name="third2[]" class="btn-check" id="btncheck32" value="2" autocomplete="off">
                                    <label class="btn btn-outline-dark" for="btncheck32">2</label>
                                    
                                    <input type="checkbox" name="third2[]" class="btn-check" id="btncheck33" value="3" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="btncheck33">3</label>

                                    <input type="checkbox" name="third2[]" class="btn-check" id="btncheck34" value="4" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck34">4</label>

                                    <input type="checkbox" name="third2[]" class="btn-check" id="btncheck35" value="5" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="btncheck35">5</label>

                                    <input type="checkbox" name="third2[]" class="btn-check" id="btncheck36" value="6" autocomplete="off">
                                    <label class="btn btn-outline-success" for="btncheck36">6</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- メイン部分右側 進入予想 コメント欄--}}
                <div class="right col-8">
                    <div class=" h2 border-bottom fw-bold entry-title">進入予想</div>
                        <div class="entry fw-bold">
                            <div class="entry-cource fw-bold ">1コース</div> 
                            <input id="entry-boat" type="text" name="course1"value="{{ old('course1') }}" placeholder="" />号艇                
                            <div class="entry-cource fw-bold ">2コース</div> 
                            <input id="entry-boat" type="text" name="course2"value="{{ old('course2') }}" placeholder="" />号艇
                            <div class="entry-cource fw-bold ">3コース</div> 
                            <input id="entry-boat" type="text" name="course3" value="{{ old('course3') }}"placeholder="" />号艇
                            <div class="entry-cource fw-bold ">4コース</div> 
                            <input id="entry-boat" type="text" name="course4"value="{{ old('course4') }}" placeholder="" />号艇
                            <div class="entry-cource fw-bold ">5コース</div> 
                            <input id="entry-boat" type="text" name="course5"value="{{ old('course5') }}" placeholder="" />号艇
                            <div class="entry-cource fw-bold ">6コース</div> 
                            <input id="entry-boat" type="text" name="course6" value="{{ old('course6') }}" placeholder="" />号艇
                        </div>
                    <div class="comment">
                        <div class="comment-logo h2  fw-bold">コメント</div>
                        <textarea name="comment" id="forecastcomment" cols="67" rows="15"placeholder="予想コメントを書いてください" class="form-control">{{ old('comment') }}</textarea>
                        <p class="help-block">※1100文字以内で書いてください<button type="submit" name="send" class="btn btn-success  fw-bold create-btn " onclick="location.href='/browse'">予想を作成する</button></p>
                    </div>    
                </div>
            </div>
        </form>
    </div>
</div>     
</body>





@endsection