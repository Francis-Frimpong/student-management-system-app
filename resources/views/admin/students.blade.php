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
          @if ($students->isEmpty())
             <h3 class="text-center text-muted my-4">
                No student has been added.
            </h3>
          @else
            <thead>
              <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Parent</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($students as $student )
              <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->class->name }}</td>
                <td>{{ $student->teacher->name }}</td>
              </tr>
                
              @endforeach
            </tbody>
            
          @endif
        </table>
      </div>


</x-adminlayout>