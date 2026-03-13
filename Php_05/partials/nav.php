
<aside class="sidebar">
  <div class="sidebar-logo">
    <div class="logo-icon"><i class="fas fa-users-gear"></i></div>
    <div class="logo-text">
      <div><span>EMS</span> Admin</div>
      <div class="logo-sub">Employee Management System</div>
    </div>
  </div>

  <nav class="sidebar-nav">
    <div class="nav-section-label">Main</div>
    <a class="nav-item active" href="./index.php?page=admin">
      <i class="fas fa-grid-2"></i> Dashboard
    </a>

    <div class="nav-section-label">Employees</div>
    <a class="nav-item" href="./index.php?page=all_employee">
      <i class="fas fa-users"></i> All Employees
      <span class="nav-badge">248</span>
    </a>
    <a class="nav-item" href="./index.php?page=add_employee">
      <i class="fas fa-user-plus"></i> Add Employee
    </a>
    <a class="nav-item" href="#">
      <i class="fas fa-building"></i> Departments
    </a>
    <a class="nav-item" href="#">
      <i class="fas fa-sitemap"></i> Positions
    </a>

    <div class="nav-section-label">Attendance & Leave</div>
    <a class="nav-item" href="#">
      <i class="fas fa-clock"></i> Attendance
      <span class="nav-badge">5</span>
    </a>
    <a class="nav-item" href="#">
      <i class="fas fa-calendar-xmark"></i> Leave Requests
      <span class="nav-badge">12</span>
    </a>
    <a class="nav-item" href="#">
      <i class="fas fa-calendar-check"></i> Holidays
    </a>

    <div class="nav-section-label">Payroll</div>
    <a class="nav-item" href="#">
      <i class="fas fa-money-bill-wave"></i> Payroll
    </a>
    <a class="nav-item" href="#">
      <i class="fas fa-file-invoice-dollar"></i> Payslips
    </a>

    <div class="nav-section-label">Reports</div>
    <a class="nav-item" href="#">
      <i class="fas fa-chart-bar"></i> Reports
    </a>
    <a class="nav-item" href="#">
      <i class="fas fa-gear"></i> Settings
    </a>
  </nav>

  <div class="sidebar-footer">
    <div class="admin-profile">
      <div class="avatar">JD</div>
      <div class="admin-info">
        <div class="admin-name">Juan Dela Cruz</div>
        <div class="admin-role">Super Admin</div>
      </div>
      <i class="fas fa-ellipsis-vertical" style="color:#64748b;font-size:13px;"></i>
    </div>
  </div>
</aside>


<header class="topbar">
  <div class="topbar-left">
    <div>
      <div class="page-title">Dashboard</div>
      <div class="breadcrumb">
        <i class="fas fa-house" style="font-size:10px;"></i>
        <span>/</span>
        <span>Overview</span>
      </div>
    </div>
  </div>

  <div class="search-bar">
    <i class="fas fa-magnifying-glass"></i>
    <input type="text" placeholder="Search employees, departments…" />
  </div>

  <div class="topbar-right">
    <button class="icon-btn" title="Notifications">
      <i class="fas fa-bell" style="font-size:14px;"></i>
      <span class="notif-dot"></span>
    </button>
    <button class="icon-btn" title="Messages">
      <i class="fas fa-envelope" style="font-size:14px;"></i>
    </button>
    <button class="icon-btn" title="Settings">
      <i class="fas fa-gear" style="font-size:14px;"></i>
    </button>


    <form class="logout-form" action="./include/logout.php" method="POST">

      <button type="submit" class="logout-btn">
        <i class="fas fa-right-from-bracket"></i>
        Logout
      </button>
    </form>
  </div>
</header>