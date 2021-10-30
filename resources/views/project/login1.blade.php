<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/vendor/mdbootstrap/css/mdb.min.css" />
    <link rel="stylesheet" href="/css/login.css" />
    @yield('style')
</head>
<body>
 {{-- <div class="container-flud">
     <div class="row menudangnhap">
         <ul class="menu-right">
            <li>
                
            </li> 
         </ul>

     </div>

 </div> --}}

 <div class="menudangnhap">
    <a href=""> Trang chủ </a>
 </div>

<div class="header">
    <div class="header-main">
        <h1 style="font-size: 40px;">Hệ Thống Đăng Nhập</h1>
        <div class="header-left-bottom ">
            <form action="#" method="post">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" name="name" placeholder="Username">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div> 
                    </div>
                    <input type="password" class="form-control" id="inlineFormInputGroup" name="password" placeholder="Password">
                </div>
                {{-- <input type="text"  value="User name" name="name" />
                <input type="password"  value="Password" name="password"/> --}}
                <input type="submit" value="Login">
            </form>	    
        </div>
    </div>
</div>



@include('components.footer')

        {{-- <footer class="page-footer text-center font-small mt-4 wow fadeIn">
            <div class="container-flud">
              <div class="row">
                <div class="col-md-10">
          
                        <strong>Điện thoại : </strong> 0123456789    ;<strong>   Fax : </strong>3838383 <br/>
                        <strong>Email :</strong>ntmthu261099@gmail.com
                  </div>
          
                  
                  </div>
          
            </div>
           
            
          </footer> --}}

 




  <script src="/vendor/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/popperjs/popper.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/vendor/mdbootstrap/js/mdb.min.js"></script>
  <script src="/js/common.js"></script>
  @yield('script')

</body>
</html>