@extends('layouts.list')

@section('content')

<h1><span class="fw-bold">【予想一覧】</span><br></h1>

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
      <td><a href="" class=" btn-lg">編集</a></td>
    </tr>
    {{-- @endforeach --}}
  </tbody>
</table>

<a href=""><strong>Ｍｙ予想ページへ</strong></a>
@endsection