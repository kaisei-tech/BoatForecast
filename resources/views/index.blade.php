@extends('layouts.list')

@section('content')

<div class="header">
  <div class="logo">
      <h1 class="h1 logo-text fw-bold ">【予想一覧】</h1>
  </div>
  <div class="header-btn">
      <button type=“button” class="btn btn-success  fw-bold " onclick="location.href='/create'">Ｍｙ予想へ</button>
      <button type=“button” class="btn btn-success  fw-bold "  href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</button><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
  </div>
</div>

<table class="table  table-striped  table-bordered table-hover ">
  <thead>
    <tr class="text-center">
      <th>ID</th>
      <th>日付</th>
      <th>会場名</th>
      <th>R</th>      
    </tr>
  </thead>
  <tbody>
    {{-- @foreach () --}}
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><button type=“button” class="btn btn-success  fw-bold " onclick="location.href='/edit'">編集</button></td>
    </tr>
    {{-- @endforeach --}}
  </tbody>
</table>



@endsection