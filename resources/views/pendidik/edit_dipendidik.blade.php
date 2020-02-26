@extends('templates.header')
@extends('templates.sidebar')

@section('content')
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                 <strong>EDIT DATA</strong><a href="" target="_blank"></a>
                </div>
                <div class="card-body">
                    
                    <form method="post" action="/pendidik/update/{{ $pendidik->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama" value=" {{ $pendidik->nama_lengkap }}">

                            @if($errors->has('nama_lengkap'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_lengkap')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nomor NIK</label>
                            <input type="text" name="nomor_nik" class="form-control" placeholder="Nomor NIK" value=" {{ $pendidik->nomor_nik }}">

                            @if($errors->has('nomor_nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nomor_nik')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value=" {{ $pendidik->jenis_kelamin }}">

                            @if($errors->has('jenis_kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kelamin')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value=" {{ $pendidik->tanggal_lahir }}">

                            @if($errors->has('tanggal_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_lahir')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Status Pegawai</label>
                            <input type="text" name="status_pegawai" class="form-control" placeholder="Status Pegawai" value=" {{ $pendidik->status_pegawai }}">

                            @if($errors->has('status_pegawai'))
                                <div class="text-danger">
                                    {{ $errors->first('status_pegawai')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="{{url ('/pendidik/tambah_dipendidik')}}" class="btn btn-primary">Kembali</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
@endsection