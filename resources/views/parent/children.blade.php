<x-parentlayout>
  <x-slot:title>
    Parent Dashboard
</x-slot:title>
    <!-- Children -->
  <div id="children">
    <h3>My Children</h3>

    <div class="row">
      @if ($children->isEmpty())
          <h3 class="text-center text-muted my-4">
                Children not found. Please contact the school administration to link your account with your children.
          </h3>
      @else
        @foreach ($children as $child)
        <div class="col-md-6">
          <div class="card p-3 child-card">
            <h5>{{ $child->name}}</h5>
            <p>Class: {{ $child->studentclass->name }}</p>
          </div>
        </div>
          
        @endforeach
      @endif

    </div>
  </div>
</x-parentlayout>