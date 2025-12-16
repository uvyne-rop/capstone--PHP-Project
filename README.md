## Getting Started with PHP – A Beginner’s Web Application Guide
## 1. Title & Objective

## Project Title:
Getting Started with PHP – Building a Simple Web Application

## Objective

The objective of this project is to learn the basics of PHP by building a simple web application that runs in the browser. This project focuses on understanding how PHP works on the server, how it processes requests, and how it connects backend logic with HTML.

## Technology Chosen

PHP (PHP 8+)

## Why I Chose PHP

PHP is beginner-friendly and easy to set up

It is widely used in real-world applications such as WordPress and Laravel

It clearly demonstrates server-side logic

It helps bridge the gap between frontend and backend development


## End Goal

The end goal is to successfully run a PHP web application locally that:

Displays dynamic content

Handles form input using POST requests

Runs correctly in the browser using a local PHP server

## 2. Quick Summary of the Technology

PHP is a server-side scripting language used to build dynamic websites and web applications.

## What is PHP?

PHP runs on the server and generates HTML that is sent to the browser. Unlike HTML or JavaScript, PHP code is not visible to the user.

## Where is PHP Used?

Websites

Content Management Systems (e.g., WordPress)

Backend APIs

Web applications

## Real-World Example

WordPress, which powers over 40% of websites on the internet, is built using PHP.

## 3. System Requirements
Operating System

Linux (Ubuntu 22.04 recommended)

macOS or Windows

Tools & Editors

PHP 8+

Terminal / Command Line

VS Code 

Web Browser (Chrome, Firefox, etc.)

Git 

Packages

PHP CLI

PHP built-in server (comes with PHP)

## 4. Installation & Setup Instructions
   ## Step 1: Update the System
sudo apt update
sudo apt upgrade -y

## Step 2: Install PHP
sudo apt install php -y


(Optional but recommended extensions)

sudo apt install php-cli php-mbstring php-xml php-curl php-mysql -y

## Step 3: Verify Installation
php -v


You should see output showing PHP 8.x.

## Step 4: Create a Test File
mkdir php-beginner-toolkit
cd php-beginner-toolkit
nano index.php


Add this code:

<?php
echo "Hello from PHP!";
?>

Step 5: Run the PHP Server
php -S localhost:8000


Open your browser and visit:

http://localhost:8000

5. Minimal Working Example
What the Example Does

Runs a PHP server locally

Displays a message from PHP

Demonstrates server-side execution

Example Code (index.php)
<?php
// This outputs text to the browser
echo "Hello from PHP!";
?>

Expected Output

When you open the browser, you should see:

Hello from PHP!

## 6. AI Prompt Journal
Prompt Used

“Give me step-by-step instructions to install PHP on Ubuntu 22.04.”

Curriculum Link:
PHP Installation – https://www.php.net/manual/en/install.php

## AI Response Summary

The AI provided clear terminal commands for installing PHP, verifying the installation, and running a PHP server.

Helpful Response Excerpt

“The built-in PHP server can be started using php -S localhost:8000 for local development.”

## Evaluation

The AI was very helpful in simplifying the installation process and explaining common beginner mistakes.

## 7. Common Issues & Fixes
Issue 1: php: command not found

Cause: PHP is not installed
Fix:

sudo apt install php

Issue 2: PHP file downloads instead of running

Cause: PHP is not being served by a PHP server
Fix: Use:

php -S localhost:8000

Issue 3: Blank page in browser

Cause: PHP errors not displayed
Fix: Enable error reporting or check terminal output

## Helpful links:

https://stackoverflow.com

https://www.php.net/manual/en/errorfunc.configuration.php

8. ## References

PHP Official Documentation: https://www.php.net/docs.php

W3Schools PHP Tutorial: https://www.w3schools.com/php/

Stack Overflow: https://stackoverflow.com

moringaschool.com – AI-assisted learning