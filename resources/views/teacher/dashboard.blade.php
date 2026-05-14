<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teacher Dashboard</title>

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
      background: #1e293b;
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
      background: #334155;
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
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
  <h4 class="text-center">Teacher</h4>
  <a href="#" onclick="showPage('dashboard')">Dashboard</a>
  <a href="#" onclick="showPage('classes')">My Classes</a>
  <a href="#" onclick="showPage('students')">Students</a>
  <a href="#" onclick="showPage('attendance')">Attendance</a>
  <a href="#" onclick="showPage('assignments')">Assignments</a>
</div>

<div class="main">

  <!-- Dashboard -->
  <div id="dashboard">
    <h3>Dashboard</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Total Classes</h5>
          <h2>3</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Total Students</h5>
          <h2>45</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3">
          <h5>Assignments</h5>
          <h2>8</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- Classes -->
  <div id="classes" class="hidden">
    <h3>My Classes</h3>
    <div class="card p-3">
      <table class="table">
        <thead>
          <tr><th>Class Name</th><th>Students</th></tr>
        </thead>
        <tbody>
          <tr><td>Class A</td><td>15</td></tr>
          <tr><td>Class B</td><td>20</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Students -->
  <div id="students" class="hidden">
    <h3>Students</h3>
    <div class="card p-3">
      <table class="table">
        <thead>
          <tr><th>Name</th><th>Class</th></tr>
        </thead>
        <tbody>
          <tr><td>John Doe</td><td>Class A</td></tr>
          <tr><td>Jane Doe</td><td>Class B</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Attendance -->
  <div id="attendance" class="hidden">
    <h3>Attendance</h3>
    <div class="card p-3">
      <table class="table">
        <thead>
          <tr><th>Name</th><th>Status</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>
              <select class="form-select">
                <option>Present</option>
                <option>Absent</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Assignments -->
  <div id="assignments" class="hidden">
    <h3>Assignments</h3>

    <div class="card p-3 mb-3">
      <h5>Create Assignment</h5>
      <input type="text" class="form-control mb-2" placeholder="Title">
      <textarea class="form-control mb-2" placeholder="Description"></textarea>
      <button class="btn btn-primary">Add</button>
    </div>

    <div class="card p-3">
      <h5>Assignment List</h5>
      <ul class="list-group">
        <li class="list-group-item">Math Homework</li>
        <li class="list-group-item">Bible Study</li>
      </ul>
    </div>
  </div>

</div>

<script>
  function showPage(page) {
    const pages = ['dashboard','classes','students','attendance','assignments'];
    pages.forEach(p => {
      document.getElementById(p).classList.add('hidden');
    });
    document.getElementById(page).classList.remove('hidden');
  }
</script>

</body>
</html>
