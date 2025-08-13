@extends('layout.template-auth')

@section('content')
    <h4 class="text-center mb-4">Masuk ke akun Anda</h4>
    <form action="">
        <div class="form-group">
            <label class="mb-1">
                <strong>Email</strong>
            </label>
            <input type="email" class="form-control" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label class="mb-1">
                <strong>Password</strong>
            </label>
            <input type="password" class="form-control" placeholder="**********">
        </div>
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
            </div>
            <div class="form-group">
                <a href="">Lupa Kata Sandi?</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>
            Belum punya akun?
            <a class="text-primary" href="{{ route('register') }}">Daftar</a>
        </p>
    </div>
@endsection
