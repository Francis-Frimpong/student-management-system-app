<x-parentlayout>
  <x-slot:title>
    Parent Dashboard
  </x-slot:title>
   <!-- Attendance -->
  <div id="attendance">
    <h3>Attendance</h3>
    <div class="card p-3">
      <table class="table">
        @if ($children->isEmpty())
            <h3 class="text-center text-muted my-4">
                Attendance records not found.
          </h3>
        @else
        <thead>
          <tr><th>Child</th><th>Date</th><th>Status</th></tr>
        </thead>
        <tbody>
            @foreach ($children as $child)
            @foreach ($child->attendances as $attendance)
                <tr>
                    <td>{{ $child->name }}</td>
                    <td>{{ $attendance->date }}</td>
                    <td>{{ $attendance->status }}</td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
          
        @endif
      </table>
    </div>
  </div>
</x-parentlayout>