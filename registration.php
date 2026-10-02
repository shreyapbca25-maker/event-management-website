<?php
require_once "db.php";

$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $event = trim($_POST["event"] ?? "");

    if ($name === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || $phone === "" || $event === "") {
        $message = "Please fill all fields correctly.";
        $messageType = "error";
    } else {
        $stmt = $conn->prepare("INSERT INTO registrations (name, email, phone, event_name) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $event);

        if ($stmt->execute()) {
            $message = "Registration successful! Your details have been saved.";
            $messageType = "success";
        } else {
            $message = "Registration failed. Please try again.";
            $messageType = "error";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Registration | EventEase</title><link rel="stylesheet" href="style.css"></head>
<body>
<header><nav class="navbar"><a class="logo" href="index.html">Event<span>Ease</span></a><div class="nav-links"><a href="index.html">Home</a><a href="events.html">Events</a><a href="schedule.html">Schedule</a><a href="gallery.html">Gallery</a><a href="about.html">About</a><a href="contact.html">Contact</a><a class="btn small active-btn" href="registration.php">Register</a></div></nav></header>
<section class="page-banner"><h1>Event Registration</h1><p>Fill in your details to register for an event.</p></section>
<section class="section form-section">
  <form class="form-card" method="POST" action="registration.php">
    <?php if ($message !== ""): ?><div class="alert <?php echo $messageType; ?>"><?php echo htmlspecialchars($message); ?></div><?php endif; ?>
    <label>Full Name</label><input name="name" required type="text" placeholder="Enter your full name">
    <label>Email Address</label><input name="email" required type="email" placeholder="Enter your email">
    <label>Phone Number</label><input name="phone" required type="tel" placeholder="Enter your phone number">
    <label>Select Event</label>
    <select name="event" required>
      <option value="">-- Select an event --</option>
      <option>Music Fest 2026</option><option>Tech Summit 2026</option><option>Creative Expo</option><option>Startup Meetup</option>
    </select>
    <button class="btn" type="submit">Submit Registration</button>
  </form>
</section>
<footer><p>© 2026 EventEase. All Rights Reserved.</p></footer>
</body></html>