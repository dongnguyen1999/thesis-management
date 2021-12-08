@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/students.css" />

@endsection

@section('content')

<div class="container student mt-5 ">
    <div class="row " style="width:100%; height:570px; margin-bootom:10px;margin-left:20px; ">
        <div class="col-md-6 thongtin"  style=" border:1px solid #04AA6D;border-radius: 25px; padding-top:10px; " >
            <table class="table table-striped thongtinsv"  style="border: 1px solid white;" >
                <tr>
                    <td style="text-align:center; font-size:25px;" colspan=2 >THÔNG TIN SINH VIÊN</td>

                </tr>
            @foreach($dsbomon as $row)
                <tr>
                    <td >Mã SV</td>
                    <td >{{ $row->bm_ma }}</td>
                    {{-- <td ></td> --}}

                </tr>
            @endforeach
                <tr>
                    <td>Họ tên</td>
                    <td >Nguyễn Thị minh Thư</td>

                </tr>
                <tr>
                    <td>Ngày sinh </td>
                    <td></td>

                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td></td>

                </tr>
                <tr>
                    <td>Ngành học</td>
                    <td></td>
                </tr>
                <tr>
                    <td>khóa học</td>
                    <td></td>

                </tr>
                <tr>
                    <td>Khoa</td>
                    <td></td>

                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td></td>

                </tr>
                <tr>
                    <td>Email</td>
                    <td></td>

                </tr>
                <tr>
                    <td colspan=2></td>
                </tr>

            </table>
        </div>
        <div class="col-md-5" style=" border:1px solid #04AA6D;border-radius: 25px; padding-top :10px;  margin-left:30px;  " >
            <table  class="table table-bordered-thongtinluanvan" style="border: 1px solid white ;margin-top :10px;">

                <tr>
                    <td  >
                        <div align="center">
                            <a href="/student/dsgiangvienhuongdan">
                                <img src="/images/icon-people.png" style="width:50px ; height:50px; border-radius: 15px; border:1px solid #04AA6D ;" >
                            </a>
                        </div>
                    </td>
                    <td >
                        <div align="center">
                            <a href="/student/dkluanvan">
                                <img src="/images/icon-register.png" style="width:50px ; height:50px; border-radius: 15px; border: 1px solid white" >
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div align="center">
                            <span>Giảng viên hướng dẫn</span>
                        </div>
                    </td>
                    <td class="div_td">
                        <div align="center">
                            <span >Đăng ký luận văn</span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="div_td">
                        <div align="center">
                            <a href="#">
                                <img src="/images/icon-information.png" style="width:50px ; height:50px; border-radius: 15px;; border:1px solid #04AA6D ;" >
                            </a>
                        </div>
                    </td>
                    <td>
                        <div align="center">
                            <a href="#">
                                <img src="/images/icon-result.png" style="width:50px ; height:50px; border-radius: 15px;; border:1px solid #04AA6D ;" >
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >
                        <div align="center">
                            <span>Thông tin chi tiết</span>
                        </div>
                    </td>
                    <td>
                        <div align="center">
                            <span>Kết quả luận văn</span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td >
                        <div align="center">
                            <a href="#">
                                <img src="/images/icon-people.png" style="width:50px ; height:50px; border-radius: 15px; border:1px solid #04AA6D ;" >
                            </a>
                        </div>
                    </td>
                    <td>
                        <div align="center">
                            <a href="/dkluanvan">
                                <img src="/images/icon-register.png" style="width:50px ; height:50px; border-radius: 15px;" >
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >
                        <div align="center">
                            <span>Giảng viên hướng dẫn</span>
                        </div>
                    </td>
                    <td>
                        <div align="center">
                            <span >Đăng ký luận văn</span>
                        </div>
                    </td>
                </tr>


                <tr style="font-size:13px ;">

                    <td  colspan=3  style=" font-size:13px; " >

                    </td>
                </tr>



            </table>
            <table border=1 class="namethongtinluanvan1" style="width: 430px; height:100px; border: 1px solid rgb(199, 196, 196); " cellspacing="0" cellpadding="">
                <tr align="center" >
                    <td colspan=2 style="text-align:center;font-size:15px; padding :10px 0px; ">THÔNG TIN LUẬN VĂN </td>

                </tr>
                <tr style="font-size:13px ;" >
                    <td>Mã CB </td>
                    <td colspan=2> htsfyvuygygavg8v888888vh</td>
                </tr>
                <tr style="font-size:13px ;" >
                    <td>Họ và Tên</td>
                    <td colspan=2>Nguyễn Trương Trịnh Thịnh </td>
                </tr>
                <tr style="font-size:13px ;">
                    <td>Email </td>
                    <td colspan=2></td>
                </tr>
                <tr  style="font-size:13px ;">
                    <td>Điện thoại</td>
                    <td colspan=2>Nguyễn Trương Trịnh Thịnh </td>
                </tr>
                <tr style="font-size:13px ;">
                    <td>Đề Tài</td>
                    <td colspan=2> Webside đăng ký và thực hiện luận văn khoa CNTT-TT</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<br/><br/>
@endsection

@section('script')
  <script src="/js/homepage.js"></script>
  <script>
    $('#noti1').modal('show');
  </script>
@endsection












