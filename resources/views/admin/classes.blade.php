<x-adminlayout>
    <x-slot:title>
        Admin Dashboard
    </x-slot:title>

    <!-- Classes -->
    <div class="card shadow-sm p-4 mb-4">

        <!-- Header with button -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Classes</h4>

            <a href="{{ route('admin.addclass')  }}" class="btn btn-primary">
                + Add Class
            </a>
        </div>

        <table class="table table-bordered">
          @if ($classes->isEmpty())
            <h3 class="text-center text-muted my-4">
                No class has been added.
            </h3>
          @else
            <thead>
                <tr>
                    <th>Class</th>
                    <th>Teacher</th>
                </tr>
            </thead>

            <tbody>
              @foreach ($classes as $class )
              <tr>
                  <td>{{ $class->name }}</td>
                  <td>{{ $class->teacher->name }}</td>
              </tr>
                
              @endforeach
            </tbody>
          @endif
        </table>

    </div>

</x-adminlayout>