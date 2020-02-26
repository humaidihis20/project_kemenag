@extends('templates.header')
@extends('templates.sidebar')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-10 mg-lg-b-10 mg-xl-b-10">
          <h4 class="mg-b-0 tx-spacing--1">Form Tambah Data Alumni</h4>
    </div>
    <div class="mb-3">
    <a href="#" class="btn btn-secondary formalumni" id="data_baru">DATA BARU</a>
    <a href="#" class="btn btn-info formalumni" id="data_siswa">DARI DATA SISWA</a> 
    </div>
    <hr>

    <div class="bodydata">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-10 mg-lg-b-10 mg-xl-b-10">
          <h4 class="mg-b-0 tx-spacing--1">Form Tambah Data Alumni Dari Data Baru</h4>
    </div>

    <form id="formAlumni" name="formAlumni" method="POST" action="{{url('tambahalumni')}} ">
      {{ csrf_field() }}
      <div class="row row-sm mg-b-10">
        <div class="col-sm-6">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" placeholder="" name="nama_lengkap" id="nama">
        </div>
        @if ($errors->has('nama_lengkap'))<div class="invalid-feedback">
                    {{$errors->first('nama_lengkap')}}
                    </div>  @endif

        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" class="form-control" placeholder="" name="tempat_lahir" id="tempat_lahir">
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" class="form-control" placeholder="" name="tanggal_lahir" id="tanggal_lahir">
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="tgl_masuk">Tanggal Masuk</label>
          <input type="date" class="form-control" placeholder="" name="tgl_masuk" id="tgl_masuk">
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="tgl_lulus">Tanggal Lulus</label>
          <input type="date" class="form-control" placeholder="" name="tgl_lulus" id="tgl_lulus">
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="provinsi">Provinsi</label>
          <select class="form-control select2" name="provinsi" id="Provinsi" data-placeholder="Pilih Provinsi">
            <option label="Choose one"></option>
            @foreach ($provinsi as $p)
                    <option value="{{ $p->provinsi_id }}">{{ $p->nama_provinsi }}</option>
                @endforeach
          </select>
        </div>
        <div class="col-sm-6 mg-t-10">
         <label for="kabupaten">Kabupaten</label>
          <select class="form-control select2" name="kabupaten" id="Kabupaten" data-placeholder="Pilih Kabupaten">
            <option label="Choose one"></option>
          </select>
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="kecamatan">Kecamatan</label>
          <select class="form-control select2" name="kecamatan" id="Kecamatan">
            <option label="Choose one"></option>
          </select>
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="kelurahan">Kelurahan</label>
          <select class="form-control select2" name="kelurahan" id="Kelurahan">
            <option label="Choose one"></option>
          </select>
        </div>

        <div class="col-sm-12 mg-t-10">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" id="alamat"></textarea>
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="nohp">No. HP</label>
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">+62</span>
          </div>
          <input id="inputPhoneNumber" type="text" class="form-control" placeholder="Enter phone number">
          </div>
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="" name="email" id="email">
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="namaibu">Nama Ibu</label>
          <input type="text" class="form-control" placeholder="" name="namaibu" id="namaibu">
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="namabapak">Nama Bapak</label>
          <input type="text" class="form-control" placeholder="" name="namabapak" id="namabapak">
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="tgl_lulus">Tanggal Lulus</label>
          <input type="date" class="form-control" placeholder="" name="tgl_lulus" id="tgl_lulus">
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="nomor_sertifikat">Nomor Sertifikat/Ijazah</label>
          <input type="text" class="form-control" placeholder="" name="nomor_sertifikat" id="nomor_sertifikat">
        </div>

        <div class="col-sm-6 mg-t-10 mt-4">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        
      </div>
    </form>
  </div>

  <div class="bodydatasiswa" aria-hidden="true">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-10 mg-lg-b-10 mg-xl-b-10">
          <h4 class="mg-b-0 tx-spacing--1">Form Tambah Data Alumni Dari Data Siswa</h4>
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

  </div>
</div>


@endsection