<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=RSE', 'username', 'password');

// Get the user's email address from the form submission
$email = $_POST['email'];

// Check if the email exists in the database
$stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user) {
    echo "Email address not found.";
    exit;
}

// Generate a unique verification code
$verification_code = uniqid();

// Save the verification code to the database
$stmt = $db->prepare("UPDATE users SET verification_code = ? WHERE email = ?");
$stmt->execute([$verification_code, $email]);

// Send the verification email to the user
$to = $email;
$subject = "Password reset verification code";
$message = "Your verification code is: $verification_code";
$headers = "From: mywebsite@example.com";
mail($to, $subject, $message, $headers);

echo "Verification code sent to your email address.";
?>