# PHP Contact Form (Beginner Project)

A minimal contact form built with PHP + MySQL. Great first repo to learn Git.

## Features
- Collects name, email, and message
- Stores messages in MySQL using **PDO prepared statements**
- Simple UI and clear project structure

## Requirements
- XAMPP (or any Apache + PHP + MySQL stack)
- PHP 8+ recommended
- MySQL 5.7+ / MariaDB
- Git (for version control)

## Quick Start
1. Start **Apache** and **MySQL** in XAMPP.
2. Go to **http://localhost/phpmyadmin**.
3. Create the database and table by running the SQL in `schema.sql`.
4. Copy this project folder to your XAMPP `htdocs` directory, e.g.:
   - `C:\xampp\htdocs\contact-form` (Windows)
   - `/Applications/XAMPP/htdocs/contact-form` (macOS)
   - `/opt/lampp/htdocs/contact-form` (Linux)
5. Update DB credentials in `db.php` if needed.
6. Open **http://localhost/contact-form/index.php**, submit the form, and check phpMyAdmin for saved rows in `messages`.

## Git Commands (first push)
```bash
git init
git add .
git commit -m "feat: initial commit - PHP contact form"
git branch -M main
git remote add origin https://github.com/<your-username>/contact-form.git
git push -u origin main
```

## Practice Branch Exercise (recommended)
Create a new branch and add a page to **view messages**:

```bash
git checkout -b add-view-messages
# create messages.php (see code snippet in the guide)
git add messages.php
git commit -m "feat: add messages list page"
git push -u origin add-view-messages
```

Then open a Pull Request on GitHub and merge it into `main`.

## Folder Structure
```
contact-form/
├─ index.php
├─ process.php
├─ db.php
├─ schema.sql
├─ README.md
└─ .gitignore
```

## License
MIT
