@extends('layout/aplikasi')

@section('konten')
    <div class="w-10 center border rounded px-3 py-3 mx-auto">
        <h1>Masukan<h1>
            <form action="/author/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" name="username"class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn
                    btn-prymary">Login</button>
                </div>