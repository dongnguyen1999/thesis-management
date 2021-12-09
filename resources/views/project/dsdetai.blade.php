@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
    <link rel="stylesheet" href="/css/dsdetai.css" />

@endsection

@section('content')

    <div class="container danhsachdetailuanvan">
        <div class="row">
            <div class="col-md-12">
                <a href="{{$backUrl}}">
                    <button type="button" class="btn btn-sm btn-success mt-3" style="width: 50px"><i class="fas fa-arrow-left text-white"></i></button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="danhsachdetai" style="text-align:center;">
                <br />
                <span><b>DANH SÁCH ĐỀ TÀI HƯỚNG DẪN</b></span>
                <br /><br />
            </div>
        </div>

        <form id="formdanhsachdetai">
            @if (in_array($role, array('ADMIN', 'GIANG_VIEN')))
                <div class="themdetai">
                    <a href="/lecturers/dsdetai/themdetai" type="button" id="btn-themdetai" name="btn-themdetai"
                        class="btn btn-themdsdetai">Thêm đề tài</a>
                </div>
            @endif





            @if (isset($dsdetai))
                <table boder=2 class="table table-hover table-danhsachdetai mt-3">
                    <thead>
                        <tr align="center" style=" border-bottom:1px solid black ; ">
                            <th class="stt" style="width: 50px">STT</th>
                            <th style="width: 150px">MÃ ĐÊ TÀI</th>
                            <th >TÊN ĐỀ TÀI </th>
                            <th style="width: 200px">CHỨC NĂNG </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsdetai as $detai)
                            <tr class="{{$detai->dangky? 'registered': ''}}">
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $detai->dt_ma }}</td>
                                <td>{{ $detai->dt_ten }}</td>
                                @if (in_array($role, array('ADMIN', 'GIANG_VIEN')))
                                    <td align="center" class="chucnang">
                                        <a href="/detai/{{ $detai->dt_id }}">
                                            <i class="fas fa-eye icon-button-sm text-success"></i>
                                        </a>
                                        <a href="/lecturers/dsdetai/suadetai/{{ $detai->dt_id }}">
                                            <i class="fas fa-edit icon-button-sm text-success"></i>
                                        </a>
                                        <i class="fas fa-trash-alt icon-button-sm text-danger" data-id="{{$detai->dt_id}}"></i>
                                    </td>
                                @else
                                    <td align="center" class="chucnang">
                                        <a href="/detai/{{$detai->dt_id}}">Chi tiết</a> |
                                        @if ($detai->dangky)
                                            <a href="/" class="btn-unregister" data-id="{{$detai->dt_id}}" data-name="{{$detai->dt_ten}}">Bỏ đăng ký</a>
                                        @else
                                            <a href="/" class="btn-register" data-id="{{$detai->dt_id}}" data-name="{{$detai->dt_ten}}">Đăng ký</a>
                                        @endif
                                    </td>
                                @endif

                            </tr>
                        @endforeach


                    </tbody>

                </table>
            @else
                <div class="text-center" style="font-size:18px; padding :10px 0px;">Sinh viên chưa đăng ký giảng viên</div>
            @endif

        </form>

    </div>


    @if (Session::has('success') && Session::has('message'))
        @component('components.notification')
            @slot('id', 'deleteSuccess')
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
        @slot('id', 'deleteWarning')
        @slot('color', 'warning')
        @slot('textColor', 'white')
        @slot('confirmText', 'Xóa')
        @slot('title')
            Cảnh báo xóa
        @endslot
        @slot('content')
            Bạn có chắc muốn xóa đề tài này!
        @endslot
    @endcomponent

    @component('components.notification')
        @slot('id', 'registerWarning')
        @slot('color', 'warning')
        @slot('textColor', 'white')
        @slot('confirmText', 'Xác nhận')
        @slot('title')
            Đăng ký đề tài
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
            Hủy đăng ký đề tài
        @endslot
        @slot('content')
            Content
        @endslot
    @endcomponent


@endsection

@section('script')
    <script src="/js/homepage.js"></script>
    <script>
        $('#deleteSuccess').modal('show');

        $(function() {
            $('i.fa-trash-alt').click(function() { // setup delete button
                let dt_id = $(this).data('id');
                $('#deleteWarning .btn-confirm').click(function() {
                    window.location.href = `/lecturers/dsdetai/xoadetai/${dt_id}`;
                });
                $('#deleteWarning').modal('show');
            })
        })

        $(function() {
            $('a.btn-register').click(function(event) { // setup register button
                event.preventDefault();
                let dt_id = $(this).data('id');
                let dt_ten = $(this).data('name');

                $('#registerWarning .modal-body').html(`Bạn có chắc muốn đăng ký đề tài ${dt_ten}`);

                $('#registerWarning .btn-confirm').click(function() {
                    window.location.href = `/student/dkdetai/${dt_id}`;
                });

                $('#registerWarning').modal('show');
            })
        })

        $(function() {
            $('a.btn-unregister').click(function(event) { // setup register button
                event.preventDefault();
                let dt_id = $(this).data('id');
                let dt_ten = $(this).data('name');

                $('#unregisterWarning .modal-body').html(`Bạn có chắc muốn hủy đăng ký đề tài ${dt_ten}`);

                $('#unregisterWarning .btn-confirm').click(function() {
                    window.location.href = `/student/huydkdetai/${dt_id}`;
                });

                $('#unregisterWarning').modal('show');
            })
        })



    </script>

@endsection
