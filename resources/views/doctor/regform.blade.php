@extends('layouts.doctornav')

@section('title', 'patient registration')

@section('content')
    <div class="regPatient">
        <hr>
        <h4 class="text-center">REGISTER PATIENTS</h4>
        <hr>
        <form action="{{ route('patient.reg') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <table>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="fname" id="fname" required></td>
                    <td><input type="text" name="lname" id="fname" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>Marrital status</td>
                </tr>
                <tr>
                    <td>
                        <select name="gender" id="gender">
                            <option value="" selected></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </td>
                    <td>
                        <select name="status" id="status">
                            <option value=""></option>
                            <option value="married">Married</option>
                            <option value="single">Single</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>Date</td>
                </tr>
                <tr>
                    <td><input type="email" name="email" id="email" required></td>
                    <td><input type="date" name="date" id="date" required></td>
                </tr>
                <tr>
                    <td>ID Number</td>
                    <td>Telephone Number</td>
                </tr>
                <tr>
                    <td><input type="number" name="NID" id="NID" required></td>
                    <td><input type="text" name="tel" id="tel" required></td>
                </tr>
                <tr>
                    <td><button class="btn btn-warning">REGISTER</button></td>
                </tr>
            </table>
        </form>
    </div>
@endsection
