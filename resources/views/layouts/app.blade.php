<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>PT Menara Sahidah Bahari</title>
    
    <style>
        body{
     
     background: url('bootstrap/img/background.jpg');
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
        }
    </style>
    </head>
<body>
    
    @include('layouts.navigation')
  <div class="container-fluid">
    <div class="row">
    @yield('content')
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card text-center">
                <div class="card-footer text-muted">
                    PT Menara Saidah Bahari
                </div>
            </div>
        </div>
    </div>
  </div>  
    
</body>
</html>