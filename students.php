<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Personal Information
    $name = $_POST["name"];
    $student_id = $_POST["student_id"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $hp = $_POST["hp"];
    
    // Address Information
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postcode = $_POST["postcode"];
    
    // Academic Information
    $class = $_POST["class"];
    $grade_level = $_POST["grade_level"];
    $academic_year = $_POST["academic_year"];
    $admission_date = $_POST["admission_date"];
    
    // Parent/Guardian Information
    $parent_name = $_POST["parent_name"];
    $parent_phone = $_POST["parent_phone"];
    $parent_email = $_POST["parent_email"];
    $status = $_POST["status"];
    
    // Emergency Contact
    $emergency_contact = $_POST["emergency_contact"];
    $emergency_phone = $_POST["emergency_phone"];

    echo "<div style='background: #d4edda; color: #155724; padding: 1rem; border-radius: 5px; margin-bottom: 1rem;'>";
    echo "<h4>✅ Student Registration Successful!</h4>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Student ID:</strong> " . $student_id . "</p>";
    echo "<p><strong>Class:</strong> " . $class . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "</div>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management - SK Sekolah Percint 16(1)</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        /* Additional styles for new form elements */
        .form-group select, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
            font-family: 'Arial', sans-serif;
        }

        .form-group select:focus, .form-group textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .form-group select:hover, .form-group textarea:hover {
            border-color: #bdc3c7;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .form-group select {
            background-color: white;
            cursor: pointer;
        }

        .form-group select option {
            padding: 0.5rem;
        }

        h3 {
            display: flex;
            align-items: center;
            gap: 0.5rem;
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
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    
                    <!-- Personal Information Section -->
                    <h3 style="color: #2c3e50; margin-bottom: 1rem; border-bottom: 1px solid #ddd; padding-bottom: 0.5rem;">👤 Personal Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required placeholder="Enter student's full name">
                        </div>
                        
                        <div class="form-group">
                            <label for="student_id">Student ID *</label>
                            <input type="text" id="student_id" name="student_id" required placeholder="STU2024001">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="dob">Date of Birth *</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="gender">Gender *</label>
                            <select id="gender" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="student@school.edu.my">
                        </div>
                        
                        <div class="form-group">
                            <label for="hp">Phone Number (HP) *</label>
                            <input type="tel" id="hp" name="hp" required placeholder="01X-XXX-XXXX">
                        </div>
                    </div>

                    <!-- Address Information Section -->
                    <h3 style="color: #2c3e50; margin: 2rem 0 1rem 0; border-bottom: 1px solid #ddd; padding-bottom: 0.5rem;">🏠 Address Information</h3>
                    
                    <div class="form-group">
                        <label for="address">Home Address</label>
                        <textarea id="address" name="address" rows="3" placeholder="Enter complete address"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" placeholder="Enter city">
                        </div>
                        
                        <div class="form-group">
                            <label for="state">State</label>
                            <select id="state" name="state">
                                <option value="">Select State</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                <option value="Labuan">Labuan</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Putrajaya">Putrajaya</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="postcode">Postcode</label>
                            <input type="text" id="postcode" name="postcode" placeholder="12345">
                        </div>
                    </div>

                    <!-- Academic Information Section -->
                    <h3 style="color: #2c3e50; margin: 2rem 0 1rem 0; border-bottom: 1px solid #ddd; padding-bottom: 0.5rem;">📚 Academic Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="class">Class *</label>
                            <select id="class" name="class" required>
                                <option value="">Select Class</option>
                                <option value="1A">1A</option>
                                <option value="1B">1B</option>
                                <option value="2A">2A</option>
                                <option value="2B">2B</option>
                                <option value="3A">3A</option>
                                <option value="3B">3B</option>
                                <option value="4A">4A</option>
                                <option value="4B">4B</option>
                                <option value="5A">5A</option>
                                <option value="5B">5B</option>
                                <option value="6A">6A</option>
                                <option value="6B">6B</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="grade_level">Grade Level *</label>
                            <select id="grade_level" name="grade_level" required>
                                <option value="">Select Grade</option>
                                <option value="1">Grade 1</option>
                                <option value="2">Grade 2</option>
                                <option value="3">Grade 3</option>
                                <option value="4">Grade 4</option>
                                <option value="5">Grade 5</option>
                                <option value="6">Grade 6</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="academic_year">Academic Year *</label>
                            <select id="academic_year" name="academic_year" required>
                                <option value="">Select Academic Year</option>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2024-2025">2024-2025</option>
                                <option value="2025-2026">2025-2026</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="admission_date">Admission Date *</label>
                            <input type="date" id="admission_date" name="admission_date" required>
                        </div>
                    </div>

                    <!-- Parent/Guardian Information Section -->
                    <h3 style="color: #2c3e50; margin: 2rem 0 1rem 0; border-bottom: 1px solid #ddd; padding-bottom: 0.5rem;">👨‍👩‍👧‍👦 Parent/Guardian Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="parent_name">Parent/Guardian Name *</label>
                            <input type="text" id="parent_name" name="parent_name" required placeholder="Enter parent/guardian name">
                        </div>
                        
                        <div class="form-group">
                            <label for="parent_phone">Parent Phone Number *</label>
                            <input type="tel" id="parent_phone" name="parent_phone" required placeholder="01X-XXX-XXXX">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="parent_email">Parent Email</label>
                            <input type="email" id="parent_email" name="parent_email" placeholder="parent@example.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="status">Student Status</label>
                            <select id="status" name="status">
                                <option value="Active" selected>Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Graduated">Graduated</option>
                                <option value="Transferred">Transferred</option>
                            </select>
                        </div>
                    </div>

                    <!-- Emergency Contact Section -->
                    <h3 style="color: #2c3e50; margin: 2rem 0 1rem 0; border-bottom: 1px solid #ddd; padding-bottom: 0.5rem;">🚨 Emergency Contact</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="emergency_contact">Emergency Contact Name</label>
                            <input type="text" id="emergency_contact" name="emergency_contact" placeholder="Enter emergency contact name">
                        </div>
                        
                        <div class="form-group">
                            <label for="emergency_phone">Emergency Phone Number</label>
                            <input type="tel" id="emergency_phone" name="emergency_phone" placeholder="01X-XXX-XXXX">
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
                        <p>All fields marked with (*) are mandatory and must be filled before submission. Complete all sections for full student profile.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>🆔 Student ID Format</h4>
                        <p>Student ID should follow format: STU2024001. Make sure it's unique for each student.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>📅 Date Information</h4>
                        <p>Date of birth and admission date should be accurate. Students must be at least 6 years old.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>📧 Email Guidelines</h4>
                        <p>Provide valid email addresses for both student and parent for communication purposes.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>📱 Phone Numbers</h4>
                        <p>Enter valid Malaysian phone numbers in format: 01X-XXX-XXXX for all contact fields.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>🏫 Academic Information</h4>
                        <p>Class and grade level should match. Academic year format: 2023-2024.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>🏠 Address Details</h4>
                        <p>Complete address including city, state, and postcode for proper record keeping.</p>
                    </div>
                    
                    <div class="info-card">
                        <h4>👨‍👩‍👧‍👦 Parent Information</h4>
                        <p>Parent/guardian details are required for emergency contact and communication.</p>
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