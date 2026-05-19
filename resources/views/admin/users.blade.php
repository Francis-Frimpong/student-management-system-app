<x-adminlayout>
    <x-slot:title>
      Admin Dashboard
    </x-slot:title>
      <!-- Manage Users -->
      <div class="card shadow-sm p-4 mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4>Manage Users</h4>
          <button class="btn btn-primary">  <a href="{{ route('admin.addusers') }}" class="nav-link text-white">Add User</a></button>
          
        </div>

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
            <tr>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>Teacher</td>
              <td>
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

</x-adminlayout>