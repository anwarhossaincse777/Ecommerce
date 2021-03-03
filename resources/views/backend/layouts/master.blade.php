<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/daterangepicker/daterangepicker.css">


{{--    sweet alert--}}
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

{{--    data table links--}}

    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/summernote/summernote-bs4.min.css">


    <!-- jQuery -->
    <script src="{{asset('backend/')}}/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('backend/dist/js')}}/handlebars.min.js"></script>

    <style type="text/css">
     .notifyjs-corner{

         z-index:10000 !important;
     }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


{{--sweet alert--}}




    <script type="text/javascript" src="{{asset('backend/')}}/sweetalert/sweetalert.js"></script>
    <link rel="stylesheet" href="{{asset('backend/')}}/sweetalert/sweetalert.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
{{--                    <span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>--}}
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('home')}}" class="brand-link">
            <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Dashboard</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{(!empty(Auth::user()->image))?url('/upload/user_image/'.Auth::user()->image):url('public/upload/no_image.png')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
{{--                    <a href="#" class="d-block">{{Auth::user()->name}}</a>--}}
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
           @include('backend.layouts.sidebar')
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')



{{--    //for the alert  message --}}

    @if(session()->has('success'))

        <script type="text/javascript">
        $(function (){
         $.notify("{{session()->get('success')}}",{globalPosition: 'top right',className:'success'
        });
        });

        </script>
        @endif



{{--    // error k show koarnor jonno kj korbo eikhane--}}


    @if(session()->has('error'))

        <script type="text/javascript">
            $(function (){
                $.notify("{{session()->get('error')}}",{globalPosition: 'top right',className:'error'
                });
            });

        </script>
@endif







    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; <a href="https://adminlte.io">Sumon khan</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Design and develop by Sumon</b>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('backend/')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('backend/')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('backend/')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('backend/')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('backend/')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('backend/')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/')}}/dist/js/pages/dashboard.js"></script>

{{--jquery validaition--}}
<script src="{{asset('backend/')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('backend/')}}/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Select2 -->
<script src="{{asset('backend/')}}/plugins/select2/js/select2.full.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>





{{--//select 2--}}



<script type="text/javascript">
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();

    })


    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

</script>









<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


//delete sweet alert

        <script type="text/javascript">

        $(function (){
            {
                $(document).on('click','#delete',function (e) {
                 e.preventDefault();
                 var link=$(this).attr("href");

                         Swal.fire({
                                title: 'Are you sure?',
                                text: "Delete this user",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.value) {
                                    window.location.href=link
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    )
                                }
                            })
                })
            }

        });

        </script>




{{--approve sweet alert--}}
<script type="text/javascript">

    $(function (){
        {
            $(document).on('click','#approveButton',function (e) {
                e.preventDefault();
                var link=$(this).attr("href");

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Approve this Purchase",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Approve it!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href=link
                        Swal.fire(
                            'Approved!',
                            'Your file has been Approved.',
                            'success'
                        )
                    }
                })
            })
        }

    });

</script>

{{--for iamge showing real time--}}


        <script type="text/javascript">

            $(document).ready(function () {
             $('#image').change(function (e) {
                 var reader=new FileReader();
                 reader.onload=function (e) {
                     $('#showImage').attr(
                         'src',e.target.result);
                 }
                 reader.readAsDataURL(e.target.files['0']);

             });

            });

        </script>



//delete ajax


<script>

$(document).ready(function () {
$(document).on('click','#delete',function () {

    var actionTo=$(this).attr('href');
    var token=$(this).attr('data-token');
    var id=$(this).attr('data-id');

    swal({
        title:"Are You Sure?",
        type:"success",
        showCancelButton:true,
        confirmButtonClass: 'btn-danger',
        confirmButtonText:'yes',
        cancelButtonText:"NO",
        closeOnConfirm:false,
        closeOnCancel:false,


    },

        function (isConfirm) {
            if (isConfirm) {

                $.ajax({

                    url:actionTo,
                    type: 'post',
                    data: {id: id, _token:token},

                    success: function (data) {

                        swal({

                                title: "Deleted!",
                                type: "Success"
                            },
                            function (isConfirm) {

                                if (isConfirm) {

                                    $('.' + id).fadeOut();
                                }
                            });
                    }
                });

            }

            else {


                swal("Cancelled", "", "error");
            }

        });
                return false;
        });

    });

</script>
</body>
</html>
