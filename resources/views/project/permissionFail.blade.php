@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
    <link rel="stylesheet" href="/css/homepage.css" />

@endsection

@section('content')
    <div class="container my-4">
        <div class="d-flex justify-content-center align-items-center permission-fail-message" style="height: 70vh">
            <div>Bạn không có quyền truy cập trang này!</div>
        </div>
    </div>

@endsection

@section('script')
    <script src="/js/homepage.js"></script>
    <script>
        $('#noti1').modal('show');
    </script>
@endsection
