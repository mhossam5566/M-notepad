<!DOCTYPE html>
 <head>
	 <title>M Notepad </title>
	 <meta charset="UTF-8"/>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
	 
	 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
	 
	 
										<script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	 
	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	 
	 <link rel="shortcut icon" type="image/png" href="assest/fv.png"/>
	 
	 <style>
 
 body{
 font-family: 'Acme', 'Cairo' , sans-serif;
 background-image: url("../assest/bg.jpg");
  Background-size:cover;
  background-repeat: no-repeat;
	 background-position: center center;
	 background-attachment: fixed;
 }
 
 .cnt{
 width:80%;
 background-color:#EEEDE7;
 border-radius:14px;
 }
 
 .ttl{
 width:90%;
 padding:5px;
 background-color:#fff;
 border-radius:5px;
 border:1px solid #000;
 }
 
 .cntn{
 font-family: 'Acme', 'Cairo' , sans-serif;
 width:90%;
 padding:5px;
 background-color:#fff;
 border-radius:5px;
 border:1px solid #000;
 }
 
 .td{
 width:90%;
 padding:5px;
 background-color:#fff;
 border-radius:5px;
 border:1px solid #000;
 }
 
 .ftr{
 backdrop-filter: blur(30px);
 color:#fff;
 }
 
 .logo{
 height:30px;
 }
 </style>
 </head>
	 <body>
<center>
    <!-- الناف بار -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="../assest/logo.png" alt="Logo" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      @if (Auth::check())
      <li class="nav-item">
          <a class="nav-link" href="#">{{ __("profile")}}</a>
        </li>
        <li class="nav-item">
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
           <button class="nav-link" type="submit">{{ __("logout")}}</button>
                                    </form>
        
      @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __("login")}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __("singup")}}</a>
        </li>
      @endif
      
    



<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   {{ LaravelLocalization::getCurrentLocaleNative() }}
  </button>
  
  <ul class="dropdown-menu">
  
  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
  
    
     <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="dropdown-item">
                {{ $properties['native'] }}
            </a>
        </li>
        @endforeach
  </ul>
 
</div>

    </ul>
  </div>
 
</nav>

    <!--الناف -->
    
    @yield('content')