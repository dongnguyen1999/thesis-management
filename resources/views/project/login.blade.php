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
    <link rel="stylesheet" href="/css/common.css" />
    <link rel="stylesheet" href="/css/login.css" />
    @yield('style')
</head>

<body>

    <div class="menudangnhap">
        <div class="nametrangchu d-flex justify-content-center align-items-center bg-success"
            style="width: 100px ;height:50px; text-align:center; ">
            <a class="text-white" href="/"> Trang chủ </a>
        </div>
    </div>

    <section class="vh-100 bg-light">
        <div class="container py-5 h-100 " style="150px;padding-left:150px; padding-right:150px;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card d-flex justify-content-center align-items-center border-top-bot-success"
                        style="border-radius: 1rem;">
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form id="loginForm" action="{{ route('postLogin') }}" method="post">

                                    @csrf
                                    <h5 class="fw-normal mb-3 pb-3"
                                        style="letter-spacing: 1px; text-align:center; font-size:25px;">Thông tin đăng
                                        nhập </h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="nd_tentk" name="nd_tentk"
                                            class="form-control form-control-lg required" />
                                        <label class="form-label" for="nd_tentk">Tên tài khoản</label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="nd_password" id="nd_password"
                                            class="form-control form-control-lg required" />
                                        <label class="form-label" for="nd_password">Mật khẩu </label>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="pt-1 mt-5 d-flex justify-content-center align-items-center">
                                        <button class="btn btn-success btn-md" type="submit">Đăng nhập</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

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



    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/popperjs/popper.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/mdbootstrap/js/mdb.min.js"></script>
    <script src="/js/common.js"></script>
    <script src="/js/form-validation.js"></script>
    <script>
        $('#loginError').modal('show');

        $(function() {
            let config = {
                'required': (value) => {
                    if (!value) {
                        //value empty, undefined, null
                        return "Bắt buộc";
                    }
                },

            }

            setValidation('loginForm', config);
        })
    </script>
    @yield('script')

</body>

</html>
