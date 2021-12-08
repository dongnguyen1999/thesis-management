@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
    <link rel="stylesheet" href="/css/dsdetai.css" />

@endsection

@section('content')

    <div class="container danhsachdetailuanvan">
        <div class="row">
            <div class="danhsachdetai" style="text-align:center;">
                <br />
                <span><b>DANH SÁCH ĐỀ TÀI HƯỚNG DẪN </b></span>
                <br /><br />
            </div>
            <form id="formdanhsachdetai">
                <div class="themdetai">
                    <a href="/lecturers/dsdetai/themdetai" type="button" id="btn-themdetai" name="btn-themdetai"
                        class="btn btn-themdsdetai">Thêm đề tài</a>
                </div>
                <div style=" margin:20px 40px 0px 0px; border:2px solid #04AA6D; ">

                    <table boder=2 class="table table-hover  table-danhsachdetai">

                        <tr align="center" style=" border-bottom:1px solid black ; ">
                            <td class="stt">STT</td>
                            <td >MÃ ĐÊ TÀI </td>
                            <td >TÊN ĐỀ TÀI </td>
                            <td >MÔ TẢ CHI TIẾT </td>
                            <td style="padding-left:450px;" class="">CHỨC NĂNG </td>

                        </tr>
                        {{-- @foreach ($input as $row)  {{ $row->dt_ten }} --}}

                        <tr>
                            <td></td>
                            <td > </td>
                            <td > </td>
                            <td > </td>
                            <td align="right" class="chucnang">
                                <a href="/lecturers/dsdetai/suadetai"> <button type="button" class="btn btn-chucnang"
                                        onlink="sua();">Sửa</button></a>
                                <button type="button" class="btn btn-chucnang" onlink="xoa();">Xóa</button>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                        <tr align="center">
                            <td></td>
                            <td > </td>
                            <td > </td>
                            <td > </td>
                            <td>

                            </td>
                        </tr>

                        <tr align="center">
                            <td></td>
                            <td></td>
                            <td > </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td colspan=2></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td colspan=2></td>
                            <td></td>
                        </tr>

                    </table>
                </form>
            <div>
        </div>

    </div>






    @endsection

    @section('script')
        <script src="/js/homepage.js"></script>
        <script>
            $('#noti1').modal('show');
        </script>




    @endsection
