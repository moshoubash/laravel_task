@section('content')
    <div class="container">
        <h2>Users List</h2>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Postal Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->postal_code }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
