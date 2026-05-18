<x-adminlayout>
    <x-slot:title>
      Admin Dashboard
    </x-slot:title>
     <h2 class="mb-4">Admin Dashboard</h2>

      <!-- Stats -->
      <div class="row mb-4">
        <div class="col-md-3">
          <div class="card shadow-sm p-3">
            <h6>Total Teachers</h6>
            <h2>{{$totalTeachers}}</h2>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm p-3">
            <h6>Total Parents</h6>
            <h2>{{$totalParents}}</h2>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm p-3">
            <h6>Total Students</h6>
            <h2>{{ $totalStudents }}</h2>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm p-3">
            <h6>Total Classes</h6>
            <h2>{{$totalClasses}}</h2>
          </div>
        </div>
      </div>

</x-adminlayout>