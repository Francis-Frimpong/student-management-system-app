<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>

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
    .sidebar{
    height: 100vh;
    display: flex;
    flex-direction: column;
}

.logout-section{
    margin-top: auto;
    margin-bottom: 15px
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
  <a href="{{ route('teacher.dashboard') }}">Dashboard</a>
  <a href="#" onclick="showPage('classes')">My Classes</a>
  <a href="#" onclick="showPage('students')">Students</a>
  <a href="#" onclick="showPage('attendance')">Attendance</a>
  <a href="#" onclick="showPage('assignments')">Assignments</a>
  
  <!-- Logout Button -->
  <div class="logout-section">
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          
          <button type="submit" class="btn btn-danger w-100">
              Logout
            </button>
        </form>
    </div>
</div>

<div class="main">

    {{ $slot }}


</div>
</body>
</html>
