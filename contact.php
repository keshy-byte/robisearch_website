<?php include 'includes/navbar.php'; ?>
<?php include 'db_connect.php'; ?>

<?php
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $user_message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($user_message)) {
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $user_message);

        if ($stmt->execute()) {
            $message = "<div class='alert alert-success text-center mt-3'>✅ Message sent successfully!</div>";
        } else {
            $message = "<div class='alert alert-danger text-center mt-3'>❌ Something went wrong. Please try again.</div>";
        }

        $stmt->close();
    } else {
        $message = "<div class='alert alert-warning text-center mt-3'>⚠️ Please fill in all fields.</div>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Robisearch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 mb-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3>Contact Us</h3>
        </div>
        <div class="card-body">
            <p class="text-center">We’d love to hear from you! Fill out the form below to get in touch.</p>

            <?php echo $message; ?>

            <form method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Send Message</button>
                </div>
            </form>
        </div>

        <!-- Contact Info Section -->
        <div class="card-footer bg-light text-center">
            <h5 class="mt-3">📞 Get in Touch Directly</h5>
            <p>
                <strong>Phone:</strong> +254 700 123 456 | +254 711 654 321 <br>
                <strong>Email:</strong> info@robisearch.com | support@robisearch.com
            </p>
            <p class="text-muted">We’re available Monday to Friday, 8:00 AM – 5:00 PM.</p>
        </div>
    </div>
</div>

</body>
</html>
