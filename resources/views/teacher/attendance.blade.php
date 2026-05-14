<x-teacherlayout>
    <x-slot:title>
      Teacher Dashboard
    </x-slot:title>

    
  <!-- Attendance -->
  <div id="attendance">
    <h3>Attendance</h3>
    <div class="card p-3">
      <table class="table">
        <thead>
          <tr><th>Name</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>
              <select class="form-select">
                <option>Present</option>
                <option>Absent</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</x-teacherlayout>