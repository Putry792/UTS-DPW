<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Bhumi</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{url('public')}}/img/icon/bhumiIcon.png" type="image/x-icon">
    <!-- Custom CSS -->
    <link href="{{url('public/admin')}}/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="{{url('public/admin')}}/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('public/admin')}}/dist/css/style.min.css" rel="stylesheet">
    <!-- Data Table -->
    <link rel="stylesheet" href="{{url('public/admin')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
 
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
 
    <!-- Main wrapper - style you can find in pages.scss -->
 
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
     
        <!-- Topbar header - style you can find in pages.scss -->
     
        @include('admin.section.header')
     
      
     
       @include('admin.section.sidebar')
       <div class="page-wrapper">
        @include('template.utils.notif')
        @yield('content') 
       </div>
       @include('admin.section.footer')
    </div>
    
    
    <script src="{{url('public/admin')}}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('public/admin')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public/admin')}}/dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="{{url('public/admin')}}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{url('public/admin')}}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{url('public/admin')}}/dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{url('public/admin')}}/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{url('public/admin')}}/dist/js/pages/dashboards/dashboard1.js"></script>

    <!--data table-->
    <script src="{{url('public/admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('public/admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
         $(".table-datatable").dataTable();
    </script>s
</body>

</html>