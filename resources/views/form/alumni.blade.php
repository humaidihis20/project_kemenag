@extends('templates.header')
@extends('templates.sidebar')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
          <h4 class="mg-b-0 tx-spacing--1">Data Alumni</h4>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div class="mg-xl-b-25"></div>
      <div class="mg-xl-b-5"><a class="btn btn-success" href="{{url('tambahalumni')}} ">+Tambah Data</a></div>
    </div>

    <table class="table table-bordered border-dark" id="alumni-table">
  <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor NIK</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($alumni as $alumni)
    <tr id="user_id_{{$alumni->id}} ">
      <th scope="row">{{$loop->iteration}} </th>
      <td>{{$alumni -> nama_lengkap}} </td>
      <td>{{$alumni -> lembaga_id}} </td>
      <td>{{$alumni -> jenis_kelamin}} </td>
      <td>{{$alumni -> tanggal_lahir}} </td>
      <td>{{$alumni -> alamat}} </td>
      <td>
        <button type="button" class="btn btn-primary">Ubah</button>
        <a href="javascript:void(0)" id="delete-user" data-id="{{ $alumni->id }}" data-toggle="tooltip" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
    </table>

  </div>
</div>

<script type="text/javascript">
  $(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $('body').on('click', '#delete-user', function () {
     
        var id = $(this).data("id");
    //     var delete_data = confirm("Are You sure want to delete ?");

    //     if (delete_data) {
    //     $.ajax({
    //         type: "DELETE",
    //         url: "{{ url('pimpinandelete') }}"+'/'+id,
    //         success: function (data) {
    //         $("#id_" + id).remove();
    //         $( "#pimpinanTable" ).load( "{{url('pimpinan')}} #pimpinanTable" );
    //         swal("Success!", "Success Delete Data!", "success");
    //         },
    //         error: function (data) {
    //             console.log('Error:', data);
    //         }
    //     });
    //   }else{
    //    swal("Your Data is Safe!"); 
    //   }
    // });

     swal({
          title: "Data Akan Dihapus?",
          text: "Anda tidak bisa memulihkannya lagi setelah data dihapus",
          icon: "warning",
          buttons: [
            'Batal',
            'Hapus Data'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            $.ajax({
                  type: "DELETE",
                  url: "{{ url('alumni') }}"+'/'+id,
                  success: function (data) {
                  $( "#alumni-table" ).load( "{{url('alumni')}} #alumni-table" );
                  },
                  error: function (data) {
                      console.log('Error:', data);
                  }
              });
            swal({
              title: 'Berhasil Dihapus!',
              text: 'Data Pimpinan Berhasil Dihapus',
              icon: 'success'
            });
          } else {
            swal("Gagal Dihapus", "Data Pimpinan Masih Tersimpan", "error");
          }
        });
        });

});

</script>
@endsection