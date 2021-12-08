@extends('layouts.web')

@section('title', 'Homepage')
@section('title', 'model')

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
        <div style=" margin-top:20px; border:2px solid #04AA6D;">
            <form>
                <table boder=2 class="table table-hover  table-dangky">
                        <tr align="center" style=" border-bottom:1px solid black ">
                            <td class="stt">STT</td>
                            <td> GIẢNG VIÊN </td>
                            <td>TRÌNH ĐỘ </td>
                            <td>HK-NK</td>


                        </tr>
                    {{-- @foreach ( as ) --}}
                        <tr align="center">
                            <td> 1</td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                    {{-- @endforeach --}}
                </table>
            </form>
        <div>
    </div>

</div>








@endsection

@section('script')
  <script src="/js/homepage.js"></script>
  <script>
    $('#noti1').modal('show');
  </script>
@endsection
