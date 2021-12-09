@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/dssinhviendangky.css" />

@endsection

@section('content')
<div class="container danhsachsinhviendangky">
    <div class="row">
        <div class="col-md-12">
            <a href="/student">
                <button type="button" class="btn btn-sm btn-success mt-3" style="width: 50px"><i class="fas fa-arrow-left text-white"></i></button>
            </a>
        </div>
    </div>

    <div class="row">
      <div class="danhsachsinhviendangky"  style="text-align:center; " >
        <br/>
        <span><b>DANH SÁCH GIẢNG VIÊN HƯỚNG DẪN</b></span>
        <br/>
    </div>
    <div style=" margin:0px 40px 0px 0px;">
        {{-- {{ $dssinhvien }} --}}
        <form action="" class="danhsachsinhviendangki" method="get">
            <table boder=2 class="table table-hover  table-danhsachsinhvien-detai" style=" margin-top:10px ; "  >
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>MÃ GIẢNG VIÊN</th>
                        <th>TÊN GIẢNG VIÊN</th>
                        <th>TRÌNH ĐỘ</th>
                        <th>SĐT</th>
                        <th>EMAIL</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($dsgiangvien as $giangvien)
                        <tr align="center" class="{{$giangvien->dangky? 'registered': ''}}">
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $giangvien->nd_ma }}</td>
                            <td>{{ $giangvien->nd_ten }}</td>
                            <td>{{ $giangvien->trinh_do->td_ten}}</td>
                            <td>{{ $giangvien->nd_sdt }}</td>
                            <td>{{ $giangvien->nd_email }}</td>
                            @if ($giangvien->dangky)
                                <td><a href="/" class="btn-unregister" data-id="{{$giangvien->nd_id}}" data-name="{{$giangvien->nd_ten}}">Bỏ đăng ký</a></td>
                            @else
                                <td><a href="/" class="btn-register" data-id="{{$giangvien->nd_id}}" data-name="{{$giangvien->nd_ten}}">Đăng ký</a></td>
                            @endif

                        </tr>
                    @endforeach

                </tbody>

            </table>
        <form>
    <div>
</div>

@if (Session::has('success') && Session::has('message'))
    @component('components.notification')
        @slot('id', 'registerSuccess')
        @slot('color', 'success')
        @slot('textColor', 'white')
        @slot('title')
            {{Session::get('success')}}
        @endslot
        @slot('content')
            {{Session::get('message')}}
        @endslot
    @endcomponent
@endif

@component('components.notification')
    @slot('id', 'registerWarning')
    @slot('color', 'warning')
    @slot('textColor', 'white')
    @slot('confirmText', 'Xác nhận')
    @slot('title')
        Đăng ký giảng viên
    @endslot
    @slot('content')
        Content
    @endslot
@endcomponent

@component('components.notification')
    @slot('id', 'unregisterWarning')
    @slot('color', 'danger')
    @slot('textColor', 'white')
    @slot('confirmText', 'Xác nhận')
    @slot('title')
        Hủy đăng ký giảng viên
    @endslot
    @slot('content')
        Content
    @endslot
@endcomponent




@endsection

@section('script')
  <script src="/js/homepage.js"></script>
  <script>
    $('#registerSuccess').modal('show');

    $(function() {
        $('a.btn-register').click(function(event) { // setup register button
            event.preventDefault();
            let nd_id = $(this).data('id');
            let nd_ten = $(this).data('name');

            $('#registerWarning .modal-body').html(`Bạn có chắc muốn đăng ký làm luận văn với giảng viên ${nd_ten}`);

            $('#registerWarning .btn-confirm').click(function() {
                window.location.href = `/student/dkgiangvien/${nd_id}`;
            });

            $('#registerWarning').modal('show');
        })
    })

    $(function() {
        $('a.btn-unregister').click(function(event) { // setup register button
            event.preventDefault();
            let nd_id = $(this).data('id');
            let nd_ten = $(this).data('name');

            $('#unregisterWarning .modal-body').html(`Bạn có chắc muốn hủy đăng ký làm luận văn với giảng viên ${nd_ten}`);

            $('#unregisterWarning .btn-confirm').click(function() {
                window.location.href = `/student/huydkgiangvien/${nd_id}`;
            });

            $('#unregisterWarning').modal('show');
        })
    })

  </script>
@endsection

