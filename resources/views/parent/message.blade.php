<x-parentlayout>

    <x-slot:title>
        Inbox
    </x-slot:title>
      <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Inbox</h3>
    <a href="{{ route('teacher.composeMessage')}}" class="btn btn-primary btn-sm">Compose Message</a>
  </div>

  <!-- Inbox Card -->
  <div class="card shadow-sm">
      
      <!-- Messages Table -->
      <table class="table table-hover align-middle">
          @if ($messages->isEmpty())
            <div class="text-center text-muted py-5">
                <h5>No messages found</h5>
                <p>Your inbox is empty</p>
            </div>
            
        @else
            
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
            @foreach ($messages as $message )
                
            <tr>
              <td>{{$message->sender->name}} ({{$message->sender->role}})</td>

              <td>{{ \Illuminate\Support\Str::limit($message->message, 20) }}</td>
              
              <td>{{ $message->created_at}}</td>
              <td><span class="badge {{ $message->status === 'unread' ? 'badge-unread' : 'badge-read' }}">{{$message->status}}</span></td>
              
              <td>
                <a href="{{ route('teacher.viewMessage', $message->id) }}" class="btn btn-sm btn-primary">View</a>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>
            @endforeach
        @endif


      </tbody>

    </table>

  </div>

</x-parentlayout>