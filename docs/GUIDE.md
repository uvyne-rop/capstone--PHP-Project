# Getting Started with PHP – A Beginner’s Guide

## 1. Title & Objective
**Technology Chosen:** PHP  
**Why PHP:** PHP is beginner-friendly, widely used, and powers a large portion of the web.  
**End Goal:** Build a simple PHP web app that runs in the browser and handles form data.

---

## 2. Quick Summary of PHP
PHP is a server-side scripting language used to build dynamic websites.

- **What it is:** A backend language executed on the server
- **Where it’s used:** Web applications, APIs, CMS platforms
- **Real-world example:** WordPress, Facebook (early versions), Laravel apps

---

## 3. System Requirements
- OS: Linux / Mac / Windows
- PHP 8+
- VS Code
- Web browser
- Terminal

---

## 4. Installation & Setup (Ubuntu)

sudo apt update
sudo apt install php
php -v
Run PHP Server
bash

php -S localhost:8000
## 5. Minimal Working Example
index.php
php

<?php
echo "Hello from PHP!";
?>
# Expected Output:
Hello from PHP!

# 6. Working with Forms
form.php
php

<form method="POST" action="process.php">
  <input type="text" name="name" placeholder="Enter your name">
  <button type="submit">Submit</button>
</form>

process.php
php

<?php
$name = htmlspecialchars($_POST['name']);
echo "Hello, $name!";
?>
## 7. Common Issues & Fixes

**PHP file downloads instead of running**  
Cause: PHP server is not running.  
Fix: Run `php -S localhost:8000` before opening the file.

**Blank page in the browser**  
Cause: PHP errors are hidden.  
Fix: Enable error reporting using `ini_set('display_errors', 1);`.

**Undefined variable error**  
Cause: Input was not submitted.  
Fix: Check the variable using `isset()` before using it.


# 8. References
https://www.php.net

https://www.w3schools.com/php

https://moringaschool.com

