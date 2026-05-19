
# Sumit Pokhrel — Portfolio (Minimal White + Grey)

This project was generated automatically for Sumit Pokhrel (BCSIT student).
It includes a small portfolio website built with HTML/CSS/JS and a PHP contact form.
Open the `index.html` in a browser (for static pages) or run a local PHP server to test the contact form.

## Files
- index.html — Home page
- about.html — About page
- certificates.html — Certificates index
- projects/employee-management-system.html — Project page (separate, links to an external GitHub repository; not original work)
- contact.php — Contact form and handler (requires PHP to send mail)
- assets/css/style.css
- assets/js/main.js
- assets/sumit_pokhrel_resume.pdf — Your resume (included) INCLUDED

## How to open in VS Code
1. Unzip the project and open the folder in VS Code.
2. For static pages, open `index.html` in the browser (right-click -> Open with Live Server, or open file directly).
3. To test the contact form (contact.php):
   - If you have PHP installed, run: `php -S localhost:8000` in the project root and open http://localhost:8000/contact.php
   - Note: The PHP `mail()` function needs a mail server/config on your machine. For development, use tools like MailHog or configure SMTP.

## How to publish
- Static hosting (Netlify) will serve HTML/CSS/JS (but not PHP).
- For PHP backend, use a free host like InfinityFree, 000Webhost, or a shared host that supports PHP & MySQL.
- Alternatively, you can replace the PHP contact form with a JS + Formspree or email service.

## Next steps I can do (if you want)
- Add your real profile photo and certificate PDFs (just upload them and I will replace placeholders).
- Add real screenshots and a mini demo of Employee Management System (I can add sample code for the app).
- Convert contact form to use SMTP via PHPMailer.
- Add animations or a resume/CV page generator.

