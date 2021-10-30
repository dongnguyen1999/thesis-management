@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
    <link rel="stylesheet" href="/css/homepage.css" />

@endsection

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        {{-- <button
        type="button"
        class="btn btn-primary"
        data-mdb-toggle="modal"
        data-mdb-target="#noti1"
    >
      Launch demo modal 1
    </button> --}}
        @if (isset($error) && isset($message))
            @component('components.notification')
                @slot('id', 'noti1')
                    @slot('color', 'danger')
                        @slot('textColor', 'white')
                            @slot('title')
                                {{ $error }}
                            @endslot
                            @slot('content')
                                {{ $message }}
                            @endslot
                        @endcomponent
                    @endif
                </div>
                {{-- co the sua lai cho dep hon hay dung vao cach khac   --}}
                @if (Auth::check())
                    {{ Auth::user()->nd_ten }}
                    {{ Auth::user()->nd_id }}
                    {{ Auth::user()->nd_ma }}
                @else
                    bạn chua dang nhap
                @endif

                <div class="container ">
                    <div class="row justify-content-center" style="padding-top: 10px;  ">

                        <div class="col-md-12">
                            <div class="card">
                                <img style="width :1100px ;height:600px ;" src="/vendor/anh.jpg">
                            </div>
                        </div>
                    </div>
                </div>

            @endsection

            @section('script')
                <script src="/js/homepage.js"></script>
                <script>
                    $('#noti1').modal('show');
                </script>
            @endsection
