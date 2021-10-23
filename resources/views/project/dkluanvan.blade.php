
@extends('layouts.web')

@section('title', 'Homepage')
@section('title', 'model')
@section('style')
  <link rel="stylesheet" href="/css/dkluanvan.css" />
  
@endsection

@section('content')
  
<div class="container dangkyluanvan">
    <div class="row">
      <div class="danhsachgianvien"  >
        <span><b>DANH SÁCH ĐĂNG KÝ GIẢNG VIÊN HƯỚNG DẪN </b></span>
        <br/>

      </div>
      <div class="vungdangky"></div>
    
      <div style=" margin-top:20px; border:2px solid #04AA6D;">
        <table boder=2 class="table table-hover  table-dangky"  >
          <tr align="center" style=" border-bottom:1px solid black ">
            <td class="stt">STT</td>
            <td >TÊN GIẢNG VIÊN </td>
            
            <td>BỘ MÔN</td>
            <td class="dangky">ĐĂNG KÝ </td>
            
          </tr>
          
          <tr align="center">
              <td>1</td>
              <td >GS.PGS TS Trịnh Nguyễn Trueoeng Quyen</td>
              <td>GV JGVH</td>
              <td >
                <button style="width:60px; height:20px; font-size :7px; text-align:center; padding:5px 0px 5px 0px;" type="button" class="btn btn-danger btn-dangky" onlink="dangky();" >Đăng ký</button>
              </td>   
          </tr>
    
          <tr align="center">
              <td></td>
              <td > </td>
              <td></td>
              <td></td>
          </tr>

          <tr align="center">
            <td></td>
            <td > </td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td></td>
            <td > </td>
            <td></td>
            <td></td>
          </tr>

          <tr>
               <td></td>
              <td > </td>
              <td></td>
              <td></td>
        </tr>
        
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




@endsection
    