@extends('layouts.main')

@section('title', 'login')

@section('content')

    <div class="luser">
        <center>
            <div class="loginForm">
                <form action="{{ route('user.auth') }}" method="POST" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    @if (session()->has('status'))
                        <span class="alert alert-danger">
                            {{ session('status') }}
                        </span>
                    @endif
                    <div class="linf">
                        <h4><u>LOGIN TO DASHBOARD</u></h4>
                    </div>
                    <div class="username">
                        <label for="">
                            <i class="fa fa-user"></i> Username</label>
                        <br>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="pass">
                        <label for="">
                            <i class="fa fa-key"></i> Password</label>
                        <br>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="lbtn text-left">
                        <br>
                        <button class="btn btn-warning">LOGIN</button>
                    </div>
                </form>
            </div>
        </center>
    </div>

@endsection
