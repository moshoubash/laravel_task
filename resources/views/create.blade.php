@section('content')
    <div class="container">
        <h2>Create User</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Country</label>
                <input type="text" name="country" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Postal Code</label>
                <input type="text" name="postal_code" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
