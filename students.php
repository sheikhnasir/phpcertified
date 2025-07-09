<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $hp = $_POST["hp"];

    echo "Name: " . $name . "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management - SK Sekolah Percint 16(1)</title>
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

        .page-header {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }

        .page-header h1 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-size: 2.5rem;
        }

        .page-header p {
            font-size: 1.2rem;
            color: #7f8c8d;
        }

        .form-section {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .form-section h2 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #3498db;
            padding-bottom: 0.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .form-group input:hover {
            border-color: #bdc3c7;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .btn {
            background: #3498db;
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background: #2980b9;
        }

        .btn-success {
            background: #27ae60;
        }

        .btn-success:hover {
            background: #219a52;
        }

        .btn-secondary {
            background: #95a5a6;
        }

        .btn-secondary:hover {
            background: #7f8c8d;
        }

        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 2rem;
        }

        .info-card {
            background: #e8f4f8;
            border: 1px solid #3498db;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .info-card h4 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .info-card p {
            color: #7f8c8d;
            margin: 0;
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

            .page-header h1 {
                font-size: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .form-actions {
                flex-direction: column;
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
                <li><a href="index.php">Home</a></li>
                <li><a href="students.php" class="active">Students</a></li>
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
            <section class="page-header">
                <h1>👨‍🎓 Student Management</h1>
                <p>Add new students to the school database</p>
            </section>

            <div class="info-card">
                <h4>📝 Student Registration Information</h4>
                <p>Please fill out all required fields to register a new student. Make sure all information is accurate before submitting.</p>
            </div>

            <section class="form-section">
                <h2>Add New Student</h2>
                
                <form 
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required placeholder="Enter student's full name">
                        </div>
                        
                        <div class="form-group">
                            <label for="dob">Date of Birth *</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="student@example.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="hp">Phone Number (HP) *</label>
                            <input type="tel" id="hp" name="hp" required placeholder="01X-XXX-XXXX">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-success">Add Student</button>
                    </div>
                </form>
            </section>

            <section class="form-section">
                <h2>Student Information Guidelines</h2>
                <div class="form-row">
                    <div class="info-card">
                        <h4>📋 Required Information</h4>
                        <p>All fields marked with (*) are mandatory and must be filled before submission.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>📅 Date Format</h4>
                        <p>Date of birth should be in DD/MM/YYYY format. Students must be at least 6 years old.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>📧 Email Guidelines</h4>
                        <p>Provide a valid email address for communication and login purposes.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>📱 Phone Number</h4>
                        <p>Enter a valid Malaysian phone number for emergency contact.</p>
                    </div>
                </div>
            </section>
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