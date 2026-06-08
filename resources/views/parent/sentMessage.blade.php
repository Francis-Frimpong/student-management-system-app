<x-parentlayout>
    <x-slot:title>
        Sent Messages
    </x-slot:title>
   

    <h3>Sent Messages</h3>

    <table class="table table-hover">
        @if ($messages->isEmpty())
            <h3 class="text-center text-muted mt-4">
                No message has been sent.
            </h3>
        @else
            
            <thead>
                <tr>
                    <th>To</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->receiver->name  }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($message->message, 10) }}</td>
                    <td>{{ $message->created_at}}</td>
                </tr>
                    
                @endforeach
            
            </tbody>
        @endif
    </table>
</x-parentlayout>