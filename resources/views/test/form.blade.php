@extends('layouts.web')

@section('title', 'Test form')

@section('style')

@endsection

@section('content')
    <div class="container d-flex justify-content-center">

        {{-- form phai co id, class phai co 'needs-validation', phai co novalidate --}}
        <form id="formRegister" action="/form/get" method="get" class="w-50 mt-3 needs-validation" novalidate>
            @csrf

            <div class="row mb-4">
                <div class="col">
                    {{-- input, label, invalid-feedback phai di chung vs nhau --}}
                    <div class="form-outline">
                        <input type="text" id="firstName" name="firstName" class="form-control batbuoc" />
                        <label class="form-label" for="firstName">First name</label>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="lastName" name="lastName" class="form-control batbuoc" />
                        <label class="form-label" for="lastName">Last name</label>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" id="email" name="email" class="form-control ithon15" />
                <label class="form-label" for="email">Email address</label>
                <div class="invalid-feedback"></div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" />
                <label class="form-label" for="password">Password</label>
                <div class="invalid-feedback"></div>
            </div>

            <!-- Submit button -->

            {{-- phai co button submit --}}
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

        </form>

    </div>
@endsection

@section('script')
<script src="/js/form-validation.js"></script>
<script>
    // .... id formRegister
    $(function(){ // Chi chay khi toan bo trang da load xong

        // muon validate cho field nao thi, gan class vo the input cua field do
        let config = {

            // neu check value loi thi return errror message, neu khong loi thi return undefined
            'khoang05': (value) => {// return undefined hoac error message
                if (value < 5 && value > 0) {
                    return "Số không được trong đoạn [0-5]";
                }
            },

            'batbuoc': (value) => {
                if (value) {
                    //value co gia tri
                    return undefined;
                } else {
                    //value empty, undefined, null
                    return "Bắt buộc";
                }
            },

            'require': (value) => {
                if (!value) {
                    //value empty, undefined, null
                    return "Bắt buộc";
                }
            },

            'ithon15': (value) => {
                if (value.length > 15) {
                    return "Không được quá 15 ký tự";
                }
            },

        }

        setValidation('formRegister', config);
    })

</script>
@endsection
