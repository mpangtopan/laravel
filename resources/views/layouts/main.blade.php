<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TEFMS</title>

  @include('layouts.inc.ext-css')
  
</head>
<body class="hold-transition skin-custom sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      @include('layouts.inc.navbar')
    </header>
    
    @include('layouts.inc.sidebar')
    
    <div class="content-wrapper" >
      {{-- <section class="content-header">
        <h1 class="text-bold" style="color: #36B6B2">
          TERRA
          <small>Facility Management</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section> --}}
      
      <section class="content">
        @yield('content')
        {{-- @include('layouts.inc.scrollup') --}}
      </section>
    </div>

    @include('layouts.inc.ext-js')

    @include('layouts.inc.footer')
  </div>
</body>
</html>