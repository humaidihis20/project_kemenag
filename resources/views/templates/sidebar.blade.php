@section('sidebar')
<aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="" class="aside-logo">dash<span>forge</span></a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="aside-body">
        <ul class="nav nav-aside">
          <li class="nav-label">Dashboard</li>

          <li class="nav-item"><a href="{{url('profil')}} " class="nav-link"><span>Profil Lembaga</span></a></li>
          <li class="nav-item"><a href="{{url('pimpinan')}} " class="nav-link"><span>Riwayat Pimpinan</span></a></li>
          <li class="nav-item"><a href="{{url('tanahbangunan')}} " class="nav-link"><span>Tanah Dan Bangunan</span></a></li>
          
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><span>Sarana Dan Prasarana</span></a>
            <ul>
              <li><a href="{{url('fotolembaga')}} ">Foto Lembaga</a></li>
              <li><a href="{{url('saranabangunan')}} ">Sarana Bangunan</a></li>
              <li><a href="{{url('saranaperalatan')}} ">Sarana Perpustakaan</a></li>
              <li><a href="{{url('perpustakaan')}} ">Perpustakaan</a></li>
            </ul>
          </li>

          <li class="nav-item with-sub">
            <a href="" class="nav-link"><span>Data Pokok</span></a>
            <ul>
              <li><a href="{{url('/form/tambah_pendidik')}} ">Data Pendidik</a></li>
              <li><a href="{{url('/pendidik/tambah_dipendidik')}} ">Data Tenaga Kependidikan</a></li>
              <li><a href="{{url('/siswa/tambah_datasiswa')}}">Siswa</a></li>
              <li><a href="{{url('alumni')}} ">Alumni</a></li>
            </ul>
          </li>

          <li class="nav-item"><a href="../../components" class="nav-link"><span>Pembelajaran</span></a></li>
        </ul>
      </div>
    </aside>

    <div class="content ht-100v pd-0">
      <div class="content-header">
        <!-- <nav class="nav">
          <a href="" class="nav-link"><i data-feather="help-circle"></i></a>
          <a href="" class="nav-link"><i data-feather="grid"></i></a>
          <a href="" class="nav-link"><i data-feather="align-left"></i></a>
        </nav> -->
      </div>
      <!-- content-header -->
            
            <!-- col -->
                @endsection