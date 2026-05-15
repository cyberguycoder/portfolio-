<?php
// Simple contact form handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $to = 'mbpokharel@gmail.com';
    $subject = 'Portfolio Contact from ' . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $success = mail($to, $subject, $body, $headers);
    if ($success) {
        $status = 'Message sent successfully.';
    } else {
        $status = 'Message failed to send. If testing locally, set up a mail server or use a tool like MailHog.';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact — Sumit Pokhrel</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <header class="site-header">
    <div class="container">
      <h1>Contact</h1>
      <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="projects/employee-management-system.html">Projects</a>
        <a href="certificates.html">Certificates</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="contact-form">
      <?php if (!empty($status)) echo '<p class="status">'.htmlspecialchars($status).'</p>'; ?>
      <form method="post" action="contact.php">
        <label for="name">Name</label>
        <input id="name" name="name" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" required></textarea>

        <button type="submit">Send Message</button>
      </form>
      <p>Or contact directly at: mbpokharel@gmail.com</p>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>&copy; Sumit Pokhrel</p>
    </div>
  </footer>
</body>
</html>
