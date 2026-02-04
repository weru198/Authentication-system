# Simple Auth Dashboard

## Overview
This project is a **simple user authentication system** with a protected dashboard.  
It demonstrates full-stack skills including backend logic, frontend forms, session-based authentication, and basic security practices.

---

## Features
- User registration with input validation
- User login with secure password hashing
- Protected dashboard (authenticated users only)
- Logout functionality
- Basic error handling

---

## Tech Stack
- **Backend:** PHP 8+, PDO, MySQL  
- **Frontend:** HTML, CSS (vanilla, minimal)  
- **Database:** MySQL / MariaDB  

---

## Folder Structure

simple-auth-dashboard/
├── public/
│ ├── index.php
│ ├── register.php
│ ├── dashboard.php
│ └── logout.php
├── config/
│ └── db.php


**Explanation:**  
- `public/` → All web-accessible files  
- `config/` → Database connection (kept out of web root for security)  
- `sql/` → Database setup scripts  

---

## Setup Instructions

1. Clone the repository:

```bash
git clone https://github.com/your-username/simple-auth-dashboard.git

2.Move project to your local server directory (e.g., htdocs for XAMPP):
C:\xampp\htdocs\simple-auth-dashboard

3.Import the database:
-- In phpMyAdmin or MySQL CLI
CREATE DATABASE auth_system;
USE auth_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

4.Configure database connection in config/db.php:
$host = "localhost";
$db   = "auth_system";
$user = "root";
$pass = "";

5.Open the app in your browser:
http://localhost/simple-auth-dashboard/public/

Usage
1.Register a new user via register.php
2.Login using the registered email and password
3.Access the dashboard (dashboard.php) — only accessible after login
4.Click Logout to end the session

Security Measures
1.Passwords are hashed using PHP’s password_hash()
2.Prepared statements prevent SQL injection
3.Dashboard access is session-protected
4.Sensitive files (db.php) are kept outside web root

Assumptions & Decisions
1.Single user role (no admin/role system)
2.Session-based authentication (simple and reliable)
3.Minimal UI — focuses on functionality and security
4.Files kept simple for clarity and interview demonstration

Future Improvements
1.Add role-based access control (admin, user)
2.Implement CSRF protection on forms
3.Add password reset and email verification
4.Improve frontend design (Bootstrap or Tailwind)
5.Use src/ folder for cleaner separation of backend logic
6.Add logging for security and audit trails

Author
Alex Mwangi

