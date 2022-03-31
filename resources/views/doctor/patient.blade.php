@extends('layouts.doctornav')

@section('title', 'patient records')

@section('content')
    <div id="maincont1">
        <div class="text-center">
            <hr>
            <h4>PATIENT`S RECORDS</h4>
            <hr>
            @if (session()->has('status'))
                <span class="alert alert-success">
                    {{ session('status') }}
                </span>
            @endif
        </div>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Phone Number</th>
            </tr>
            @foreach ($patient as $p)
                <tr>
                    <td>{{ $p->fname }}</td>
                    <td>{{ $p->lname }}</td>
                    <td>{{ $p->gender }}</td>
                    <td>{{ $p->phone }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
