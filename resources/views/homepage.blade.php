@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
    <link rel="stylesheet" href="/css/homepage.css" />

@endsection

@section('content')
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

    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card d-flex justify-content-center align-items-center">
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
