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

    .page-container {
          max-width: 800px;
          margin: 40px auto;
    }

    .card {
          border-radius: 12px;
    }

    .container {
      margin-top: 30px;
    }

    .card {
      border-radius: 10px;
      padding: 20px;
    }

    .badge-read {
      background: #28a745;
    }

    .badge-unread {
      background: #ffc107;
      color: black;
    }

    .sidebar {
      height: 100vh;
      width: 240px;
      position: fixed;
      background: #1e293b;
      color: white;
      padding-top: 20px;
      display: flex;
      flex-direction: column;
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

    .logout-section{
      margin-top: auto;
      margin-bottom: 15px;
      padding: 0 15px;
    }

    .main {
      margin-left: 240px;
      padding: 20px;
    }

    .card {
      border-radius: 10px;
    }

    .badge-inbox {
      background: red;
      font-size: 10px;
      margin-left: 6px;
    }
  </style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">

   <h4 class="text-center mb-4">Admin</h4>

   <ul class="nav flex-column">

        <li class="nav-item mb-2">
          <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">Dashboard</a>
        </li>

        <li class="nav-item mb-2">
          <a href="{{ route('admin.users') }}" class="nav-link text-white">Manage Users</a>
        </li>

        <li class="nav-item mb-2">
          <a href="{{ route('admin.classes') }}" class="nav-link text-white">Classes</a>
        </li>

        <li class="nav-item mb-2">
          <a href="{{ route('admin.students') }}" class="nav-link text-white">Students</a>
        </li>

        <!-- ✅ NEW INBOX SECTION -->
        <li class="nav-item mb-2">
          <a href="{{ route('admin.messages') }}" class="nav-link text-white">
            Inbox
            <!-- optional badge -->
            <span class="badge badge-inbox">0</span>
          </a>
        </li>

   </ul>

   <!-- Logout -->
   <div class="logout-section">
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger w-100">
              Logout
          </button>
      </form>
   </div>

</div>

<!-- Main Content -->
<div class="main">
    {{ $slot }}
</div>

</body>
</html>