<x-adminlayout>
    <x-slot:title>
        Admin Dashboard
    </x-slot:title>

    <div class="card shadow-sm p-4 mb-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Manage Users</h4>
            <a href="{{ route('admin.addusers') }}" class="btn btn-primary">
                Add User
            </a>
        </div>

        @if ($users->isEmpty())

            <h3 class="text-center text-muted mt-4">
                No user added
            </h3>

        @else

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif

    </div>
</x-adminlayout>