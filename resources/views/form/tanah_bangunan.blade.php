@extends('templates.header')
@extends('templates.sidebar')

@section('content')
      <div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-6"></ol>
              </nav>

              <!-- isi -->
              <h4 class="mg-b-0 tx-spacing--1 mb-3">Tanah Dan Bangunan</h4>

              @if(session('status'))
              <script type="text/javascript">
                swal("Success", "{{session('status')}} ", "success");
                </script>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong style="font-size: 20px; color: #2ecc71;">{{session('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="font-size: 40px; color: #2ecc71;">×</span>
                </button>
              </div>
              @endif

<form id="tanahbangunan" action="{{url('tanahbangunan')}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name="lembaga_id" value="12">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contoh1">Luas Tanah Seluruhnya</label>
      <input type="number" class="form-control" id="Luas_Tanah_Seluruhnya" placeholder="Luas Tanah" name="luas_tanah_total" step="any">
    </div>
    <div class="form-group col-md-6">
      <label for="contoh2">Luas Bangunan Seluruhnya</label>
      <input type="number" class="form-control" id="Luas_Bangunan_Seluruhnya" placeholder="Luas Bangunan" name="luas_bangunan_total" step="any">
    </div>
  </div>
 <h5>Luas Tanah Menurut Jenis Penggunaanya</h5>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contoh1">Bangunan</label>
      <input type="number" class="form-control" id="Bangunan" placeholder="Bangunan" name="luas_bangunan" step="any">
    </div>
    <div class="form-group col-md-6">
      <label for="contoh2">Tempat Parkir</label>
      <input type="number" class="form-control" id="Tempat_Parkir" placeholder="Tempat Parkir" name="luas_tempat_parkir" step="any">
    </div>
    <div class="form-group col-md-6">
      <label for="contoh2">Lapangan</label>
      <input type="number" class="form-control" id="Lapangan" placeholder="Lapangan" name="luas_lapangan" step="any">
    </div>
    <div class="form-group col-md-6">
      <label for="contoh2">Kebun</label>
      <input type="number" class="form-control" id="Kebun" placeholder="Kebun" name="luas_kebun" step="any">
    </div>
    <div class="form-group col-md-6">
      <label for="contoh2">Taman</label>
      <input type="number" class="form-control" id="Taman" placeholder="Taman" name="luas_taman" step="any">
    </div>
    <div class="form-group col-md-6">
      <label for="contoh2">Lahan Kosong</label>
      <input type="number" class="form-control" id="Lahan_Kosong" placeholder="Lahan Kosong" name="luas_lahan_kosong" step="any">
    </div>
    <div class="form-group col-md-6">
      <label for="contoh2">Lainnya</label>
      <input type="number" class="form-control" id="Lainnya" placeholder="Lainnya" name="luas_lainnya" step="any">
    </div>
  </div>
   <button type="submit" class="btn btn-success btn-md">+ Simpan data</button>
 </form>
 
@endsection