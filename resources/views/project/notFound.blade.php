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

    <section class="bg-light" style="height: calc(100vh - 77px);">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div>
                    <div style="font-size: 150px; font-weight: bold; text-align:center;">404</div>
                    <div style="font-size: 50px; font-weight: bold; text-align:center;">Trang này không tồn tại</div>
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
