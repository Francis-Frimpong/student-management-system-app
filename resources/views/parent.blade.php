<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Parent Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f6f9;
    }

    .sidebar {
      height: 100vh;
      width: 240px;
      position: fixed;
      background: #0f172a;
      color: white;
      padding-top: 20px;
    }

    .sidebar a {
      display: block;
      color: #cbd5f5;
      padding: 12px 20px;
      text-decoration: none;
    }

    .sidebar a:hover {
      background: #1e293b;
      color: #fff;
    }

    .main {
      margin-left: 240px;
      padding: 20px;
    }

    .card {
      border-radius: 10px;
    }

    .hidden {
      display: none;
    }

    .child-card {
      border-left: 5px solid #0d6efd;
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
  <h4 class="text-center">Parent</h4>
  <a href="#" onclick="showPage('dashboard')">Dashboard</a>
  <a href="#" onclick="showPage('children')">My Children</a>
  <a href="#" onclick="showPage('attendance')">Attendance</a>
  <a href="#" onclick="showPage('messages')">Messages</a>
</div>

<div class="main">

  <!-- Dashboard -->
  <div id="dashboard">
    <h3>Dashboard</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Total Children</h5>
          <h2>2</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Attendance Rate</h5>
          <h2>95%</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- Children -->
  <div id="children" class="hidden">
    <h3>My Children</h3>

    <div class="row">
      <div class="col-md-6">
        <div class="card p-3 child-card">
          <h5>John Doe</h5>
          <p>Class: Class A</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card p-3 child-card">
          <h5>Jane Doe</h5>
          <p>Class: Class B</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Attendance -->
  <div id="attendance" class="hidden">
    <h3>Attendance</h3>
    <div class="card p-3">
      <table class="table">
        <thead>
          <tr><th>Child</th><th>Date</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr><td>John Doe</td><td>2026-04-01</td><td>Present</td></tr>
          <tr><td>Jane Doe</td><td>2026-04-01</td><td>Absent</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Messages -->
  <div id="messages" class="hidden">
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

</div>

<script>
  function showPage(page) {
    const pages = ['dashboard','children','attendance','messages'];
    pages.forEach(p => {
      document.getElementById(p).classList.add('hidden');
    });
    document.getElementById(page).classList.remove('hidden');
  }
</script>

</body>
</html>
