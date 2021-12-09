@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/dsdetai.css" />

@endsection

@section('content')

<div class="container">

    <div class="row">
        <button type="button" class="btn btn-sm btn-success mt-3 ml-3" style="width: 50px"><a href="/lecturers/dsdetai"><i class="fas fa-arrow-left text-white"></i></a></button>
    </div>    

    <h4 class="title text-center">{{ isset($detai)? 'SỬA ĐỀ TÀI':'THÊM ĐỀ TÀI' }}</h4>

    <div class="formcontainer" >
        <div class="formthemdetai">
            <form id="formthemdt" class="p-3" action="/lecturers/dsdetai/themdetai" method="post">
                @csrf <!-- Rat rat rat x 3000 quan trong-->
                <div class="row">
                    <input type="hidden" name="dt_id" value="{{ isset($detai)? $detai->dt_id: '' }}">

                    <div class="col-md-4">
                        <div class="form-outline mb-4">
                            <input type="text" id="dt_ma" name="dt_ma" class="form-control form-control-lg required" value="{{ isset($detai)? $detai->dt_ma: '' }}"/>
                            <label class="form-label" for="dt_ma">Mã Đề Tài</label>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="form-outline mb-4">
                            <input type="text" id="dt_ten" name="dt_ten" class="form-control form-control-lg required" value="{{ isset($detai)? $detai->dt_ten: '' }}"/>
                            <label class="form-label" for="dt_ten">Tên Đề Tài</label>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{-- <form action="" method="post" > --}}
                            <div class="my-2">Mô tả chi tiết đề tài</div>
                            <textarea name="dt_mota" id="dt_mota" style="display: none;">
                                {{ isset($detai)? $detai->dt_mota: '' }}
                            </textarea>
                    </div>
                    
                    <?php if(isset($_GET["Formmotachitietdetai"])) { echo $_GET["Formmotachitietdetai"]; } ?>

                </div>

                <div class="d-flex justify-content-end align-items-center mt-2">
                    <button  type="submit" class="btn btn-success" >{{ isset($detai)? 'CẬP NHẬT':'THÊM' }}</button>
                </div>

            </form>
        </div>
    </div>

</div>

@if (isset($error) && isset($message))
    @component('components.notification')
        @slot('id', 'insertError')
        @slot('color', 'danger')
        @slot('textColor', 'white')
        @slot('title')
            {{$error}}
        @endslot
        @slot('content')
            {{$message}}
        @endslot
    @endcomponent
@endif

@endsection

@section('script')
    <script src="/js/"></script>

    <script>
        var today = new Date();
        var day = today.getDate()+'-'+(today.getMonth+1)+'-'+today.getFullYear();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds() + ":" + today.getMilliseconds();
        var dateTime =  date+''+time ;
        document.getElementById("example").innerHTML = dateTime;
    </script>

    <script src="/vendor/ckeditor5/build/ckeditor.js"></script>
    <script src="/js/ckeditor-creator.js"></script>
    <script>
        createFullCkeditor('dt_mota');
    </script>

    <script>
        $('#noti1').modal('show');
    </script>

    {{-- import script --}}
    <script src="/js/form-validation.js"></script>
    <script>
        $(function(){
            $('#insertError').modal('show');

            let config = {

                'required': (value) => {
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

