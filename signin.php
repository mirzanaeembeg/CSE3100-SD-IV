<?php
session_start();
// Start output buffering
ob_start();

$page_title = "Sign In - BechaKena";
// Include header after starting the session
include 'header.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        $message = "Both username and password are required!";
    } else {
        // Database connection
        $conn = new mysqli("localhost", "root", "", "bechakenaDB");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION["user_id"] = $user['id'];
                $GLOBALS["user_id"]= $user["id"];
                $user_id = $GLOBALS['user_id'];
                $_SESSION["username"] = $user['username'];
                ob_start();
                header("Location: profile.php");
                ob_end_clean();
                exit();
            } else {
                $message = "Invalid username or password";
            }
        } else {
            $message = "Invalid username or password";
        }

        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn - BechaKena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 sidebar">
                <img src="signin.svg" alt="Sign In Illustration" class="img-fluid">
            </div>
            <div class="col-md-6 form-container d-flex flex-column justify-content-center">
                <h2 class="text-center mb-4">Sign In</h2>
                <?php if (!empty($message)) : ?>
                    <div class="alert alert-danger"><?php echo $message; ?></div>
                <?php endif; ?>
                <form action="signin.php" method="post">
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        <a href="forget_password.php" class="text-decoration-none">Forgot Password?</a>
                    </div>
                </form>
                <p class="text-center">Don't have an account? <a href="registration.php" class="text-decoration-none">Sign Up</a>.</p>                
            </div>
        </div>
    </div>
</body>
</html>
<?php
include 'footer.php';

// End output buffering and send output
ob_end_flush();
?>