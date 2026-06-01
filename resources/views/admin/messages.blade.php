<x-adminlayout>
    <x-slot:title>
        Inbox
    </x-slot:title>
      <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Inbox</h3>
    <a href="{{ route('admin.composeMessage')}}" class="btn btn-primary btn-sm">Compose Message</a>
  </div>

  <!-- Inbox Card -->
  <div class="card shadow-sm">

    <!-- If no messages -->
    <!--
    <div class="text-center text-muted py-5">
      <h5>No messages found</h5>
      <p>Your inbox is empty</p>
    </div>
    -->

    <!-- Messages Table -->
    <table class="table table-hover align-middle">

      <thead class="table-light">
        <tr>
          <th>From</th>
          <th>Message</th>
          <th>Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>Mr. Johnson (Teacher)</td>
          <td>Your child was late to school today</td>
          <td>30 May 2026 09:15</td>
          <td><span class="badge badge-unread">Unread</span></td>
          <td>
            <button class="btn btn-sm btn-primary">View</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>

        <tr>
          <td>Admin Office</td>
          <td>School fees reminder for next term</td>
          <td>29 May 2026 14:40</td>
          <td><span class="badge badge-read">Read</span></td>
          <td>
            <button class="btn btn-sm btn-primary">View</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>

        <tr>
          <td>Ms. Sarah (Teacher)</td>
          <td>Assignment has been updated for Class 3</td>
          <td>28 May 2026 11:05</td>
          <td><span class="badge badge-unread">Unread</span></td>
          <td>
            <a href="{{ route('admin.viewMessage') }}" class="btn btn-sm btn-primary">View</a>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>

      </tbody>

    </table>

  </div>
</x-adminlayout>