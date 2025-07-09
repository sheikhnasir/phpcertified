<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System - Springfield Academy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .datetime {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        nav {
            background: #2c3e50;
            padding: 1rem 0;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .nav-menu a:hover {
            background-color: #34495e;
        }

        .nav-menu a.active {
            background-color: #3498db;
        }

        main {
            padding: 2rem 0;
        }

        .hero {
            background: white;
            padding: 3rem 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }

        .hero h1 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 2rem;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #3498db;
        }

        .stat-label {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .info-section {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .info-section h2 {
            color: #2c3e50;
            margin-bottom: 1rem;
            border-bottom: 2px solid #3498db;
            padding-bottom: 0.5rem;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .info-item {
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 5px;
            border-left: 4px solid #3498db;
        }

        .info-item h4 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 1rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #3498db;
        }

        .footer-section p, .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
        }

        .footer-section a:hover {
            color: white;
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }

            .nav-menu {
                flex-direction: column;
                gap: 0.5rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php
    // Get current date and time
    $current_datetime = date('l, F j, Y - g:i A');
    
    // Sample data (in a real application, this would come from a database)
    $school_info = [
        'name' => 'SK Sekolah Percint 16(1)',
        'established' => '1985',
        'principal' => 'Dr. Sarah Johnson',
        'total_students' => 1247,
        'total_teachers' => 68,
        'total_classes' => 42,
        'total_subjects' => 15
    ];
    
    $announcements = [
        'Parent-Teacher Conference scheduled for March 15-17, 2024',
        'Science Fair submissions due by March 10, 2024',
        'Spring break: March 25 - April 1, 2024',
        'New student registration opens April 15, 2024'
    ];
    
    $recent_activities = [
        'Mathematics Olympiad - 3rd place district level',
        'Annual Sports Day concluded successfully',
        'New computer lab inaugurated',
        'Teacher training workshop completed'
    ];
    ?>

    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo"><?php echo $school_info['name']; ?></div>
                <div class="datetime"><?php echo $current_datetime; ?></div>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul class="nav-menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="students.php">Students</a></li>
                <li><a href="teachers.php">Teachers</a></li>
                <li><a href="classes.php">Classes</a></li>
                <li><a href="subjects.php">Subjects</a></li>
                <li><a href="attendance.php">Attendance</a></li>
                <li><a href="reports.php">Reports</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container">
            <section class="hero">
                <h1>Welcome to <?php echo $school_info['name']; ?></h1>
                <p>Comprehensive School Management System</p>
                <p>Manage students, teachers, classes, and academic records efficiently</p>
            </section>

            <section class="stats">
                <div class="stat-card">
                    <div class="stat-number"><?php echo $school_info['total_students']; ?></div>
                    <div class="stat-label">Total Students</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo $school_info['total_teachers']; ?></div>
                    <div class="stat-label">Total Teachers</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo $school_info['total_classes']; ?></div>
                    <div class="stat-label">Total Classes</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number"><?php echo $school_info['total_subjects']; ?></div>
                    <div class="stat-label">Total Subjects</div>
                </div>
            </section>

            <section class="features">
                <div class="feature-card">
                    <div class="feature-icon">👨‍🎓</div>
                    <h3>Student Management</h3>
                    <p>Add, edit, and manage student records, enrollment, and academic information</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">👩‍🏫</div>
                    <h3>Teacher Management</h3>
                    <p>Manage teacher profiles, assignments, schedules, and performance tracking</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📚</div>
                    <h3>Class Management</h3>
                    <p>Organize classes, subjects, timetables, and academic schedules</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Reports & Analytics</h3>
                    <p>Generate comprehensive reports on attendance, grades, and performance</p>
                </div>
            </section>

            <div class="info-section">
                <h2>School Information</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <h4>Principal</h4>
                        <p><?php echo $school_info['principal']; ?></p>
                    </div>
                    <div class="info-item">
                        <h4>Established</h4>
                        <p><?php echo $school_info['established']; ?></p>
                    </div>
                    <div class="info-item">
                        <h4>Academic Session</h4>
                        <p>2023-2024</p>
                    </div>
                    <div class="info-item">
                        <h4>Contact</h4>
                        <p>info@springfieldacademy.edu</p>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h2>Recent Announcements</h2>
                <div class="info-grid">
                    <?php foreach($announcements as $announcement): ?>
                        <div class="info-item">
                            <h4>📢 Announcement</h4>
                            <p><?php echo $announcement; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="info-section">
                <h2>Recent Activities</h2>
                <div class="info-grid">
                    <?php foreach($recent_activities as $activity): ?>
                        <div class="info-item">
                            <h4>🎯 Activity</h4>
                            <p><?php echo $activity; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="info-section">
                <h2>System Features</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <h4>Student Registration</h4>
                        <p>Complete student enrollment with personal, academic, and contact information</p>
                    </div>
                    <div class="info-item">
                        <h4>Teacher Profiles</h4>
                        <p>Detailed teacher information including qualifications, subjects, and schedules</p>
                    </div>
                    <div class="info-item">
                        <h4>Attendance Tracking</h4>
                        <p>Daily attendance monitoring for both students and teachers</p>
                    </div>
                    <div class="info-item">
                        <h4>Grade Management</h4>
                        <p>Record and track student grades, assignments, and academic progress</p>
                    </div>
                    <div class="info-item">
                        <h4>Class Scheduling</h4>
                        <p>Organize class timetables, room assignments, and subject scheduling</p>
                    </div>
                    <div class="info-item">
                        <h4>Communication</h4>
                        <p>Parent-teacher communication and notification system</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Information</h3>
                    <p>📍 123 Education Street, Springfield</p>
                    <p>📞 (555) 123-4567</p>
                    <p>✉️ info@springfieldacademy.edu</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="students.php">Student Portal</a></p>
                    <p><a href="teachers.php">Teacher Portal</a></p>
                    <p><a href="parents.php">Parent Portal</a></p>
                </div>
                <div class="footer-section">
                    <h3>Academic</h3>
                    <p><a href="curriculum.php">Curriculum</a></p>
                    <p><a href="calendar.php">Academic Calendar</a></p>
                    <p><a href="events.php">Events</a></p>
                </div>
                <div class="footer-section">
                    <h3>Administration</h3>
                    <p><a href="admin.php">Admin Panel</a></p>
                    <p><a href="reports.php">Reports</a></p>
                    <p><a href="settings.php">System Settings</a></p>
                </div>
            </div>
            <p>&copy; <?php echo date('Y'); ?> <?php echo $school_info['name']; ?>. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>