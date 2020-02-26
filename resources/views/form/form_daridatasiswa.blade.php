@extends('templates.header')
@extends('templates.sidebar')

@section('content')
<div class="bodydata">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-10 mg-lg-b-10 mg-xl-b-10">
          <h4 class="mg-b-0 tx-spacing--1">Form Tambah Data Alumni</h4>
    </div>

    <form id="form1">
      <div class="row row-sm mg-b-10">

        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
          <label for="carisiswa">Cari Nama Siswa</label>
          <select class="custom-select select2" data-live-search="true" name="carisiswa" id="carisiswa">
              <option label="Choose one"></option>
              <option value="Firefox">Firefox</option>
              <option value="Chrome">Chrome</option>
              <option value="Safari">Safari</option>
              <option value="Opera">Opera</option>
              <option value="Internet Explorer">Internet Explorer</option>
          </select>
        </div>

        <div class="col-sm-6 mg-t-10">
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" class="form-control" placeholder="" name="tempat_lahir" id="tempat_lahir" readonly>
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="text" class="form-control" placeholder="" name="tanggal_lahir" id="tanggal_lahir" readonly>
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="tgl_lulus">Tanggal Lulus</label>
          <input type="text" class="form-control" placeholder="" name="namaibu" id="namaibu">
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="no_ijazah">No Ijazah</label>
          <input type="text" class="form-control" placeholder="" name="no_ijazah" id="no_ijazah">
        </div>

        <div class="col-sm-6 mg-t-10 mt-4">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>

      </div>
    </form>
</div>
@endsection