<x-teacherlayout>
    <x-slot:title>
      Teacher Dashboard
    </x-slot:title>

    
  <!-- Attendance -->
  <div id="attendance">
    <h3>Attendance</h3>
    <div class="card p-3">
      <form method="POST" action="{{ route('teacher.attendance.storeattendance') }}">
    @csrf

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>

                <td>
                    <select name="attendance[{{ $student->id }}]" class="form-select">
                        <option value="present">Present</option>
                        <option value="absent">Absent</option>
                    </select>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button type="submit" class="btn btn-primary">
        Save Attendance
    </button>
</form>
    </div>
  </div>
</x-teacherlayout>