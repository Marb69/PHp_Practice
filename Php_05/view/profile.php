<?php


include './middleware/employee.php';

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<header class="header-profile">
    <div class="header-inner">
        <a class="brand-profile" href="#">
            <div class="brand-icon">
                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 20h5v-2a4 4 0 00-5-3.87M9 20H4v-2a4 4 0 015-3.87m6 5.87H9m6 0v-2a6 6 0 10-12 0v2" />
                </svg>
            </div>
            <span class="brand-name">Employee Portal</span>
        </a>

        <div class="header-right">
            <div class="welcome-pill">
                <div class="avatar">JM</div>
                <span>Welcome, <strong>Jhon</strong></span>
            </div>


            <form method="POST" action="./include/logout.php">
                <button type="submit" class="btn-logout">
                    <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>


<main class="main-profile">


    <div class="card full">
        <div class="card-header-profile">
            <div class="card-header-icon icon-blue">
                <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.121 17.804A9 9 0 1118.88 6.196M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <div>
                <div class="card-title">Employee Information</div>
                <div class="card-subtitle">Your current profile details</div>
            </div>
        </div>
        <div class="card-body">
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">Employee ID</div>
                    <div class="info-value mono">#1023</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Full Name</div>
                    <div class="info-value">Jhon Marb</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Email</div>
                    <div class="info-value">jhon@email.com</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Department</div>
                    <div class="info-value"><span class="badge badge-blue">IT</span></div>
                </div>
                <div class="info-item">
                    <div class="info-label">Position</div>
                    <div class="info-value">Web Developer</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Date Hired</div>
                    <div class="info-value">Jan 10, 2024</div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header-profile">
            <div class="card-header-icon icon-green">
                <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10" />
                    <path stroke-linecap="round" d="M12 6v6l4 2" />
                </svg>
            </div>
            <div>
                <div class="card-title">Today's Attendance</div>
                <div class="card-subtitle" id="today-date">Loading date…</div>
            </div>
        </div>

        <div class="card-body">
            <div class="clock-display">
                <div class="clock-time" id="live-clock">--:--:--</div>
                <div class="clock-date" id="live-day">–</div>
            </div>

            <div class="status-row">
                <div class="dot dot-green"></div>
                <span class="status-text">You haven't clocked in yet today</span>
            </div>

            <div class="att-buttons">

                <form method="POST" action="time_in.php">
                    <input type="hidden" name="employee_id" value="1023" />
                    <button type="submit" class="btn-timein">
                        <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14" />
                        </svg>
                        Time In
                    </button>
                </form>


                <form method="POST" action="time_out.php">
                    <input type="hidden" name="employee_id" value="1023" />
                    <button type="submit" class="btn-timeout">
                        <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Time Out
                    </button>
                </form>
            </div>
        </div>

        <div class="stats-strip">
            <div class="stat-cell">
                <div class="stat-num green">22</div>
                <div class="stat-lbl">Present</div>
            </div>
            <div class="stat-cell">
                <div class="stat-num amber">2</div>
                <div class="stat-lbl">Late</div>
            </div>
            <div class="stat-cell">
                <div class="stat-num red">1</div>
                <div class="stat-lbl">Absent</div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header-profile">
            <div class="card-header-icon icon-amber">
                <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>
            <div>
                <div class="card-title">Attendance History</div>
                <div class="card-subtitle">Recent records — March 2025</div>
            </div>
        </div>
        <div class="card-body" style="padding:0">
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="mono-cell">Mar 10</td>
                            <td class="mono-cell">8:01 AM</td>
                            <td class="mono-cell">5:00 PM</td>
                            <td><span class="status-present">● Present</span></td>
                        </tr>
                        <tr>
                            <td class="mono-cell">Mar 11</td>
                            <td class="mono-cell">7:59 AM</td>
                            <td class="mono-cell">5:02 PM</td>
                            <td><span class="status-present">● Present</span></td>
                        </tr>
                        <tr>
                            <td class="mono-cell">Mar 12</td>
                            <td class="mono-cell">8:45 AM</td>
                            <td class="mono-cell">5:01 PM</td>
                            <td><span class="status-late">● Late</span></td>
                        </tr>
                        <tr>
                            <td class="mono-cell">Mar 13</td>
                            <td class="mono-cell">8:00 AM</td>
                            <td class="mono-cell">5:00 PM</td>
                            <td><span class="status-present">● Present</span></td>
                        </tr>
                        <tr>
                            <td class="mono-cell">Mar 14</td>
                            <td class="mono-cell">—</td>
                            <td class="mono-cell">—</td>
                            <td><span class="status-absent">● Absent</span></td>
                        </tr>
                        <tr>
                            <td class="mono-cell">Mar 17</td>
                            <td class="mono-cell">8:02 AM</td>
                            <td class="mono-cell">5:00 PM</td>
                            <td><span class="status-present">● Present</span></td>
                        </tr>
                        <tr>
                            <td class="mono-cell">Mar 18</td>
                            <td class="mono-cell">9:10 AM</td>
                            <td class="mono-cell">5:03 PM</td>
                            <td><span class="status-late">● Late</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="card full">
        <div class="card-header-profile">
            <div class="card-header-icon icon-slate">
                <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            </div>
            <div>
                <div class="card-title">Update Profile</div>
                <div class="card-subtitle">Edit your personal information</div>
            </div>
        </div>
        <div class="card-body">

            <form method="POST" action="update_profile.php">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname"
                            placeholder="e.g. Jhon Marb" value="Jhon Marb" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email"
                            placeholder="e.g. jhon@email.com" value="jhon@email.com" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                            placeholder="e.g. +63 912 345 6789" />
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" id="password" name="password"
                            placeholder="Leave blank to keep current" />
                    </div>
                    <div class="form-group full-col">
                        <button type="submit" class="btn-primary">
                            Update Profile
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>