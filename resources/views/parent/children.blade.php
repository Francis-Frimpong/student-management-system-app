<x-parentlayout>
  <x-slot:title>
    Parent Dashboard
  <x-slot:title>
    <!-- Children -->
  <div id="children" class="hidden">
    <h3>My Children</h3>

    <div class="row">
      <div class="col-md-6">
        <div class="card p-3 child-card">
          <h5>John Doe</h5>
          <p>Class: Class A</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card p-3 child-card">
          <h5>Jane Doe</h5>
          <p>Class: Class B</p>
        </div>
      </div>
    </div>
  </div>
</x-parentlayout>