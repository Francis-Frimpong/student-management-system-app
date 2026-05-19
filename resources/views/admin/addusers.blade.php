<x-adminlayout>
    <x-slot:title>
        Add User
    </x-slot:title>

   <div class="container d-flex justify-content-center align-items-center vh-100">
    
    <div class="auth-card">
        <form  method="POST" action="/addusers">
            @csrf

            <h4 class="text-center mb-3">Add User</h4>

            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Enter full name" name="name">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Create password" name="password">
            </div>

            <div class="mb-3 role-select">
                <label>Register as</label>
                <select class="form-select" name="role">
                    <option value="teacher">Teacher</option>
                    <option value="parent">Parent</option>
                </select>
            </div>

            <button class="btn btn-success w-100">Add User</button>
        </form>
    </div>

</div>
</x-adminlayout>