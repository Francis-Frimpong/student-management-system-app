<x-parentlayout>
    <x-slot:title>
        Compose Message
    </x-slot:title>


       <div class="container page-container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Compose Message</h3>

            <a href="{{  route('parent.message') }}" class="btn btn-secondary">
                Back to Inbox
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">

                <form method="POST" action="{{ route('parent.storeMessage') }}">
                    @csrf

                    <!-- Recipient -->
                    <div class="mb-3">
                        <label class="form-label">Send To</label>

                        <select class="form-select" name="receiver_id">
                            <option selected disabled>
                                --- Select Recipient ---
                            </option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">
                                {{ $user->name}}
                                ({{ $user->role }})
                            </option>
                                
                            @endforeach

                          
                        </select>
                    </div>

            
                    <!-- Message -->
                    <div class="mb-3">
                        <label class="form-label">Message</label>

                        <textarea
                            class="form-control"
                            rows="8"
                            name="message"
                            placeholder="Type your message here..."></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            Send Message
                        </button>

                        <button type="reset" class="btn btn-outline-secondary">
                            Clear
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</x-parentlayout>