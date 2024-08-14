<?php
    include 'header.php';
    // registration.php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $message = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $contact = trim($_POST['contact']);
        $address = trim($_POST['address']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];

        // Basic validation
        if (empty($name) || empty($username) || empty($email) || empty($contact) || empty($address) || empty($password) || empty($confirm_password)) {
            $message = "All fields are required.";
        } elseif ($password !== $confirm_password) {
            $message = "Passwords do not match.";
        } elseif (strlen($password) < 8) {
            $message = "Password must be at least 8 characters long.";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Database connection
            $conn = new mysqli("localhost", "root", "", "bechakenaDB");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO users (name, username, email, contact, address, password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $name, $username, $email, $contact, $address, $hashed_password);

            // Execute the statement
            if ($stmt->execute()) {
                $message = "Registration successful. You can now <a href='signin.php'>sign in</a>.";
            } else {
                $message = "Error: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        }
    }
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Create an Account</h2>
                        <?php if (!empty($message)) : ?>
                            <div class="alert alert-info"><?php echo $message; ?></div>
                        <?php endif; ?>
                        <form action="registration.php" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" id="contact" name="contact" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                        <p class="mt-3 text-center">Already have an account? <a href="signin.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'footer.php';
?>