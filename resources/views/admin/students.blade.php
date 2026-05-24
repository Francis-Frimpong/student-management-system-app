<x-adminlayout>
    <x-slot:title>
      Admin Dashboard
    </x-slot:title>
       
      <!-- Students -->
      <div class="card shadow-sm p-4 mb-4">
         <!-- Header with button -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Student</h4>

            <a href="{{ route('admin.addstudent')  }}" class="btn btn-primary">
                + Add Student
            </a>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Class</th>
              <th>Parent</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Jane Doe</td>
              <td>Class B</td>
              <td>Mr Doe</td>
            </tr>
          </tbody>
        </table>
      </div>


</x-adminlayout>