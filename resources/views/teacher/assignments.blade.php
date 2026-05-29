<x-teacherlayout>
    <x-slot:title>
      Teacher Dashboard
    </x-slot:title>

    <!-- Assignments -->
  <div id="assignments">
    <h3>Assignments</h3>

    <div class="card p-3 mb-3">
      <h5>Create Assignment</h5>
      <form method="POST" action="">
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
      <ul class="list-group">
        <li class="list-group-item">Math Homework</li>
        <li class="list-group-item">Bible Study</li>
      </ul>
    </div>
  </div>
</x-teacherlayout>