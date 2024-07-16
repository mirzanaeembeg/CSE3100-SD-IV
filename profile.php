<?php
$page_title = "Profile";
include 'header.php';
?>

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

// Database connection
$conn = new mysqli("localhost", "root", "", "bechakenaDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data
$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email, profile_picture FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - BechaKena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <div class="profile-header text-center">
                        <img src="<?php echo $user['profile_picture'] ? $user['profile_picture'] : 'default_profile.jpg'; ?>" alt="Profile Picture" class="profile-pic" id="profile-pic">
                        <h3 class="profile-name"><?php echo htmlspecialchars($user['username']); ?></h3>
                        <p class="profile-email"><?php echo htmlspecialchars($user['email']); ?></p>
                        <form action="upload_profile_picture.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="profilePicture" id="profilePicture" class="form-control form-control-sm" onchange="document.getElementById('profile-pic').src = window.URL.createObjectURL(this.files[0])">
                            <button type="submit" class="btn btn-light btn-sm mt-2">Upload</button>
                        </form>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="personal_info.php"><i class="fas fa-user me-2"></i><span>Personal Info</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_bids.php"><i class="fas fa-gavel me-2"></i><span>My Bids</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="winning_bids.php"><i class="fas fa-trophy me-2"></i><span>Winning Bids</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_orders.php"><i class="fas fa-shopping-cart me-2"></i><span>My Orders</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signout.php"><i class="fas fa-sign-out-alt me-2"></i><span>Sign Out</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="dashboard-card">
                    <h3>Dashboard</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="stat-card">
                                <i class="fas fa-gavel text-primary"></i>
                                <div class="stat-value" id="total-bids">25</div>
                                <div>Total Bids</div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="stat-card">
                                <i class="fas fa-trophy text-success"></i>
                                <div class="stat-value" id="winning-bids">8</div>
                                <div>Winning Bids</div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="stat-card">
                                <i class="fas fa-shopping-cart text-info"></i>
                                <div class="stat-value" id="my-orders">12</div>
                                <div>My Orders</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content for other sections will be loaded here -->
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include 'footer.php';
?>