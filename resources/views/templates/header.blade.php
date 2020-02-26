<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/assets/img/favicon.png')}}">

    <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="{{asset('assets/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!-- DashForge CSS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="{{asset('assets/lib/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/assets/css/dashforge.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/dashforge.auth.css')}}">
    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/dashforge.js')}}"></script>
    <script src="{{asset('assets/assets/js/dashforge.aside.js')}}"></script>
    <script src="{{asset('assets/assets/js/dashforge.sampledata.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.formalumni').click(function(){
      var menu = $(this).attr('id');
      if (menu == "data_baru") {
        $('.bodydata').show(1200);
        $('.bodydatasiswa').hide(1100);
      }else{
        $('.bodydatasiswa').show(1200);
        $('.bodydata').hide(1100);
      }
      })
      $('.bodydata').show();
      $('.bodydatasiswa').hide();
    })
  </script>
  </head>
  <body>

    @yield('sidebar')
    @yield('content')
    
    <script src="{{asset('assets/lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <!-- <script src="{{asset('assetslib/chart.js/Chart.bundle.min.js')}}"></script> -->
    <script src="{{asset('assets/lib/jqvmap/jquery.vmap.min.js')}}"></script>

    

    <!-- append theme customizer -->
    <script src="{{asset('assets/lib/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('assets/assets/js/dashforge.settings.js')}}"></script>
    <script src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('js/js_footer.js')}} "></script>
    
    <script type="text/javascript">
      $('#wizard1').steps({
  headerTag: 'h3',
  bodyTag: 'section',
  autoFocus: true,
  titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
});
    </script>

    <script type="text/javascript">
      $(".select2").select2({
              placeholder: 'Pilih Satu',
              searchInputPlaceholder: 'Search options'
            });

      $("#pilihJenis").select2({
              placeholder: 'Pilih Jenis Kelamin',
              searchInputPlaceholder: 'Search options'
            });

      $("#Provinsi").select2({
              placeholder: 'Pilih Provinsi',
              searchInputPlaceholder: 'Search options'
            });
      $("#Kabupaten").select2({
              placeholder: 'Pilih Kabupaten',
              searchInputPlaceholder: 'Search options'
            });
      $("#Kecamatan").select2({
              placeholder: 'Pilih Kecamatan',
              searchInputPlaceholder: 'Search options'
            });
      $("#Kelurahan").select2({
              placeholder: 'Pilih Kelurahan',
              searchInputPlaceholder: 'Search options'
            });
        $(document).ready(function(){
          document.getElementById("Kabupaten").disabled = true;
          document.getElementById("Kecamatan").disabled = true;
          document.getElementById("Kelurahan").disabled = true;
          
   $("#Provinsi").change(function() {
            $.get("{{url('getKabupaten')}}"+"/" + $("#Provinsi option:selected").val(), function(data) {
              document.getElementById("Kabupaten").disabled = false;
              $('#Kabupaten').html(data);
            });
            $('#Kecamatan').html('');
            $('#Kelurahan').html('');
        }); 

   $("#Kabupaten").change(function() {
            $.get("{{url('/profil/getKecamatan')}}"+"/" + $("#Kabupaten option:selected").val(), function(data) {
              document.getElementById("Kecamatan").disabled = false;
                $('#Kecamatan').html(data);
            });
            $('#Kelurahan').html('');
        });

    $("#Kecamatan").change(function() {
            $.get("{{url('/profil/getKelurahan')}}"+"/" + $("#Kecamatan option:selected").val(), function(data) {
              document.getElementById("Kelurahan").disabled = false;
                $('#Kelurahan').html(data);
            });

        });

});
    </script>

    <script>
    $("#akte_notaris").change(function(event) {  
      fadeInAdd();
      getURL(this);    
    });

    $("#akte_notaris").on('click',function(event){
      fadeInAdd();
    });

    function getURL(input) {    
      if (input.files && input.files[0]) {   
        var reader = new FileReader();
        var filename = $("#akte_notaris").val();
        filename = filename.substring(filename.lastIndexOf('\\')+1);
        reader.onload = function(e) {      
          $('#img_akta').attr('src', e.target.result);
          $('#img_akta').hide();
          $('#img_akta').fadeIn(500);      
          $('#akte').text(filename);
        }
        reader.readAsDataURL(input.files[0]);    
      }
      $(".alert").removeClass("loadAnimate").hide();
    }

    //ad_art image
    $("#ad_art").change(function(event) {  
      fadeInAdd();
      getURL2(this);    
    });

    $("#ad_art").on('click',function(event){
      fadeInAdd();
    });

    function getURL2(input) {    
      if (input.files && input.files[0]) {   
        var reader = new FileReader();
        var filename = $("#ad_art").val();
        filename = filename.substring(filename.lastIndexOf('\\')+1);
        reader.onload = function(e) {
          $('#img_art').attr('src', e.target.result);
          $('#img_art').hide();
          $('#img_art').fadeIn(500);      
          $('#ad_artlabel').text(filename);
        }
        reader.readAsDataURL(input.files[0]);    
      }
      $(".alert").removeClass("loadAnimate").hide();
    }

    function fadeInAdd(){
      fadeInAlert();  
    }
    function fadeInAlert(text){
      $(".alert").text(text).addClass("loadAnimate");  
    }
</script>
<script type="text/javascript">
    $('body').on('click', '#delete-user', function () {
        var user_id = $(this).data("id");
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
            type: "DELETE",
            url: "{{ url('alumni') }}"+'/'+user_id,
            success: function (data) {
                $("#user_id_" + user_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        }); 
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
</script>
  </body>
</html>
