# Online Community Platform Prototype

[![PHP](https://img.shields.io/badge/PHP-7.4-blue)](https://www.php.net/)
[![HTML5](https://img.shields.io/badge/HTML5-orange)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
[![License](https://img.shields.io/badge/License-Educational-green)](#license)

## Project Overview
This project is a prototype for an online community platform. Its main objectives are:

1. **Secure User Registration** – Users can register with a username, email, and password using PHP, including input validation and sanitization to ensure safe data handling.
2. **Data Transmission Methods** – Demonstrates the differences between **GET** and **POST** methods for sending data from client to server, with an emphasis on appropriate use cases and security.

The project introduces foundational skills in **form handling, PHP validation, secure coding**, and understanding HTTP methods.

## Features

### User Registration Form (`registration.html`)
- Fields: username, email, password, confirm password
- Validation:
  - All fields are required
  - Email must be valid
  - Password must be at least 8 characters, include a number and special character
  - Confirm password must match password
- Input sanitization using `htmlspecialchars()` and `trim()`
- Displays **user-friendly error messages**

### GET Method Example (`get_example.php`)
- Accepts data via URL query parameters
- Displays submitted data on the page
- Demonstrates proper usage of GET for **non-sensitive data**

### POST Method Example
- Registration form uses POST method
- Data is hidden from the URL, making it suitable for sensitive information

## Usage
1. Open **registration form**, fill all fields, and submit.
2. If validation fails, error messages appear.
3. If validation passes, a success message is shown.
4. For **GET example**, enter a search term; the page displays the submitted query.

## Project Structure
community_platform/
- registration.html # HTML registration form (POST)
- process_registration.php # PHP processing for registration
- get_example.php # GET method example
- README.md # Project documentation

## Key Learning Points
- **Form Handling:** Capturing and validating user input in PHP
- **Data Sanitization:** Preventing XSS attacks using `htmlspecialchars()` and `trim()`
- **GET vs POST:** Understanding differences, use cases, and security implications
- **PHP Development:** Running PHP locally, debugging, and testing forms
