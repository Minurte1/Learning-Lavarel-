

@section('title')
Home
@endsection
@extends('layouts.app')

{{-- @extends('layouts.header') --}}
@section('content')
  <h1>Trang chủ</h1>
  <p>Đây là nội dung trang chủ.</p>
@endsection

@section('main')
<div class="row">
    @foreach ($articles as $article)
    

    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src={{ $article->hinhanh }}class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><p>{{ $article->tieude }}</p></h5>

              <a href="#" class="btn btn-primary"><p>{{ $article->ten_bhat }}</p></a>
            </div>
          </div>
    </div>
    @endforeach
    

@endsection
