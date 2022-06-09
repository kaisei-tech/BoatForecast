@extends('layouts.list')

@section('content')

<div class="header">
  <div class="logo">
      <h1 class="h1 logo-text fw-bold text-white ">【予想一覧】</h1>
  </div>
  <div class="header-btn">
      <button type=“button” class="btn btn-success  fw-bold " onclick="location.href='/create'">Ｍｙ予想へ</button>
      <button type=“button” class="btn btn-success  fw-bold "  href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</button><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
  </div>
</div>

<table class="table  text-white table-bordered table-hover ">
  <thead>
    <tr class="text-center">
      <th>作成者</th>
      <th>日付</th>
      <th>会場名</th>
      <th>R</th>      
    </tr>
  </thead>
  <tbody class="h3 text-center fw-bold ">
    @foreach ($forecasts as $forecast)
    <tr>
      <td>{{$forecast->user->name}}</td>
      <td>{{$forecast->created_at}}</td>
      <td>{{$forecast->stadium}}</td>
      <td>{{$forecast->race}}</td>
      <td class="edit-btn"><button type="button" class="btn  btn-success  fw-bold " onclick="location.href='/edit/{{ $forecast->id }}'">編集</button></td>     
      <form method="POST" action="{{ route('delete',$forecast->id) }}" onSubmit="return checkdelete()">
      @csrf  
      <td class="edit-btn"><button type="submit" value="削除" class="btn  btn-danger  fw-bold " onclick=>削除</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<script>
function checkdelete() {
      if (window.confirm("削除してよろしいですか？")) {
        return true;        
      } else {
        return false;
      }

}



</script>


@endsection