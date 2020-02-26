@extends('templates.header')
@extends('templates.sidebar')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
          <h4 class="mg-b-0 tx-spacing--1">Sarana Peralatan</h4>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div class="mg-xl-b-25"></div>
      <div class="mg-xl-b-5"><a class="btn btn-success" href="#">+Tambah Data</a></div>
    </div>

    <table class="table table-bordered table-hover">
  <thead class="text-center">
    <tr>
      <th scope="col" rowspan="2">No</th>
      <th scope="col" rowspan="2">Sarana Peralatan</th>
      <th scope="col" colspan="3">Kondisi</th>
      <th scope="col" rowspan="2">Aksi</th>
    </tr>
    <tr>
      <th>Baik</th>
      <th>Rusak Ringan</th>
      <th>Rusak Berat</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td scope="row">1</td>
      <td>Sekolah</td>
      <td>v</td>
      <td>x</td>
      <td>x</td>
      <td>
        <button type="button" class="btn btn-primary">Ubah</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
  </tbody>
    </table>

  </div>
</div>
@endsection