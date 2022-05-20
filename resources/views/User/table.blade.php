<div class="table-responsive">
    <table class="table" id="questions-table">
        <thead>
        <tr>
            <th>no</th>
            <th>first name</th>
        <th>last name</th>
        <th>gender</th>
        <th>profile</th>
        <th>email</th> 
        </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
        @foreach($users as $user)
            <tr>
                <td>{{ $i++;  }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->profile }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
