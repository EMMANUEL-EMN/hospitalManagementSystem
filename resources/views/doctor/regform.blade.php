<div>
    <center>
        <div id="maincont">
            <h3>PATIENT REGISTRATION </h3>
            @if (session()->has('status'))
                <p class="alert alert-success">{{ session('status') }}</p>
            @endif
            <form action="{{ route('patient.reg') }}" method="POST" enctype="multipart/form-data">
                @method('post')
                @csrf
            <table>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="fname" id="fname" placeholder="john"></td>
                    <td><input type="text" name="lname" id="lname" placeholder="magufuli"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>Email</td>
                </tr>
                <tr>
                    <td><input type="text" name="gender" id="gender" placeholder="male,female or others"></td>
                    <td><input type="text" name="email" id="email" placeholder="xyz@gmail.com"></td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td>Marital Status</td>
                </tr>
                <tr>
                    <td><input type="date" name="date" id="date" ></td>
                    <td><input type="text" name="status" id="status" placeholder="single or married "></td>
                </tr>
                <tr>
                    <td>ID Number</td>
                    <td>Phone Number</td>
                </tr>
                <tr>
                    <td><input type="number" name="NID" id="NID" ></td>
                    <td><input type="number" name="tel" id="tel" ></td>
                </tr>
                <tr>
                    <td><button class="btn btn-warning">REGISTER</button></td>
                </tr>
            </table>
            </form>
        </div>
        
    </center>
</div>