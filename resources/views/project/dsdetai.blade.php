@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
    <link rel="stylesheet" href="/css/dsdetai.css" />

@endsection

@section('content')

    <div class="container danhsachdetailuanvan">
        <div class="row">
            <button type="button" class="btn btn-sm btn-success mt-3 ml-3" style="width: 50px"><a href="/lecturers"><i class="fas fa-arrow-left text-white"></i></a></button>
        </div>
        
        <div class="row">
            <div class="danhsachdetai" style="text-align:center;">
                <br />
                <span><b>DANH SÁCH ĐỀ TÀI HƯỚNG DẪN </b></span>
                <br /><br />
            </div>
        </div>

        <form id="formdanhsachdetai">
            <div class="themdetai">
                <a href="/lecturers/dsdetai/themdetai" type="button" id="btn-themdetai" name="btn-themdetai"
                    class="btn btn-themdsdetai">Thêm đề tài</a>
            </div>

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
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $detai->dt_ma }}</td>
                        <td>{{ $detai->dt_ten }}</td>
                        <td align="right" class="chucnang">
                            <a href="/detai/{{ $detai->dt_id }}">
                                <i class="fas fa-eye icon-button-sm text-success"></i>
                            </a>
                            <a href="/lecturers/dsdetai/suadetai/{{ $detai->dt_id }}">
                                <i class="fas fa-edit icon-button-sm text-success"></i>
                            </a>
                            <i class="fas fa-trash-alt icon-button-sm text-danger"></i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </form>

    </div>






    @endsection

    @section('script')
        <script src="/js/homepage.js"></script>
        <script>
            $('#noti1').modal('show');
        </script>




    @endsection
