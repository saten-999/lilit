<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Dashboard</title>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <div class="container-fluid"> 
    <div class="row">
      <div class="col-12 p-0">
        <!-- Just an image -->
      <nav class="navbar bg-blue border-bottom border-white">
        <a class="navbar-brand text-white" href="#">
          Admin Panel
        </a>

        <div class="float-right">
          <a href="/admin/logout">Logout</a>
        </div>
      </nav>
        
      </div>
    </div>
  </div>

    <div class="container-fluid" >
      <div class="row">
        <div class="col-2 bg-blue text-secondary p-0" id="admin_menu">
          <ul class="list-group  ">
            <li class="list-group-item  bg-blue text-secondary">
              <a href="/admin/course">Տեսական</a>
            </li>
            <li class="list-group-item  bg-blue text-secondary">
              <a href="/admin/test">  Թեստ</a>
            </li>
            <li class="list-group-item  bg-blue text-secondary">
              <a href="">Վիդեոդասեր</a>
            </li>

          </ul>
          
         

        </div>
        <div class="col-10">
          @yield('content')
        </div>
      </div>
    </div>
</body>
</html>