# Employee Management System

A standalone PHP/MySQL employee management system built for a portfolio project.

## Setup

This app does not require XAMPP. You can run it using PHP's built-in server and a local MySQL installation.

1. Import `database.sql` into MySQL to create the `employee_db` database and `employees` table.
2. Update `db.php` if your MySQL username or password is not `root` / empty.
3. From the app folder, start PHP's built-in server:
   - `php -S localhost:8000`
4. Open the browser at:
   - `http://localhost:8000/index.php`

If you are on Windows and have PHP installed, you can also run `run-server.bat`.

## Files

- `database.sql` — database schema for `employee_db` and `employees`
- `db.php` — mysqli connection file
- `index.php` — dashboard listing employees
- `add.php` — add employee form and logic
- `edit.php` — update employee form and logic
- `delete.php` — remove employee logic
