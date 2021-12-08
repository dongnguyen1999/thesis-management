@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/dsdetai.css" />

@endsection

@section('content')
<style>
    body {background-color: rgb(241, 252, 240);}
</style>

<h4 class="title" style=" text-align:center; padding-top : 20px;"> THÊM ĐỀ TÀI</h4>

<div class="formcontainer" >
    <div class="formthemdetai">
        <form id="formthemdt" style="color: #757575;" action="/formtestthemdetai" method="get">
            @csrf <!-- Rat rat rat x 3000 quan trong-->
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <label class="madetai" for="dt_ma">Mã Đề Tài</label>
                        <input type="text" name="dt_ma" id="dt_ma" class="form-control require">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="md-form">
                        <label class="tendetai" for="dt_ten">Tên Đề Tài </label>
                        <input type="text" name="dt_ten" id="dt_ten" class="form-control require">
                        <div class="invalid-feedback"></div>
                    </div>

                </div>
                <div class="col-md-6">
                    {{-- <form action="" method="post" > --}}
                        <label class="Formdetai" for="dt_mota"  style=" padding-top : 10px;">Mô tả chi tiết đề tài</label>
                        <textarea cols="40" rows="7" name="dt_mota" id="dt_mota"></textarea><br>
                        <button  type="submit" class="btn btn-them" onlink="them();" >Thêm</button>
                    {{-- </form> --}}
                    <?php if(isset($_GET["Formmotachitietdetai"])) { echo $_GET["Formmotachitietdetai"]; } ?>
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

    {{-- import script --}}
    <script src="/js/form-validation.js"></script>
    <script>
        $(function(){

            let config = {

                'require': (value) => {
                    if (!value) {
                        //value empty, undefined, null
                        return "Bắt buộc";
                    }
                },

            }

            setValidation('formthemdt', config);
        })

    </script>

@endsection

