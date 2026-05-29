<x-parentlayout>
  <x-slot:title>
    Parent Dashboard
  </x-slot:title>
      <!-- Dashboard -->
  <div id="dashboard">
    <h3>Dashboard</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Total Children</h5>
          <h2>{{ $totalChildren }}</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Attendance Rate</h5>
            <h2>{{$combined}}%</h2>
            
        </div>
      </div>
    </div>
  </div>
</x-parentlayout>