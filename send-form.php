<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $project = $_POST["project"];
  $message = $_POST["message"];

  $to = "abrahamosas3@gmail.com";
  $subject = "Form Submission from Porfolio";
  $body = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";

  // Set additional headers if needed
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>
