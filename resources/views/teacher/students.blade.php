
<x-teacherlayout>
    <x-slot:title>
      Teacher Dashboard
    </x-slot:title>

    
        
  <!-- Students -->
  <div id="students">
    <h3>Students</h3>
    <div class="card p-3">
      <table class="table">
        @if ($students->isEmpty())
          <h3 class="text-center text-muted my-4">
                You've not been assign a student.
          </h3>
        @else
        <thead>
          <tr><th>Name</th><th>Class</th></tr>
        </thead>
        <tbody>
          @foreach ( $students as $student)

          <tr><td>{{$student->name}}</td><td>{{$student->studentclass->name}}</td></tr>
        
            
          @endforeach
        </tbody>
      </table>
          
        @endif
    </div>
  </div>
</x-teacherlayout>