<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    $errors = [];

    // Validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (strlen($password) < 8 || 
        !preg_match("/[0-9]/", $password) || 
        !preg_match("/[!@#$%^&*]/", $password)) {
        $errors[] = "Password must be at least 8 characters long and include a number and a special character.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // If validation passes
    if (empty($errors)) {
        // Display confirmation
        echo "<h3>Registration successful! Welcome, " . htmlspecialchars($username) . ".</h3>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Password: (not shown for security reasons)</p>";

    } else {
        // Show error messages
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<a href='registration.html'>Go back</a>";
    }
}
?>
