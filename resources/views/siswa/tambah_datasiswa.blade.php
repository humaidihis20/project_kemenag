@extends('templates.header')
@extends('templates.sidebar')

@section('content')
	<div class="content-body">
		<div class="row ml-3">
			<div class="col-10">
                <h1 class="mt-3">Data Siswa</h1>
                <a href="{{url ('/siswa/data_siswa')}}" class="btn btn-success my-3 float-right">+Tambah Data</a>
                <table class="table table-bordered text-center">
                    <thead class="thead">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Nik</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $sws)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td>{{$sws->nama_lengkap}}</td>
                            <td>{{$sws->nomor_nik}}</td>
                            <td>{{$sws->jenis_kelamin}}</td>
                            <td>{{$sws->tanggal_lahir}}</td>
                            <td>{{$sws->alamat}}</td>
                            <td>
                            <a href="/siswa/edit/{{ $sws->id }}" class="badge badge-success">Edit</a>
                            <a href="/siswa/hapus/{{ $sws->id }}" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>
    </div>
@endsection