<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.nav')
        <aside class="main-sidebar  sidebar-dark-primary  elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/dashboard')}}" class="brand-link">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="KelolaKu Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="KelolaKu Logo" class="brand-text img-fluid" width="50%" style="opacity: .9">
              
              </a>
    
            <!-- Sidebar -->
            @include('layouts.sidebar')
          </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('headerTitle')</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="content">
                @yield('content') 
            </div>
            
        </div>
  
        <!-- Main Footer -->
        @include('layouts.footer')  

    </div>
    @include('layouts.script')
   
    @livewireScripts
    @yield('scripts')
    @stack('script')
    
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

@yield('scripts')

</html>
