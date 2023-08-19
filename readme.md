# Theme Zoo Management System Project Using PHP and MySQL

## Table of Contents

1. [Introduction](#introduction)
2. [Installation](#installation)
3. [Database Setup](#database-setup)
4. [Accessing the Application](#accessing-the-application)
5. [Admin Credentials](#admin-credentials)

---

## 1. Introduction

The Theme Zoo Management System (TZMS) is a web-based application developed using PHP and MySQL. This system is designed to manage and display information about animals and amenities in a zoo.

This README file provides instructions on how to set up and run the TZMS project on your local server.

## 2. Installation

Follow these steps to install the TZMS project on your local machine:

1. Download the project's zip file.

2. Extract the contents of the zip file.

3. Copy the `root` folder.

4. Paste the `root` folder into your web server's root directory:
   - For XAMPP, it's typically `xampp/htdocs`
   - For WAMP, it's typically `wamp/www`
   - For LAMP, it's typically `var/www/html`

## 3. Database Setup

To set up the database for the TZMS project, follow these steps:

1. Open your web browser and access PHPMyAdmin at [http://localhost/phpmyadmin](http://localhost/phpmyadmin).

2. Create a new database with the name `zmsdb`.

3. Import the database schema by following these steps:
   - Locate the `zmsdb.sql` file inside the `SQL` folder of the extracted project files.
   - In PHPMyAdmin, select the `zmsdb` database.
   - Click on the `Import` tab.
   - Choose the `zmsdb.sql` file and click the `Go` button to import the schema.

## 4. Accessing the Application

Now that you have installed and set up the database, you can access the TZMS application:

- Open your web browser and navigate to [http://localhost/:project-root-folder-name](http://localhost/picnic-place).

## 5. Admin Credentials

Use the following credentials to log in as an administrator:

- **Username:** admin
- **Password:** Test@123

You are now ready to use the Theme Zoo Management System. Enjoy managing and exploring animals and amenities in your zoo!

For any further assistance, please contact us.
