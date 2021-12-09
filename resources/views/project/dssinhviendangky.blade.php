@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/dssinhviendangky.css" />

@endsection

@section('content')
<div class="container danhsachsinhviendangky">
    <div class="row">
        <button type="button" class="btn btn-sm btn-success mt-3 ml-3" style="width: 50px"><a href="/lecturers"><i class="fas fa-arrow-left text-white"></i></a></button>
    </div>
    
    <div class="row">
      <div class="danhsachsinhviendangky"  style="text-align:center; " >
        <br/>
        <span><b>DANH SÁCH SINH VIÊN ĐĂNG KÝ ĐỀ TÀI </b></span>
        <br/>
    </div>
    <div style=" margin:0px 40px 0px 0px;">
        {{-- {{ $dssinhvien }} --}}
        <form action="" class="danhsachsinhviendangki" method="get">
            <table boder=2 class="table table-hover  table-danhsachsinhvien-detai" style=" margin-top:10px ; "  >
                <thead>
                    <tr align="center">
                        <th  class="stt" ><b>STT</b></th>
                        <th  class="mssv" >MÃ SINH VIÊN</th>
                        <th  class="tensv" >TÊN SINH VIÊN</th>
                        <th  class="sdt">SĐT</th>
                        <th  class="email" >EMAIL</th>
                        <th  class="tendetai">TÊN ĐỀ TÀI </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($dssinhvien as $sinhvien)
                        <tr align="center"  >
                            <td>{{ $loop->index+1 }}</td>
                            <td class="mssv">{{ $sinhvien->nd_ma }}</td>
                            <td  class="tensv" >{{ $sinhvien->nd_ten }}</td>
                            <td>{{ $sinhvien->nd_sdt }}</td>
                            <td>{{ $sinhvien->nd_email }}</td>
                            <td>{{ isset($sinhvien->de_tai) ? $sinhvien->de_tai->dt_ten : 'Chưa đăng ký đề tài'}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
                
            </table>
        <form>
    <div>
</div>






@endsection

@section('script')
  <script src="/js/homepage.js"></script>
  <script>
    $('#noti1').modal('show');
  </script>
@endsection

