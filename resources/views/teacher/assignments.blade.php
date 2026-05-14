<x-teacherlayout>
    <x-slot:title>
      Teacher Dashboard
    </x-slot:title>

    <!-- Assignments -->
  <div id="assignments" class="hidden">
    <h3>Assignments</h3>

    <div class="card p-3 mb-3">
      <h5>Create Assignment</h5>
      <input type="text" class="form-control mb-2" placeholder="Title">
      <textarea class="form-control mb-2" placeholder="Description"></textarea>
      <button class="btn btn-primary">Add</button>
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