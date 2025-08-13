@extends('layout.template-auth')

@section('content')
    <h4 class="text-center mb-4">Daftarkan akun Anda</h4>
    <form action="" method="POST">
        <div class="form-group">
            <label class="mb-1">
                <strong>Username</strong>
            </label>
            <input type="text" class="form-control" name="name" placeholder="Masukkan username">
        </div>
        <div class="form-group">
            <label class="mb-1">
                <strong>Email</strong>
            </label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan email">
        </div>
        <div class="form-group">
            <label class="mb-1">
                <strong>Password</strong>
            </label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan password">
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>
            Sudah punya akun?
            <a class="text-primary" href="{{ route('login') }}">Masuk</a>
        </p>
    </div>
@endsection
