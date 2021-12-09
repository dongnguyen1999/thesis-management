@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/dsdetai.css" />

@endsection

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <a href="{{ URL::previous() }}">
                <button type="button" class="btn btn-sm btn-success mt-3" style="width: 50px"><i class="fas fa-arrow-left text-white"></i></button>
            </a>
        </div>
    </div>

    <h4 class="title text-center">CHI TIẾT ĐỀ TÀI</h4>

    <div>
        <div><span class="text-title">Mã đề tài: </span><span class="text-content">{{ $detai->dt_ma }}</span></div>
        <div><span class="text-title">Tên đề tài: </span><span class="text-content">{{ $detai->dt_ten }}</span></div>
        <div><span class="text-title">Nội dung chi tiết đề tài: </span></div>
        <div class="mx-5 dt-content">
            {!! $detai->dt_mota !!}
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

