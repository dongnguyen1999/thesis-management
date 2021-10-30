@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
    <link rel="stylesheet" href="/css/homepage.css" />

@endsection

@section('content')


    <div class="container dangkyluanvan">
        <div class="row">
            <div class="danhsachgianvien">
                <span><b>DANH SÁCH ĐĂNG KÝ ĐỀ TÀI </b></span>
                <br />

            </div>


            <div style=" margin-top:20px; border:2px solid #04AA6D;" <table boder=2 class="table table-hover  table-dangky">
                <tr align="center" style=" border-bottom:1px solid black ">
                    <td class="stt">STT</td>
                    <td>TÊN ĐỀ TÀI </td>
                    <td> </td>
                    <td>ĐĂNG KÝ</td>


                </tr>
                @foreach ($dsdetai as $detai)
                    <tr align="center">
                        <td> 1</td>
                        <td>{{ $detai->dt_ten}}</td>
                        <td>{{ $detai->nguoi_ra_de_tai->nd_ten}}</td>
                        <td>
                            <a href=""> dang ky</a>
                        </td>
                    </tr>

                @endforeach

                </table>
                <div>
                </div>

            </div>




        @endsection

        @section('script')
            <script src="/js/homepage.js"></script>
            <script>
                $('#noti1').modal('show');
            </script>

            <script>
                function dangkydetai() {

                }
            </script>

        @endsection
