```
<!-- <form action="submit.php" method="post">
  <label for="email">Enter your email address:</label>
  <input type="email" id="email" name="email" required>
  <input type="submit" value="Submit">
</form> -->
```
*PHP Script (submit.php):*
```
<?php
  // Configure the email address to send the form data to
  $to_email = 'aniyikayebaruwa@gmail.com';

  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email address from the form data
    $email = $_POST['email'];

    // Send the email
    $subject = 'Email Address Submission';
    $message = "The email address $email has been submitted.";
    $headers = 'From: your_email_aniyikayebaruwa@gmail.com' . "\r\n" .
      'Reply-To: your_email_aniyikayebaruwa@gmail.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
    mail($to_email, $subject, $message, $headers);

    // Display a success message
    echo 'Thank you for submitting your email address!';
  }
?>