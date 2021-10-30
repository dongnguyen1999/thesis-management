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
   <div class="nametrangchu d-flex justify-content-center align-items-center " style="background: #04AA6D; width: 100px ;height:50px; text-align:center; ">
    <a class="text-white" href="/"> Trang chủ </a>
   </div>
 </div>

 <section class="vh-100 bg-light"  >
    <div class="container py-5 h-100 " style="150px;padding-left:150px; padding-right:150px;">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card d-flex justify-content-center align-items-center " style="border-radius: 1rem; border-top:3px solid #04AA6D;border-bottom:3px solid #04AA6D ">
            {{-- <div class="row g-0"> --}}
              {{-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img
                  src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
                  alt="login form"
                  class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                />
              </div> --}}
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form action="/form/post" method="post">
                        @csrf

                        {{-- <div class="d-flex justify-content-center align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0">Logo</span>
                        </div> --}}

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; text-align:center; font-size:25px;">Thông tin đăng nhập </h5>

                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example17" name="mssv" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example17">Mã số đăng nhập</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example27">Mật khẩu </label>
                        </div>

                        <div class="pt-1 mb-4 ">
                            <button class="btn btn-dark btn-lg btn-block " style="backgroud-color: #ff6219; !important" type="submit">Đăng nhập</button>
                        </div>

                        {{-- <a class="small text-muted" href="#!">Forgot password?</a> --}}
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!" style="color: #393f81;">Register here</a></p>
                        {{-- <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a> --}}
                    </form>
                {{-- {{$nganh->n_ten}} <br />
                {{$bomon->bm_ten}} --}}
                {{-- </div> --}}

                {{-- @foreach ($dsbomon as $row)
                  Ma: {{$row->bm_ma}} <br />
                  Ten: {{$row->bm_ten}} <br />
                @endforeach --}}
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@if (isset($error) && isset($message))
  @component('components.notification')
    @slot('id', 'loginError')
    @slot('color', 'danger')
    @slot('textColor', 'white')

    @slot('title')
      {{$error}}
    @endslot
    @slot('content')
      {{$message}}
    @endslot
  @endcomponent
@endif



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

<script>
    $('#loginError').modal('show');
</script>

</body>
</html>
