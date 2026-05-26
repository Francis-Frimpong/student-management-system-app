<x-teacherlayout>
    <x-slot:title>
      Teacher Dashboard
    </x-slot:title>

     <!-- Dashboard -->
  <div id="dashboard">
    <h3>Dashboard</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Total Classes</h5>
          <h2>{{$totalClasses}}</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Total Students</h5>
          <h2>{{$totalStudents}}</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Assignments</h5>
          <h2>8</h2>
        </div>
      </div>
    </div>
  </div>
</x-teacherlayout>