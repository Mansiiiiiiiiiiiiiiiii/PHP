# PHP Basics and Trip Form Project

Welcome to the PHP Basics and Trip Form Project repository! This project serves as a comprehensive introduction to PHP, covering essential topics such as loops, strings, operators, data types, string operations, and arrays. Additionally, it includes a practical application: a Trip Form for a "Welcome to JECRC Bihar Trip form" created using PHP and MySQL.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Getting Started](#getting-started)
- [File Structure](#file-structure)
- [Form Details](#form-details)
- [How to Contribute](#how-to-contribute)
- [License](#license)

## Introduction

This repository demonstrates fundamental PHP concepts through a hands-on project. The Trip Form allows users to submit their details for a trip, showcasing how to establish a connection with MySQL, handle form submissions, and prevent SQL injection using prepared statements.

## Features

- Basic PHP concepts:
  - Loops
  - Strings
  - Operators
  - Data Types
  - Operations on Strings
  - Arrays
- Trip Form with the following fields:
  - First Name
  - Last Name
  - Email
  - Phone Number
  - Date of Birth
  - Requirements
  - Comments
- Form submission feedback with a success message
- Beautiful UI using HTML and CSS with Google Fonts
- Secure data handling using prepared statements to prevent SQL injection

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- XAMPP (for local server setup)

## Getting Started

To get started with this project, follow these steps:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Mansiiiiiiiiiiiiiiiii/PHP.git
   ```
2. **Setup XAMPP:**
   - Install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
   - Start the Apache and MySQL modules from the XAMPP control panel.

3. **Create Database:**
   - Open phpMyAdmin (usually at `http://localhost/phpmyadmin`).
   - Create a new database named `trip`.
   - create necessary tables.

4. **Configure Database Connection:**
   - Open the `db.php` file and update the database connection details as needed.

5. **Access the Project:**
   - Place the project folder in the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs\php-trip-form`).
   - Open a web browser and go to `http://localhost/php/db.php`.

## File Structure

```
php-trip/
├── db.php           # Database connection
├── index.php        # Trip form
├── styles.css       # CSS for styling the form
└── README.md        # Project documentation
```

## Form Details

The Trip Form includes:

- **First Name**: Required field for the user's first name.
- **Last Name**: Required field for the user's last name.
- **Email**: Required field for a valid email address.
- **Phone Number**: Required field for contact number.
- **Date of Birth**: Required field for date of birth selection.
- **Requirements**: Additional requirements or requests.
- **Comments**: Optional comments field.
- **Submit Button**: To send the form data.

Upon successful submission, a green message saying "Thanks for submitting your form. We are happy to see you joining us for Bihar trip." will be displayed.

## How to Contribute

Contributions are welcome! If you'd like to contribute to this project, please fork the repository and submit a pull request. 

Feel free to explore and modify the code! If you have any questions or suggestions, don't hesitate to open an issue. Happy coding!

![Screenshot (143)](https://github.com/user-attachments/assets/f513f7d7-5d0f-42c6-87e1-2fe53f0d057c)
![Screenshot (146)](https://github.com/user-attachments/assets/81ac9ed3-34b9-4242-b744-3765fe1397ee)

