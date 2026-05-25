<x-adminlayout>
    <x-slot:title>
        Add students
    </x-slot:title>

        <div class="container d-flex justify-content-center align-items-center vh-100">

        <div class="auth-card card shadow p-4" style="width: 450px;">

            <form method="POST" action="{{ route('admin.addstudent.storestudent') }}">
                @csrf

                <h3 class="text-center mb-4">Add Student</h3>

                <!-- Class Name -->
                <div class="mb-3">
                    <label class="form-label">Student Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter class name">
                </div>

                <!-- Assign Teacher -->
                <div class="mb-4">
                    <label class="form-label">Assign Class</label>

                    <select class="form-select" name="class_id">
                        <option value="">-- Select Class --</option>
                        @foreach ($schoolclass as $class )
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                      
                       
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">Choose Parent</label>

                    <select class="form-select" name="parent_id">
                        <option value="">-- Select Parent --</option>
                        
                        @foreach ($users as $user )
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
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