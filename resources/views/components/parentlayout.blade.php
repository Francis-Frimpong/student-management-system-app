<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ isset($title) ? $title : 'dashboard' }}</title>

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

    .sidebar{
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .logout-section{
        margin-top: auto;
        margin-bottom: 15px;
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

<div class="sidebar">
  <h4 class="text-center">Parent</h4>

  <a href="{{ route('parent.dashboard') }}">Dashboard</a>
  <a href="{{ route('parent.children') }}">My Children</a>
  <a href="{{ route('parent.attendance') }}">Attendance</a>
  <a href="{{ route('parent.message') }}">Messages</a>

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
