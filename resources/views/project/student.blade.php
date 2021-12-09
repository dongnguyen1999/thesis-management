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
                <tr>
                    <td>Mã SV</td>
                    <td>{{ $user->nd_ma }}</td>
                    {{-- <td ></td> --}}

                </tr>
                <tr>
                    <td>Họ tên</td>
                    <td>{{ $user->nd_ten }}</td>

                </tr>
                <tr>
                    <td>Ngày sinh </td>
                    <td>{{ date('d/m/Y', strtotime($user->nd_ngaysinh)) }}</td>

                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>{{ $user->nd_gioitinh }}</td>

                </tr>
                <tr>
                    <td>Ngành học</td>
                    <td>{{ $user->lop_hoc->nganh_hoc->n_ten}}</td>
                </tr>
                <tr>
                    <td>Khóa học</td>
                    <td>{{ $user->lop_hoc->khoa_hoc->kh_ten}}</td>

                </tr>
                <tr>
                    <td>Khoa</td>
                    <td>Công nghệ thông tin và truyền thông</td>

                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td>{{ $user->nd_sdt }}</td>

                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $user->nd_email }}</td>

                </tr>
                <tr>
                    <td colspan=2></td>
                </tr>

            </table>
        </div>
        <div class="col-md-5 position-relative" style=" border:1px solid #04AA6D;border-radius: 25px; padding-top :10px;  margin-left:30px;  " >
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
                            <a href="/student/dsdetai">
                                <img src="/images/icon-register.png" style="width:50px ; height:50px; border-radius: 15px; border: 1px solid white" >
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div align="center">
                            <span>Đăng ký giảng viên</span>
                        </div>
                    </td>
                    <td class="div_td">
                        <div align="center">
                            <span >Đăng ký đề tài</span>
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


                <tr style="font-size:13px ;">

                    <td  colspan=3  style=" font-size:13px; " >

                    </td>
                </tr>



            </table>

            @if ($giangvien)
                <div style="position: absolute; bottom: 15px; left: 0; width: 100%; padding: 15px">
                    <div style="border: 1px solid rgb(199, 196, 196); border-radius: 25px; padding: 15px;">
                        <table class="namethongtinluanvan1 w-100" cellspacing="0" cellpadding="">
                            <tr align="center" >
                                <td colspan=2 style="text-align:center;font-size:15px;">THÔNG TIN LUẬN VĂN </td>
                            </tr>
                            <tr style="font-size:13px ;" >
                                <td>Mã CB </td>
                                <td colspan=2>{{$giangvien->nd_ma}}</td>
                            </tr>
                            <tr style="font-size:13px ;" >
                                <td>Họ và Tên</td>
                                <td colspan=2>{{$giangvien->nd_ten}}</td>
                            </tr>
                            <tr style="font-size:13px ;">
                                <td>Email</td>
                                <td colspan=2>{{$giangvien->nd_email}}</td>
                            </tr>
                            <tr  style="font-size:13px ;">
                                <td>Điện thoại</td>
                                <td colspan=2>{{$giangvien->nd_sdt}}</td>
                            </tr>

                                @if ($detai)
                                    <tr style="font-size:13px ;">
                                        <td>Đề Tài</td>
                                        <td colspan=2>{{$detai->dt_ten}}</td>
                                    </tr>
                                    @if ($diem)
                                        <tr style="font-size:13px ;">
                                            <td>Tổng điểm</td>
                                            <td colspan=2>{{$diem}}</td>
                                        </tr>
                                    @endif
                                @else
                                    <tr style="font-size:13px ;">
                                        <td>Đề Tài</td>
                                        <td colspan=2>Chưa đăng ký đề tài</td>
                                    </tr>
                                @endif


                        </table>
                    </div>
                </div>
            @else
                <div class="text-center" style="font-size:18px; padding :10px 0px;">Sinh viên chưa đăng ký giảng viên</div>
            @endif

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












