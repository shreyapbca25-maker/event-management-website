<?php
require_once "db.php";
$result = $conn->query("SELECT id, name, email, phone, event_name, registered_at FROM registrations ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Registrations | EventEase</title><link rel="stylesheet" href="style.css"></head>
<body>
<header><nav class="navbar"><a class="logo" href="index.html">Event<span>Ease</span></a><div class="nav-links"><a href="index.html">Home</a><a href="events.html">Events</a><a href="schedule.html">Schedule</a><a href="gallery.html">Gallery</a><a href="about.html">About</a><a href="contact.html">Contact</a><a class="btn small" href="registration.php">Register</a></div></nav></header>
<section class="page-banner"><h1>Registered Participants</h1><p>Database records from the registration form.</p></section>
<section class="section"><div class="table-wrap"><table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Event</th><th>Date</th></tr>
<?php if ($result && $result->num_rows > 0): while($row = $result->fetch_assoc()): ?>
<tr><td><?= htmlspecialchars($row["id"]) ?></td><td><?= htmlspecialchars($row["name"]) ?></td><td><?= htmlspecialchars($row["email"]) ?></td><td><?= htmlspecialchars($row["phone"]) ?></td><td><?= htmlspecialchars($row["event_name"]) ?></td><td><?= htmlspecialchars($row["registered_at"]) ?></td></tr>
<?php endwhile; else: ?><tr><td colspan="6">No registrations yet.</td></tr><?php endif; ?>
</table></div></section>
<footer><p>For project/demo use. Add authentication before using this page publicly.</p></footer>
</body></html>