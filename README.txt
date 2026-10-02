EVENTEASE - SIMPLE EVENT MANAGEMENT WEBSITE

TECHNOLOGIES
- HTML5
- CSS3
- PHP
- MySQL

PAGES
1. index.html - Home
2. events.html - Events
3. schedule.html - Schedule
4. gallery.html - Gallery
5. about.html - About
6. contact.html - Contact
7. registration.php - Registration form + PHP database insert
8. registrations.php - Displays saved registrations
9. db.php - MySQL connection
10. database.sql - Database/table creation
11. style.css - Common styling

HOW TO RUN USING XAMPP
1. Install XAMPP.
2. Start Apache and MySQL in XAMPP Control Panel.
3. Copy the whole "event_management_website" folder into:
   C:\xampp\htdocs\
4. Open http://localhost/phpmyadmin
5. Create/import the database:
   - Click Import
   - Select database.sql
   - Click Go
   OR open SQL tab and paste its contents.
6. Open:
   http://localhost/event_management_website/
7. Go to Register and submit the form.
8. The submitted data is saved in the MySQL table "registrations".
9. To view saved records, open:
   http://localhost/event_management_website/registrations.php

IMPORTANT
- db.php assumes XAMPP's default MySQL username is root and password is blank.
- If your MySQL password is different, change $password in db.php.
- registrations.php is intentionally simple for a college project. Add login/authentication before publishing it online.
