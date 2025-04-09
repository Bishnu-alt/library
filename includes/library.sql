CREATE DATABASE IF NOT EXISTS library_db;
USE library_db;

-- Create Student table
CREATE TABLE IF NOT EXISTS Student (
    student_id VARCHAR(20) PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,  
    email VARCHAR(100) UNIQUE NOT NULL CHECK (email LIKE '%@%'),
    phone VARCHAR(20),
    picture VARCHAR(255) DEFAULT NULL
);

-- Insert Student
INSERT INTO Student (student_id, username, password, first_name, last_name, email, phone, picture) 
VALUES ("1","bishnunp", "", "Bishnu","Upadhyay", "bishnu@gmail.com","9746481933","profile_picture.jpg");

-- Create Admin table
CREATE TABLE IF NOT EXISTS Admin  (
    username VARCHAR(50) PRIMARY KEY,
    password VARCHAR(255) NOT NULL, 
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL CHECK (email LIKE '%@%'),
    phone VARCHAR(20),
    picture VARCHAR(255) DEFAULT NULL
);

-- Insert Admin
INSERT INTO Admin (username, password, name, email, phone, picture)
VALUES ("root", "hashed_password_here", "Bishnu", "admin@gmail.com", "9746481933", "profile_picture.jpg");

-- Create Book table 
CREATE TABLE IF NOT EXISTS Book (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    authors VARCHAR(255) NOT NULL,
    edition VARCHAR(50),
    department VARCHAR(100),
    issue_date DATE
);

-- Insert Book records
INSERT INTO Book (title, authors, edition, department, issue_date)
VALUES ("Python Programming", "Bishnu Upadhyay", "1st", "Computer Science", "2023-10-01"),
       ("Database Management", "John Doe", "2nd", "Information Technology", "2023-10-02");

-- Create Authentication table
CREATE TABLE IF NOT EXISTS Authentication (
    username VARCHAR(50) PRIMARY KEY,
    password VARCHAR(255) NOT NULL, 
    otp_verification VARCHAR(6),
    FOREIGN KEY (username) REFERENCES Student(username) ON DELETE CASCADE
);
