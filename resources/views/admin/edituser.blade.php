<x-adminlayout>
    <x-slot:title>
        Edit User
</x-slot:title>

     <div class="container d-flex justify-content-center align-items-center vh-100">
    
    <div class="auth-card">
        <form  method="POST" action="{{ route('admin.addusers.store', $user->id) }}">
            @csrf

            <h4 class="text-center mb-3">Edit User</h4>

            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Enter full name" name="name" value="{{ $user->name }}">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $user->email }}">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Leave blank to keep current password" name="password">
            </div>

           <div class="mb-3 role-select">
                <label>Register as</label>

                <select class="form-select" name="role">

                    <option value="teacher"
                        {{ $user->role == 'teacher' ? 'selected' : '' }}>
                        Teacher
                    </option>

                    <option value="parent"
                        {{ $user->role == 'parent' ? 'selected' : '' }}>
                        Parent
                    </option>

                </select>
            </div>

            <button class="btn btn-success w-100">Update User</button>
        </form>
    </div>

</div>
</x-adminlayout>