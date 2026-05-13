<x-parentlayout>
  <x-slot:title>
    Parent Dashboard
  </x-slot:title>
   <!-- Attendance -->
  <div id="attendance">
    <h3>Attendance</h3>
    <div class="card p-3">
      <table class="table">
        <thead>
          <tr><th>Child</th><th>Date</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr><td>John Doe</td><td>2026-04-01</td><td>Present</td></tr>
          <tr><td>Jane Doe</td><td>2026-04-01</td><td>Absent</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</x-parentlayout>