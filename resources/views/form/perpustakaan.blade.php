@extends('templates.header')
@extends('templates.sidebar')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-5 mg-lg-b-5 mg-xl-b-5">
          <h4 class="mg-b-0">Perpustakaan</h4>
    </div>
    <hr>

    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div class="mg-xl-b"></div>
      <div class="mg-xl-b-5"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">+ Tambah Data</button>
      </div>
      
    </div>

  <table class="table table-hover" id="perpustable">
  <thead class="text-center">
    <tr>
      <th scope="col" rowspan="2" class="text-sm-center">No</th>
      <th scope="col" rowspan="2">Deskripsi</th>
      <th scope="col" colspan="3">Kondisi</th>
      <th scope="col" rowspan="2">Aksi</th>
    </tr>
    <tr class="table table-bordered">
      <th>Baik</th>
      <th>Rusak Ringan</th>
      <th>Rusak Berat</th>
    </tr>
  </thead>
  <tbody class="text-center">
    @foreach($perpustakaan as $p)
    <tr>
      <td scope="row">{{$loop->iteration}} </td>
      <td>{{ $p->deskripsi }}</td>
      <td>{{$p->jumlah_baik}} </td>
      <td>{{$p->jumlah_rusak_ringan}} </td>
      <td>{{$p->jumlah_rusak_berat}} </td>
      <td class="text-center">
        <a href="#"><span class="badge badge-primary mr-3 my-2">Ubah</span></a>
        <a href="#"><span class="badge badge-danger my-2">Hapus</span></a>
      </td>
    </tr>
    @endforeach
  </tbody>
    </table>

  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="perpustakaanForm" name="perpustakaanForm" class="form-horizontal">
      <div class="modal-body">
        <fieldset class="form-fieldset">
          <legend>Perpustakaan</legend>
          <div class="form-group">
            <label class="d-block">Deskripsi</label>
            <input type="text" class="form-control" placeholder="Masukkan Deskripsi" name="deskripsi">
          </div>
          <div class="form-row">
            <div class="form-group col-md-5">
              <label>Kondisi</label>
              <input type="text" class="form-control" placeholder="Jumlah Baik" name="jumlah_baik">
            </div>
            <div class="form-group col-md-5 d-flex align-items-end">
              <input type="text" class="form-control" placeholder="Jumlah Rusak Ringan" name="jumlah_rusak_ringan">
            </div>
            <div class="form-group col-md-5 d-flex align-items-end">
              <input type="text" class="form-control" placeholder="Jumlah Rusak Berat" name="jumlah_rusak_berat">
            </div>
          </div>
        </fieldset>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="saveBtn">Save changes</button>
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

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');

        $.ajax({
          data: new FormData($("#perpustakaanForm")[0]),
          url: "{{url('perpuscreate')}} ",
          type: "POST",
          contentType: false,
          cache: false,
          processData: false,
          dataType: 'json',
          success: function (data) {

              $('#perpustakaanForm').trigger("reset");
              $('#exampleModalCenter').modal('hide');
              // table.draw();
              $( "#perpustable" ).load( "{{url('perpustakaan')}} #perpustable" );
              swal("Success!", "Success Insert Data!", "success");
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
  });
</script>
@endsection