<x-adminlayout>
    <x-slot:title>
        Admin Dashboard
    </x-slot:title>

    <!-- Classes -->
    <div class="card shadow-sm p-4 mb-4">

        <!-- Header with button -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Classes</h4>

            <a href="{{ route('admin.addclass')  }}" class="btn btn-primary">
                + Add Class
            </a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Class</th>
                    <th>Teacher</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Class A</td>
                    <td>Mr Smith</td>
                </tr>
            </tbody>
        </table>

    </div>

</x-adminlayout>