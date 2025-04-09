CREATE DATABASE IF NOT EXISTS database_lib;
USE database_lib;

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
CREATE TABLE IF NOT EXISTS Admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,  
    email VARCHAR(100) UNIQUE NOT NULL CHECK (email LIKE '%@%'),
    phone VARCHAR(20),
    picture VARCHAR(255) DEFAULT NULL
);
-- Insert Student
INSERT INTO  Admins(username, password, first_name, last_name, email, phone) 
VALUES ("bishnunp", "", "Bishnu","Upadhyay", "bishnu@gmail.com","9746481933");