@extends('templates.header')
@extends('templates.sidebar')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex row align-items-center justify-content-between mg-b-10 mg-lg-b-10 mg-xl-b-10 ml-auto">
      <div class="mg-xl-b-15 col-sm-6"><h4 class="mg-b-0 tx-spacing--1">Data Pokok Lembaga</h4></div>
      <div class="mg-xl-b-10 col-sm-6"><h4 class="mg-b-0 tx-spacing--1">Dokumen Lembaga</h4></div>
    </div>
    <!-- alert -->
    @if(session('status'))
    <script type="text/javascript">
    swal("Success", "{{session('status')}} ", "success");
    </script>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{session('status')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
<!-- endalert -->
    <hr>
<div class="tx-13 mg-b-25">
  <div id="wizard1" role="application" class="wizard clearfix">
    <div class="steps clearfix">
      <ul role="tablist">
        <li role="tab" class="first current" aria-disabled="false" aria-selected="true">
          <a id="wizard1-t-0" href="#wizard1-h-0" aria-controls="wizard1-p-0">
            <span class="current-info audible">current step: </span>
            <span class="number">1</span> 
            <span class="title">Personal Information</span></a></li>
            <li role="tab" class="done" aria-disabled="false" aria-selected="false">
              <a id="wizard1-t-1" href="#wizard1-h-1" aria-controls="wizard1-p-1">
                <span class="number">2</span> 
                <span class="title">Billing Information</span></a></li>
                <li role="tab" class="last done" aria-disabled="false" aria-selected="false"><a id="wizard1-t-2" href="#wizard1-h-2" aria-controls="wizard1-p-2">
                  <span class="number">3</span> 
                  <span class="title">Payment Details</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="content clearfix">
          <h3 id="wizard1-h-0" tabindex="-1" class="title current">Personal Information</h3>
            <section id="wizard1-p-0" role="tabpanel" aria-labelledby="wizard1-h-0" class="body current" aria-hidden="false" style="">
          <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>
              <div class="row row-sm">
                <div class="form-group col-sm-6">
                  <label>Fullname</label>
                  <input type="text" class="form-control" placeholder="Firstname">
                </div><!-- col -->
                <div class="form-group col-sm-6 d-flex align-items-end">
                  <input type="text" class="form-control" placeholder="Lastname">
                </div><!-- col -->
                <div class="col-sm-4 col-md-5">
                  <label>Birthday</label>
                  <select class="custom-select" required="">
                    <option value="" disabled="" selected="">Select Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                  </select>
                </div>
                <div class="col-sm-4 col-md-3 mg-t-10 mg-sm-t-0 d-flex align-items-end">
                  <select class="custom-select" required="">
                    <option value="" disabled="" selected="">Select Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
                <div class="col-sm-4 mg-t-10 mg-sm-t-0 d-flex align-items-end">
                  <select class="custom-select" required="">
                    <option value="" disabled="" selected="">Select Year</option>
                    <option value="1">2019</option>
                    <option value="2">2018</option>
                    <option value="3">2017</option>
                  </select>
                </div>
              </div><!-- form-row -->
            </section>
            <h3 id="wizard1-h-1" tabindex="-1" class="title">Billing Information</h3>
            <section id="wizard1-p-1" role="tabpanel" aria-labelledby="wizard1-h-1" class="body" aria-hidden="true" style="display: none;">
              <p class="mg-b-20">Wonderful transition effects.</p>
              <div class="row row-sm">
                <div class="form-group col-sm-6">
                  <label>Client Name</label>
                  <input type="text" class="form-control" placeholder="Firstname">
                </div><!-- col -->
                <div class="form-group col-sm-6 d-flex align-items-end">
                  <input type="text" class="form-control" placeholder="Lastname">
                </div><!-- col -->
                <div class="col-12">
                  <label>Notes</label>
                  <textarea class="form-control" rows="1" placeholder="Enter some notes"></textarea>
                </div><!-- col -->
              </div><!-- row -->
            </section>
            <h3 id="wizard1-h-2" tabindex="-1" class="title">Payment Details</h3>
            <section id="wizard1-p-2" role="tabpanel" aria-labelledby="wizard1-h-2" class="body" aria-hidden="true" style="display: none;">
              <p class="mg-b-20">The next and previous buttons help you to navigate through your content.</p>
              <div class="row row-sm">
                <div class="form-group col-12">
                  <input type="text" class="form-control" placeholder="Credit card number">
                </div><!-- col -->
                <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Name on card">
                </div><!-- col -->
                <div class="col-7 col-sm-3 mg-t-20 mg-sm-t-0 d-flex align-items-end">
                  <input type="text" class="form-control" placeholder="Exp. date">
                </div><!-- col -->
                <div class="col-5 col-sm-3 mg-t-20 mg-sm-t-0 d-flex align-items-end">
                  <input type="text" class="form-control" placeholder="CVC/CVV">
                </div><!-- col -->
              </div><!-- row -->
            </section>
          </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false" class="" style=""><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul>
          </div></div>
        </div>

    <!-- <form id="form1" method="post" action="{{url('profil')}} " enctype="multipart/form-data" name="profil">
      {{csrf_field()}}
      <div class="row ml-auto">
      <div class="col-sm-6 mg-t-10">
          <label for="nama_lembaga">Nama Lembaga</label>
          <input type="text" class="form-control" placeholder="" name="nama_lembaga" id="nama_lembaga">
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="akte_notaris">Akte Notaris</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="akte_notaris" name="akte_notaris">
            <label class="custom-file-label" id="akte">Choose file</label>
          </div>
        </div>
        </div>

        <div class="row ml-auto">
        <div class="col-sm-6 mg-t-10">
          <label for="jenis_pendidikan">Jenis Pendidikan</label>
          <select class="form-control" name="jenis_pendidikan" id="jenis_pendidikan">
            <option label="Pilih Jenis Pendidikan"></option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
          </select>
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="ad/art">AD / ART</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="ad_art" name="ad_art">
            <label id="ad_artlabel" class="custom-file-label">Pilih file</label>
          </div>
        </div>
        </div>

        <div class="row ml-auto">
          <div class="col-sm-6 mg-t-10">
          <div class="mb-3">
          <label for="jenis_lembaga">Jenis Lembaga</label>
          <select class="form-control" name="jenis_lembaga" id="jenis_lembaga">
            <option label="Pilih Lembaga"></option>
            <option value="negeri">Negeri</option>
            <option value="swasta">Swasta</option>
          </select>
          </div>
          <label for="status_lembaga">Status Lembaga</label>
          <select class="form-control" name="status_lembaga" id="status_lembaga">
            <option label="Pilih Status"></option>
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
          </select>
          <div class="mt-3">
          <label for="tgl_berdiri">Tanggal Berdiri</label>
          <input type="date" class="form-control" placeholder="" name="tgl_berdiri" id="tgl_berdiri">
        </div>
        </div>

        <div class="col-sm-6 mg-t-10">
          <div class="row ml-auto mt-3">
            <div class="mg-lg-b-5 mr-4 mb-3"><img src="{{asset('images/default.jpg')}}" width="230" height="230" class="img-thumbnail" alt="Responsive image" id="img_akta"></div>
            <div class="mg-lg-b-5"><img src="{{asset('images/default.jpg')}}" width="230" height="230" class="img-thumbnail" alt="Responsive image" id="img_art"></div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row ml-auto mt-3">
        <div class="col-sm-6 mg-t-10">
          <label for="provinsi">Provinsi</label>
          <select class="form-control select2" name="provinsi" id="Provinsi">
             <option value="">Please Select</option>
                @foreach ($provinsi as $p)
                    <option value="{{ $p->provinsi_id }}">{{ $p->nama_provinsi }}</option>
                @endforeach
          </select>
        </div>
        <div class="col-sm-6 mg-t-10">
         <label for="kabupaten">Kabupaten</label>
          <select class="form-control select2" name="kabupaten" id="Kabupaten">
            <option value="" label="Pilih Kabupaten">NA</option>
          </select>
        </div>
      </div>

        <div class="row ml-auto">
        <div class="col-sm-6 mg-t-10">
          <label for="kecamatan">Kecamatan</label>
          <select class="form-control select2" name="kecamatan" id="Kecamatan">
            <option value="">NA</option>
          </select>
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="kelurahan">Kelurahan</label>
          <select class="form-control select2" name="kelurahan" id="Kelurahan">
            <option value="">NA</option>
          </select>
        </div>
      </div>

      <div class="col-sm-12 mg-t-10">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" id="alamat"></textarea>
        </div>

        <div class="col-sm-6 mg-t-10 mt-4">
          <button type="submit" class="btn btn-success">Simpan Data dan Lanjutkan Pengisian</button>
        </div>

      </div>
    </form> -->


  </div>
</div>
@endsection