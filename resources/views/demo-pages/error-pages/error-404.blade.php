@extends('layout.master-mini')

@section('content')
<div class="content-wrapper d-flex align-items-center justify-content-center auth"
    style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
    <div class="row w-100">
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
                <h1 class="text-warning">404 - Page not found!</h1>
                <a href="{{ url('') }}">
                    <h6>Go home</h6>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
