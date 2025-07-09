-- School Management System Database Schema
-- Table: students

CREATE DATABASE IF NOT EXISTS school_db;
USE school_db;

CREATE TABLE students (
    -- Primary Key
    id INT PRIMARY KEY AUTO_INCREMENT,
    
    -- Student Information (from form)
    name VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    hp VARCHAR(20) NOT NULL,
    
    -- Additional Student Details
    student_id VARCHAR(20) UNIQUE,
    gender ENUM('Male', 'Female') DEFAULT NULL,
    address TEXT,
    city VARCHAR(50),
    state VARCHAR(50),
    postcode VARCHAR(10),
    
    -- Academic Information
    class VARCHAR(10),
    grade_level INT,
    academic_year VARCHAR(9), -- e.g., 2023-2024
    admission_date DATE,
    
    -- Parent/Guardian Information
    parent_name VARCHAR(100),
    parent_phone VARCHAR(20),
    parent_email VARCHAR(100),
    emergency_contact VARCHAR(100),
    emergency_phone VARCHAR(20),
    
    -- Status and Administrative
    status ENUM('Active', 'Inactive', 'Graduated', 'Transferred') DEFAULT 'Active',
    profile_picture VARCHAR(255),
    
    -- Timestamps
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    -- Indexes for better performance
    INDEX idx_student_id (student_id),
    INDEX idx_email (email),
    INDEX idx_class (class),
    INDEX idx_name (name),
    INDEX idx_status (status)
);

-- Insert sample data for testing
INSERT INTO students (name, dob, email, hp, student_id, gender, class, grade_level, academic_year, admission_date, parent_name, parent_phone, status) VALUES
('Ahmad Bin Ali', '2010-05-15', 'ahmad.ali@student.school.edu.my', '013-456-7890', 'STU2024001', 'Male', '6A', 6, '2023-2024', '2024-01-15', 'Ali Bin Hassan', '012-345-6789', 'Active'),
('Siti Nurhaliza', '2011-03-22', 'siti.nurhaliza@student.school.edu.my', '014-567-8901', 'STU2024002', 'Female', '5B', 5, '2023-2024', '2024-01-15', 'Hassan Bin Ahmad', '013-456-7890', 'Active'),
('Lim Wei Ming', '2009-08-10', 'lim.weiming@student.school.edu.my', '015-678-9012', 'STU2024003', 'Male', '7C', 7, '2023-2024', '2024-01-15', 'Lim Ah Chong', '014-567-8901', 'Active'),
('Priya Devi', '2010-12-05', 'priya.devi@student.school.edu.my', '016-789-0123', 'STU2024004', 'Female', '6B', 6, '2023-2024', '2024-01-15', 'Raj Kumar', '015-678-9012', 'Active'),
('Muhammad Iqbal', '2011-07-18', 'muhammad.iqbal@student.school.edu.my', '017-890-1234', 'STU2024005', 'Male', '5A', 5, '2023-2024', '2024-01-15', 'Ibrahim Bin Omar', '016-789-0123', 'Active');

-- Create additional related tables for complete school management

-- Classes table
CREATE TABLE classes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    class_name VARCHAR(10) NOT NULL UNIQUE,
    grade_level INT NOT NULL,
    teacher_id INT,
    max_students INT DEFAULT 30,
    academic_year VARCHAR(9),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Teachers table
CREATE TABLE teachers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    subject VARCHAR(50),
    qualification VARCHAR(100),
    hire_date DATE,
    status ENUM('Active', 'Inactive', 'Retired') DEFAULT 'Active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Subjects table
CREATE TABLE subjects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    subject_name VARCHAR(50) NOT NULL,
    subject_code VARCHAR(10) UNIQUE,
    description TEXT,
    grade_level INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Attendance table
CREATE TABLE attendance (
    id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT,
    date DATE NOT NULL,
    status ENUM('Present', 'Absent', 'Late', 'Excused') DEFAULT 'Present',
    remarks TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    UNIQUE KEY unique_student_date (student_id, date)
);

-- Grades table
CREATE TABLE grades (
    id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT,
    subject_id INT,
    grade_type VARCHAR(20), -- 'Quiz', 'Test', 'Assignment', 'Exam'
    grade_value DECIMAL(5,2),
    max_grade DECIMAL(5,2) DEFAULT 100.00,
    date_recorded DATE,
    academic_year VARCHAR(9),
    semester VARCHAR(10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (subject_id) REFERENCES subjects(id) ON DELETE CASCADE
);

-- Show table structure
DESCRIBE students; 