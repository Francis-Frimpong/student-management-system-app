<x-adminlayout>
    <x-slot:title>
        Add classes
    </x-slot:title>

        <div class="container d-flex justify-content-center align-items-center vh-100">

        <div class="auth-card card shadow p-4" style="width: 450px;">

            <form method="POST" action="{{ route('admin.addclass.storeclass') }}">
                @csrf

                <h3 class="text-center mb-4">Add Class</h3>

                <!-- Class Name -->
                <div class="mb-3">
                    <label class="form-label">Class Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter class name">
                </div>

                <!-- Assign Teacher -->
                <div class="mb-4">
                    <label class="form-label">Assign Teacher</label>

                    <select class="form-select" name="teacher_id">
                        <option value="">-- Select Teacher --</option>
                        @foreach ( $users as $user )

                            <option value="{{ $user->id }}">{{ $user->name}}</option>
                            
                        @endforeach
                       
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Add Class
                </button>

            </form>

        </div>

    </div>

</x-adminlayout>