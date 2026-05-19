# Employee Management System (EMS) - Portfolio Project

## Overview
The Employee Management System is a comprehensive web-based application designed to simplify employee management processes in organizations. This project is part of my portfolio to showcase expertise in PHP, MySQL, and full-stack web development.

---

## Project Files & Pages

### Main Project Page
- **File:** `employee-management-system.html`
- **Description:** Main project overview page with hero section, features summary, and technology stack
- **Contains:**
  - Project introduction and description
  - Key features overview
  - Technologies used
  - Project statistics and timeline

### Features Documentation
- **File:** `ems-features.html`
- **Description:** Detailed documentation of all system features
- **Sections:**
  - Core Features (Employee Records, Attendance, Tasks, Salary, Performance)
  - Security Features (Login, Role-based access, Encryption)
  - User Interface (Responsive design, Dashboard, Navigation)
  - Reporting & Analytics

### Technical Documentation
- **File:** `ems-documentation.html`
- **Description:** Technical details and system architecture
- **Covers:**
  - Technology Stack breakdown
  - System Architecture (3-tier design)
  - Database Structure and tables
  - Installation & Setup guide
  - Key Functionalities
  - Security Considerations

### Setup & Installation Guide
- **File:** `ems-setup.html`
- **Description:** Step-by-step installation and setup instructions
- **Includes:**
  - System Requirements
  - XAMPP Installation steps
  - Project file extraction
  - Database setup
  - Database configuration
  - Application access
  - Default login credentials
  - Troubleshooting section

---

## System Features

### Core Functionality
✅ Employee Records Management - Add, update, delete employee information  
✅ Attendance Tracking - Track working hours and attendance  
✅ Task Assignment - Assign and track employee tasks  
✅ Salary Management - Manage salary and payment records  
✅ Performance Evaluation - Track and evaluate employee performance  
✅ Admin Dashboard - Central control panel for all operations  

### Security
✅ Secure admin login system  
✅ Role-based access control  
✅ Password hashing and encryption  
✅ Session management with timeout  
✅ SQL injection prevention  
✅ Input validation and sanitization  

### User Experience
✅ Responsive design (mobile, tablet, desktop)  
✅ Modern and intuitive interface  
✅ Easy navigation  
✅ Data tables with sorting and filtering  

---

## Technology Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Styling and responsive design
- **JavaScript** - Client-side functionality
- **Bootstrap** - UI framework (optional)

### Backend
- **PHP 7.0+** - Server-side processing
- **Apache Server** - Web server

### Database
- **MySQL 5.6+** - Data persistence
- **phpMyAdmin** - Database management interface

### Tools & Environment
- **XAMPP/WAMP** - Local development environment
- **Git & GitHub** - Version control
- **VSCode** - Code editor

---

## Database Tables

| Table | Purpose |
|-------|---------|
| `employees` | Store employee information |
| `attendance` | Track daily attendance |
| `tasks` | Manage task assignments |
| `salary` | Store salary details |
| `performance` | Track performance metrics |
| `admin` | Administrator credentials |

---

## Quick Start

1. **Install XAMPP** - Download from https://www.apachefriends.org
2. **Extract Project** - Place files in `htdocs` folder
3. **Create Database** - Create `ems_db` in phpMyAdmin
4. **Import SQL** - Import database schema
5. **Access Application** - Open `http://localhost/ems-project`
6. **Login** - Use default admin credentials (admin/admin123)

**Full setup guide available in `ems-setup.html`**

---

## Project Structure

```
projects/
├── employee-management-system.html    (Main project page)
├── ems-features.html                  (Features documentation)
├── ems-documentation.html             (Technical documentation)
├── ems-setup.html                     (Setup guide)
└── README.md                          (This file)
```

---

## Key Skills Demonstrated

- **Backend Development:** PHP programming, MySQL database management
- **Frontend Development:** HTML5, CSS3, JavaScript, responsive design
- **Database Design:** Table relationships, CRUD operations
- **Security Implementation:** Password hashing, session management, input validation
- **Project Management:** Documentation, version control, project organization
- **Web Architecture:** 3-tier architecture, MVC concepts

---

## Installation Requirements

- Operating System: Windows, macOS, or Linux
- Server: Apache 2.4+
- PHP: Version 7.0 or above
- Database: MySQL 5.6 or above
- Browser: Modern browser (Chrome, Firefox, Safari, Edge)
- Disk Space: 100MB minimum

---

## Security Features Implemented

- Password hashing using PHP's `password_hash()` function
- SQL injection prevention with prepared statements
- Session-based authentication with automatic logout
- Input validation and sanitization on all forms
- Secure cookie handling with HttpOnly flag
- Role-based access control (Admin vs Employee)

---

## Default Credentials

| Field | Value |
|-------|-------|
| Username | admin |
| Password | admin123 |

**⚠️ Important:** Change default password immediately after first login for security.

---

## File Navigation Guide

### For Project Overview:
→ Start with `employee-management-system.html`

### For Feature Details:
→ Check `ems-features.html`

### For Technical Details:
→ Review `ems-documentation.html`

### For Installation:
→ Follow `ems-setup.html`

---

## Future Enhancements

- [ ] Email notifications for task assignments
- [ ] PDF report generation
- [ ] Mobile application version
- [ ] Advanced analytics and dashboards
- [ ] Integration with payroll systems
- [ ] Cloud deployment option
- [ ] Multi-language support
- [ ] Advanced search and filtering

---

## Contact & Support

For questions or support regarding this project, please visit the main portfolio at:
`https://sumitpokhrel.com`

---

## License

This project is part of my portfolio and is for educational purposes.

---

**Last Updated:** May 19, 2026  
**Project Status:** Complete  
**Version:** 1.0
