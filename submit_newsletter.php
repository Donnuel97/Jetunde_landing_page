<?php
// Include the database configuration file
require 'db_conn/config.php'; // Adjust this path to match your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted email
    $email = filter_var(trim($_POST['newsletter_email']), FILTER_SANITIZE_EMAIL);

    // Basic validation
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare an SQL statement to insert the email into the 'newsletter' table
        $stmt = $pdo->prepare("INSERT INTO newsletter (email) VALUES (:email)");

        // Bind the email parameter to the SQL query
        $stmt->bindParam(':email', $email);

        // Execute the SQL query
        if ($stmt->execute()) {
            echo "Thank you for subscribing!";
        } else {
            echo "Failed to subscribe. Please try again.";
        }
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
} else {
    echo "Invalid request.";
}
?>
