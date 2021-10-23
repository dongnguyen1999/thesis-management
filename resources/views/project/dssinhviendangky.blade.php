@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/dssinhviendangky.css" />
  
@endsection

@section('content')
<div class="container danhsachsinhviendangky">
    <div class="row">   
      <div class="danhsachsinhviendangky"  style="text-align:center; " >
        <br/>
        <span><b>DANH SÁCH SINH VIÊN ĐĂNG KÝ ĐỀ TÀI </b></span>
        <br/>
    </div>  
    <div style=" margin:0px 40px 0px 0px;  "  >
        <table boder=2 class="table table-hover  table-danhsachsinhvien-detai" style=" margin-top:10px ; "  >
            <tr align="center"style=" border-bottom:1px solid black ;background-color: #1dc463;  ">
                <td  class="stt" ><b>STT</b></td>
                <td  class="mssv" >MÃ SINH VIÊN</td>
                <td  class="tensv" >TÊN SINH VIÊN</td>
                <td  class="lop">SĐT</td>
                <td  class="lop" >EMAIL</td>
                <td  class="tendetai">TÊN ĐỀ TÀI </td>                
            </tr>
            <tr align="center"  >
                <td>1</td>
                <td class="mssv">B1706537</td>
                <td  class="tensv" >nGUYỄN THỊ MINH THƯ </td>
                <td>0123456789</td>
                <td>thuonghjb1706537@student.ctu.edu.vn</td>
                <td>1Nội dung chi tiet  TS Trịnh Nguyễn Trueoeng Quyen SGGGGGGGGGGGGGGGGGGGGGGGG</td>
                
            </tr>
            <tr align="center"  >
                <td>1</td>
                <td>B1706537</td>
                <td  class="" >nGUYỄN THỊ MINH THƯ </td>
                <td>0123456789</td>
                <td>thub1706537@student.ctu.edu.vn</td>
                <td>1Nội dung chi tiet  TS Trịnh Nguyễn Trueoeng Quyen SGGGGGGGGGGGGGGGGGGGGGGGG</td>
                
            </tr>
                
            </tr>
            <tr align="center"  >
                <td>1</td>
                <td>B1706537</td>
                <td  class="" >nGUYỄN THỊ MINH THƯ </td>
                <td>DI17V7AAAA</td>
                <td>thub1706537@student.ctu.edu.vn</td>
                <td>1Nội dung chi tiet  TS Trịnh Nguyễn Trueoeng Quyen SGGGGGGGGGGGGGGGGGGGGGGGG</td>
                
                
            </tr>
            
            <tr align="center"  >
                <td>1</td>
                <td>B1706537</td>
                <td  class="" >nGUYỄN THỊ MINH THƯ </td>
                <td>0123456789</td>
                <td>thub1706537@student.ctu.edu.vn</td>
                <td>1Nội dung chi tiet  TS Trịnh Nguyễn Trueoeng Quyen SGGGGGGGGGGGGGGGGGGGGGGGG</td>
                
            </tr>
                <tr align="center"  >
                <td>1</td>
                <td>B1706537</td>
                <td  class="" >nGUYỄN THỊ MINH THƯ </td>
                <td>0123456789</td>
                <td>thub1706537@student.ctu.edu.vn</td>
                <td>1Nội dung chi tiet  TS Trịnh Nguyễn Trueoeng Quyen SGGGGGGGGGGGGGGGGGGGGGGGG</td>
            
            </tr>

            <tr align="center"  >
                <td>1</td>
                <td>B1706537</td>
                <td  class="" >nGUYỄN THỊ MINH THƯ </td>
                <td>0123456789</td>
                <td>thub1706537@student.ctu.edu.vn</td>
                <td>1Nội dung chi tiet  TS Trịnh Nguyễn Trueoeng Quyen SGGGGGGGGGGGGGGGGGGGGGGGG</td>
                
            </tr>
            <tr align="center"  >
                <td>1</td>
                <td>B1706537</td>
                <td  class="" >nGUYỄN THỊ MINH THƯ </td>
                <td>0123456789</td>
                <td>thub1706537@student.ctu.edu.vn</td>
                <td>1Nội dung chi tiet  TS Trịnh Nguyễn Trueoeng Quyen SGGGGGGGGGGGGGGGGGGGGGGGG</td>
            
        ``  </tr>
        </table>
    <div>
</div>
  





@endsection

@section('script')
  <script src="/js/homepage.js"></script>
  <script>
    $('#noti1').modal('show'); 
  </script>
@endsection
    
