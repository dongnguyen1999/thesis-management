@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/dsdetai.css" />
  
@endsection

@section('content')
<style>
    body {background-color: rgb(241, 252, 240);}
</style>

<h4 class="title" style=" text-align:center; padding-top : 20px;"> THAY ĐỔI ĐỀ TÀI</h4>

<div class="formcontainer" >
    <div class="formthemdetai">
        <form class="themdetai" style="color: #757575;" action="#!">
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <label class="Formdetai">Mã Đề Tài </label>
                        <input type="text" id="Formmadetai" class="form-control">
                        
                    </div>
                    <div class="md-form">
                        <label class="Formdetai">Tên Đề Tài </label>
                        <input type="text" id="Formtendetai" class="form-control">
                        
                    </div>
                    <div class="md-form">
                        <label class="Formdetai"> Bộ môn  </label>
                        <select name="bomon" class="form-control">
                            <option value="cntt">Công nghệ thông tin</option>
                            <option value="cnpm">Công nghệ phần mềm</option>
                            <option value="httt">Hệ thống thông tin</option>
                            <option value="mmt-tt">Mạng máy tính - Truyền thông </option>
                            <option value="khmt">Khoa học máy tính </option>
                            <option value="thud">Tin học ứng dụng </option>
                        </select>
                    </div>
                    <div class="md-form">
                        <label class="Formdetai">Ngày thêm đề tài </label>
                        <input placeholder="Select date" type="text" id="example" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="" method="post" >
                        <label class="Formdetai" style=" padding-top : 10px;">Mô tả chi tiết đề tài </label>
                        <textarea cols="40" rows="7" name="chitietdetai"></textarea><br>
                        <button  type="submit" class="btn btn-capnhat" onlink="capnhat();" >Cập nhật</button> 
                    </form>
                   
                </div>
            </div>
            
        </form>
    </div>

</div>
<br><br>
<div>
    <a href="./dsdetai"> Danh sách đề tài</a>
</div>
<br><br>
@endsection

@section('script')
    <script>
        var today = new Date();
        var day = today.getDate()+'-'+(today.getMonth+1)+'-'+today.getFullYear();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds() + ":" + today.getMilliseconds();
        var dateTime =  date+''+time ;
        document.getElementById("example").innerHTML = dateTime;
    </script>
    <script src="/js/homepage.js"></script>
    <script>
        $('#noti1').modal('show'); 
    </script>
  
@endsection
    
