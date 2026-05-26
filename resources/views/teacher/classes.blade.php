<x-teacherlayout>
  
    <x-slot:title>
      Teacher Dashboard
    </x-slot:title>

    <!-- Classes -->
  <div id="classes">
    <h3>My Classes</h3>
    <div class="card p-3">
      <table class="table">
        @if ($classes->isEmpty())
          <h3 class="text-center text-muted my-4">
                You've not been assign a class.
            </h3>
        @else
          <thead>
            <tr><th>Class Name</th><th>Students</th></tr>
          </thead>
          <tbody>
            @foreach ($classes as $class )
              
                <tr><td>{{$class->name}}</td><td>{{$class->students_count}}</td></tr>
                
            @endforeach
          </tbody>
          
        @endif
      </table>
    </div>
  </div>

</x-teacherlayout>