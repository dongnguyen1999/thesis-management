{{-- <style>


    body {
      overflow-x: hidden;
      font-family: 'Roboto', sans-serif;
      font-size: 16px;
    }

    /* Toggle Styles */

    #viewport {
      padding-left: 250px;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
    }

    #content {
      width: 100%;
      position: relative;
      margin-right: 0;
    }

    /* Sidebar Styles */

    #sidebar {
      z-index: 1000;
      position: fixed;
      left: 250px;
      width: 250px;
      height: 100%;
      margin-left: -250px;
      overflow-y: auto;
      background:#37474F;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
    }

    #sidebar header {
      background-color: #263238;
      font-size: 20px;
      line-height: 52px;
      text-align: center;
      border-right: 1px solid ;

    }

    #sidebar header a {
      color: #fff;
      display: block;
      text-decoration: none;

    }

    #sidebar header a:hover {
      color: #fff;
      width:250px;

    }

    #sidebar  ul {
        height: 50px;


      }

    #sidebar .nav li {
        padding: 10px;
        width:250px;
        text-decoration: none;
    }
    #sidebar .nav li:hover {
        background-color: #04AA6D;
        width:250px;
        text-decoration: none;
    }

    #sidebar .nav a{
      background: none;

      color: #ffffff;
      font-size: 14px;
      padding: 16px 10px;

    }


    #sidebar .nav a:hover{
      background: none;
      color: #ECEFF1;

    }

    #sidebar .nav a i{
      /* margin-right: 75%; */
      /* text-align: left; */
      width:250px;

    }

    .nav .navbar-nav .navbar-right .login{
        text-align: right;
    }

    .navbar-default-login{
        background-color:#f1f1f1;
        height: 52px;


    }
    .btn-login{
        list-style: none;
        position: absolute;
        /* left: 89%; */
        right:5px;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .row.banner{
      background-color:hsla(210, 100%, 99%, 0.945);
      height:570px;
      margin: 10px 10px 1px 250px; border:1px solid;
    }
    </style> --}}

<header>

    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
            <header>
                <a href="/">Trang ch??? </a>
            </header>
            <ul class="nav sidebar-nav">
                <li class="{{ Request::path() == '/' ? 'active' : '' }}">
                    <a href="/">
                        Gi???i thi???u
                    </a>
                </li>

                @if (isset($role) && in_array($role, array('SINH_VIEN')))
                  <li class="{{ Str::startsWith(Request::path(), 'student') ? 'active' : '' }}">
                    <a href="/student">
                        <i class="zmdi zmdi-widgets"></i> Qu???n l?? sinh vi??n
                    </a>
                  </li>
                @endif

                @if (isset($role) && in_array($role, array('ADMIN', 'GIANG_VIEN')))
                  <li class="{{ Str::startsWith(Request::path(), 'lecturers') ? 'active' : '' }}">
                    <a href="/lecturers">
                        <i class="zmdi zmdi-widgets"></i> Qu???n l?? gi???ng vi??n
                    </a>
                  </li>
                @endif

                <li class="{{ Request::path() == '' ? 'active' : '' }}">
                    <a href="#">
                        Qu???n l?? danh m???c
                    </a>
                </li>

                <li class="{{ Request::path() == '' ? 'active' : '' }}">
                  <a href="#">
                      About
                  </a>

                </li>
            </ul>
        </div>

        @include('components.header')


    </div>

</header>
