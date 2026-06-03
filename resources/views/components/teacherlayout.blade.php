<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ isset($title) ? $title : 'dashboard' }}</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
  <a href="{{ route('teacher.classes') }}">My Classes</a>
  <a href="{{ route('teacher.students') }}">Students</a>
  <a href="{{ route('teacher.attendance') }}">Attendance</a>
  <a href="{{ route('teacher.assignments') }}">Assignments</a>

  <ul>
    
  </ul>
   <!-- ✅ NEW INBOX SECTION -->
        <li class="nav-item mb-2">
          <a href="{{ route('teacher.messages') }}" class="nav-link text-white">
            Inbox
            <!-- optional badge -->
             @if($unreadCount > 0)
                <span class="badge bg-danger">
                    {{ $unreadCount }}
                </span>
            @endif
          </a>
        </li>
      <!-- ✅ NEW SENT SECTION -->
      <li class="nav-item mb-2">
        <a href="{{ route('admin.sentMessage')}}" class="nav-link text-white">
          Sent
          <i class="bi bi-send-fill me-2"></i>
        </a>
      </li>
  
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
