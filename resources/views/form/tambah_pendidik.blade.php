@extends('templates.header')
@extends('templates.sidebar')

@section('content')
	<div class="content-body">
		<div class="row ml-3">  
			<div class="col-10">
                <h1 class="mt-3">Tenaga Pendidik</h1>
                <a href="{{url ('/form/create_pendidik')}}" class="btn btn-success my-3 float-right">+Tambah Data</a>
                <table class="table table-bordered text-center">
                    <thead class="thead">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Nik</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Status Pegawai</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($form as $pdk)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td>{{$pdk->nama_lengkap}}</td>
                            <td>{{$pdk->nomor_nik}}</td>
                            <td>{{$pdk->jenis_kelamin}}</td>
                            <td>{{$pdk->tanggal_lahir}}</td>
                            <td>{{$pdk->status_pegawai}}</td>
                            <td>
                            <a href="/form/edit/{{ $pdk->id }}" class="badge badge-success">Edit</a>
                            <a href="/form/hapus/{{ $pdk->id }}" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>
    </div>
@endsection