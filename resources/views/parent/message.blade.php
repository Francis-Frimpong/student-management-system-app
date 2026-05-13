<x-parentlayout>
  <x-slot:title>
    Parent Dashboard
</x-slot:title>
 <!-- Messages -->
  <div id="messages">
    <h3>Messages</h3>

    <div class="card p-3 mb-3">
      <h5>Send Message</h5>
      <input type="text" class="form-control mb-2" placeholder="Subject">
      <textarea class="form-control mb-2" placeholder="Message"></textarea>
      <button class="btn btn-primary">Send</button>
    </div>

    <div class="card p-3">
      <h5>Inbox</h5>
      <ul class="list-group">
        <li class="list-group-item">Teacher: Please review homework</li>
        <li class="list-group-item">Admin: Meeting on Friday</li>
      </ul>
    </div>
  </div>
</x-parentlayout>