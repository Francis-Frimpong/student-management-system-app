<x-teacherlayout>
    <x-slot:title>
        View Message
    </x-slot:title>
   

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Message Details</h3>

        <a href="{{  route('teacher.messages') }}" class="btn btn-secondary">
            Back to Inbox
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <!-- Message Header -->
            <div class="mb-4">

                <h4 class="mb-3">
                    School Fees Reminder
                </h4>

                <div class="row">

                    <div class="col-md-6 mb-2">
                        <strong>From:</strong>
                        {{ $message->sender->name }}
                    </div>

                    <div class="col-md-6 mb-2">
                        <strong>To:</strong>
                         {{ $message->receiver->name }}
                        ({{ $message->receiver->role }})
                    </div>

                    <div class="col-md-6 mb-2">
                        <strong>Date:</strong>
                        {{ $message->created_at }}
                        
                    </div>

                    <div class="col-md-6 mb-2">
                        <strong>Status:</strong>
                        <span class="badge bg-success">
                            {{ $message->status }}
                        </span>
                    </div>

                </div>

            </div>

            <hr>

            <!-- Message Content -->
            <div class="message-body mt-4">

                Dear Parent,

                This is a reminder that school fees for the next term are due on 15th June 2026.

                Kindly ensure payment is made before the deadline to avoid any inconvenience.

                If you have already completed payment, please disregard this message.

                Thank you for your cooperation.

                Regards,
                School Administration
            </div>

            <hr class="my-4">

            <!-- Actions -->
            <div class="d-flex gap-2">

                <button class="btn btn-primary">
                    Reply
                </button>

                <button class="btn btn-danger">
                    Delete
                </button>

            </div>

        </div>
    </div>
</x-teacherlayout>