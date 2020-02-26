@extends('templates.header')
@extends('templates.sidebar')

@section('content')
	<div class="content-body">
		<div class="row ml-3">
			<div class="col-10">
                <h1 class="mt-3">Daftar Riwayat</h1>
                <hr>
                <button type="button" class="btn btn-success my-3 float-right" id="createNewProduct">+ Tambah Data</button>
                <table class="table table-hover text-center" id="pimpinanTable">
                    <thead class="thead">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Periode Awal</th>
                        <th scope="col">Periode Akhir</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pimpinan as $p)
                        <tr id="tr-pimpinan">
                            <th scope="row">{{$loop->iteration}} </th>
                            <td>{{$p->nama_pimpinan}} </td>
                            <td>{{$p->periode_awal}} </td>
                            <td>{{$p->periode_akhir}} </td>
                            <td><?php
                            if ($p->status == 1) {
                                echo "Aktif";
                            }else{
                                echo "Nonaktif";
                            }
                            ?></td>
                            <td>
                            <a href="javascript:void(0)" data-id="{{ $p->id }}" data-toggle="tooltip" class="badge badge-info" id="edituser">Edit</a>
                            <a href="javascript:void(0)" data-id="{{ $p->id }}" data-toggle="tooltip" class="badge badge-danger" id="deleteuser">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="pimpinanForm" name="pimpinanForm" class="form-horizontal">
        {{csrf_field()}}
        <input type="hidden" name="id" id="id">
      <div class="modal-body">
        <fieldset class="form-fieldset">
          <legend>Pimpinan</legend>
          <div class="form-group">
            <label class="d-block">Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_pimpinan" id="nama">
          </div>
          <div class="form-group">
            <label class="d-block">Jabatan</label>
            <input type="text" class="form-control" placeholder="Masukkan Deskripsi" name="jabatan" id="jabatan">
          </div>
          <div class="form-group">
            <label class="d-block">Periode Awal</label>
            <input type="date" class="form-control" name="periode_awal" id="periode_awal">
          </div>
          <div class="form-group">
            <label class="d-block">Periode Akhir</label>
            <input type="date" class="form-control" name="periode_akhir" id="periode_akhir">
          </div>
          <div class="form-group">
            <label class="d-block">Status</label>
            <select class="form-control" name="status" id="status">
              <option value="1" id="aktif">Aktif</option>
              <option value="2" id="nonaktif">Nonaktif</option>
            </select>
          </div>
        </fieldset>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" id="saveBtn">Simpan Data</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#createNewProduct').click(function () {
        $('#saveBtn').val("create-product");
        $('#saveBtn').html("Create Account");
        $('#id').val('');
        $('#pimpinanForm').trigger("reset");
        $('#exampleModalCenterTitle').html("Tambah Data");
        $('#exampleModalCenter').modal('show');
    });

$('body').on('click', '#edituser', function () {
        $('#pimpinanForm').trigger("reset");
        var id = $(this).data('id');
        console.log(id);
        $.get("{{ url('pimpinan') }}"+"/"+id, function (data) {
        $('#exampleModalCenterTitle').html("Edit User");
        $('#saveBtn').val("edit-user");
        $('#saveBtn').html("Edit Data");
        $('#exampleModalCenter').modal('show');
        $('#id').val(data.id);
        $('#nama').val(data.nama_pimpinan);
        $('#jabatan').val(data.jabatan);
        $('#periode_awal').val(data.periode_awal);
        $('#periode_akhir').val(data.periode_akhir);
        
        $('#status').val(data.status);
        })
    })

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');

        $.ajax({
          data: new FormData($("#pimpinanForm")[0]),
          url: "{{url('pimpinancreate')}} ",
          type: "POST",
          contentType: false,
          cache: false,
          processData: false,
          dataType: 'json',
          success: function (data) {

              $('#pimpinanForm').trigger("reset");
              $('#saveBtn').html('Simpan Data');
              $('#exampleModalCenter').modal('hide');
              // table.draw();
              $( "#pimpinanTable" ).load( "{{url('pimpinan')}} #pimpinanTable" );
              swal("Success!", "Success Insert Data!", "success");
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });

    $('body').on('click', '#deleteuser', function () {
     
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
                  url: "{{ url('pimpinandelete') }}"+'/'+id,
                  success: function (data) {
                  $("#id_" + id).remove();
                  $( "#pimpinanTable" ).load( "{{url('pimpinan')}} #pimpinanTable" );
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