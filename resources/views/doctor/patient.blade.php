<div id="maincont1">
    <div class="text-center">
        <hr>
        <h1>PATIENT`S RECORDS</h1>
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