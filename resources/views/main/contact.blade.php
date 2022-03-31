@extends('layouts.main')

@section('title', 'contact us')

@section('content')

    <div id="maincont">
        <center>
            <div class="contact">
                <form action="{{ route('contact.post') }}" method="POST" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    @if (session()->has('status'))
                        <p class="alert alert-success">{{ session('status') }}</p>
                    @endif
                    <h1>SEND US A MESSAGE</h1>
                    <p>Full Name: </p>
                    <p><input type="text" name="name" id="name"></p>
                    <p>Email:</p>
                    <p><input type="email" name="email" id=""></p>
                    <p>Message</p>
                    <p>
                        <textarea name="msg" id="msg" cols="70" rows="10"></textarea>
                    </p>
                    <p>
                        <button class="btn btn-warning">SEND</button>
                    </p>
                </form>
            </div>
        </center>
    </div>

@endsection
