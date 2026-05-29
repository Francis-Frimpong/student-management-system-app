<x-teacherlayout>
    <x-slot:title>
      Teacher Dashboard
    </x-slot:title>

    <!-- Assignments -->
  <div id="assignments">
    <h3>Assignments</h3>

    <div class="card p-3 mb-3">
      <h5>Create Assignment</h5>
      <form method="POST" action="{{ route('teacher.assignments.storeassignments') }}">
        @csrf
        <input type="text" class="form-control mb-2" placeholder="Title" name="title">
        <textarea class="form-control mb-2" placeholder="Description" name="description"></textarea>

        <select name="class_id" class="form-control mb-2">
          <option >--- Select a Class ---</option>
          @foreach ($classes as $class )
          <option value="{{ $class->id }}">{{ $class->name}}</option>
            
          @endforeach
        </select>
        <button class="btn btn-primary">Add Assignment</button>

      </form>
    </div>

    <div class="card p-3">
      <h5>Assignment List</h5>
      @if ($assignments->isEmpty())
         <h3 class="text-center text-muted my-4">
                No assignment has been given..
          </h3>
      @else
        <ul class="list-group">
          @foreach ($assignments as $assignment )
            <li class="list-group-item">{{ $assignment->title }}</li>
            
          @endforeach
        </ul>
        
      @endif
    </div>
  </div>
</x-teacherlayout>