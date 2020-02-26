@extends('templates.header')
@extends('templates.sidebar')

@section('content')

	<div class="content-body">
		<div class="row ml-3">
			<div class="col-8">
                <h1 class="mt-3">Form Tambah Data Siswa</h1>
                <form method="post" action="{{url ('/siswa/tambah_datasiswa')}}">
                    @csrf
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama_lengkap" name="nama_lengkap">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option>-</option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="nomor_nik">Nomor NIK</label>
                            <input type="text" class="form-control" placeholder="Nomor NIK" id="nomor_nik" name="nomor_nik">
                          </div>
                        </div>
                      
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir">
                          </div>
                        </div>
                      
                        <div class="row mt-3">
                          <div class="col-sm-6 mg-t-10-6">
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control" placeholder="Tanggal Masuk" id="tanggal_masuk" name="tanggal_masuk">
                          </div>
                        </div>
                
                      <hr>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="provinsi_id">Provinsi</label>
                            <select class="form-control" id="Provinsi" name="provinsi_id">
                              <option value=""></option>
                                @foreach ($provinsi as $p)
                              <option value="{{ $p->provinsi_id}}"> {{$p->nama_provinsi}}</option>
                                @endforeach 
                            </select>
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="kabupaten_id">Kabupaten</label>
                            <select class="form-control" id="Kabupaten" name="kabupaten_id"> 
                            </select>
                          </div>
                        </div>
                      
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="kecamatan_id">Kecamatan</label>
                            <select class="form-control" id="Kecamatan" name="kecamatan_id">
                            </select>
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="kelurahan_id">Kelurahan</label>
                            <select class="form-control" id="Kelurahan" name="kelurahan_id">
                            </select>
                          </div>
                        </div>
                    
                      <div class="row">
                        <div class="col mg-t-10">
                        <label for="alamat">Alamat</label>
                        <br>
                        <textarea class="col-lg" name="alamat" placeholder="Isikan alamat"></textarea>
                        </div>
                      </div>
                    
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="no_hp">No.Hp</label>
                            <input id="no_hp" type="text" class="form-control" placeholder="Enter phone number" name="no_hp">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                          </div>
                        </div>
                      
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" placeholder="Nama Ibu" id="nama_ibu" name="nama_ibu">
                          </div>
                            <div class="col-sm-6 mg-t-10">
                            <label for="nama_bapak">Nama Bapak</label>
                            <input type="text" class="form-control" placeholder="Nama Bapak" id="nama_bapak" name="nama_bapak">
                           </div>
                          </div>
                      <button type="submit" class="btn btn-success my-3">Simpan Data Siswa</button>
                  </form>
			</div>
		</div>
	</div>
@endsection
     

   