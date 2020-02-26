@extends('templates.header')
@extends('templates.sidebar')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div class="mg-xl-b-15"><h4 class="mg-b-0 tx-spacing--1">Foto Lembaga</h4></div>
      <div class="mg-xl-b-15"><a class="btn btn-success" href="#">Unggah Foto</a></div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div class="row">
      @foreach ($foto as $f)
      <div class="col-md-3 mb-4"><img src="{{asset('images/'.$f->path_akta_notaris)}}" width="170" height="170" class="rounded mx-auto d-block img-thumbnail"></div>
      @endforeach
      </div>
    </div>

  </div>
</div>
@endsection