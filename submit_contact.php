<?php
// Include PHPMailer files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader (if using Composer)
require 'vendor/autoload.php';  // If using Composer, change the path accordingly

// Include the database configuration file
require 'db_conn/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Prepare an SQL statement for database insertion
    $stmt = $pdo->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)");

    // Bind parameters to the SQL query
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);

    // Execute the SQL query
    if ($stmt->execute()) {
        // If the message is saved to the database, prepare to send an email using PHPMailer

        $mail = new PHPMailer(true);  // Initialize PHPMailer
        try {
            // Set mailer to use SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Use Gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'emmanuelemesue@gmail.com';  // Your Gmail address
            $mail->Password = 'dtfs nppm qrio smxa';  // Your Gmail password (or use an App Password for Gmail)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;  // SMTP port

            // Set the sender and recipient
            $mail->setFrom($email, $name);
            $mail->addAddress('emmanuelemesue97@gmail.com');  // Your recipient's email address

            // Set the email subject and body
            $mail->Subject = "New Contact Form Submission: " . $subject;
            $mail->Body    = "You have received a new message from the contact form on your website.\n\n" .
                             "Name: $name\n" .
                             "Email: $email\n" .
                             "Subject: $subject\n\n" .
                             "Message:\n$message";

            // Send the email
            $mail->send();
            echo "Message sent successfully!";
        } catch (Exception $e) {
            echo "Message saved to database, but email failed to send. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Failed to save message to database.";
    }
} else {
    echo "Invalid request.";
}
?>
