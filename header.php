<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'BechaKena'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg custom-navbar-bg">
        <div class="container-fluid">
            <a class="navbar-brand border1" href="index.php"><img src="logo.png" alt="Logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active border1" aria-current="page" href="auction1.php">
                            <i class="fas fa-gavel"></i> <big>Auction</big>
                        </a>
                    </li>
                </ul>
                <div class="d-flex w-40 nav-search">
                    <select class="form-select me-2 border1" id="categorySelect" onchange="navigateToPage()">
                        <option selected disabled><b>All</b></option>
                        <option value="shoes.php"><b>Shoes</b></option>
                        <option value="smartphone.php"><b>Smartphone</b></option>
                        <!-- ... other options ... -->
                    </select>
                    <input class="form-control me-2 border1" type="search" placeholder="Search on BechaKena" aria-label="Search">
                    <button class="btn btn-outline-success border1 navbarx" type="submit"><big>Search</big></button>
                </div>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link border1" href="orders.php">
                            <i class="fas fa-clipboard-list"></i> <big>Order</big>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border1" href="cart.php">
                            <i class="fas fa-shopping-cart"></i> <big>Cart</big>
                        </a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link border1" href="profile.php">
                                <i class="fas fa-user"></i> <big>Profile</big>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border1" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> <big>Logout</big>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link border1" href="signin.php">
                                <i class="fas fa-sign-in-alt"></i> <big>Sign In</big>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="navbar-links">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col text-center">
                    <a href="seller_registration.php" class="nav-link">Seller Reg.</a>
                </div>
                <div class="col text-center">
                    <a href="next_auction.php" class="nav-link">Next Auction</a>
                </div>
                <div class="col text-center">
                    <a href="hot_deals.php" class="nav-link">Hot Deals</a>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
function navigateToPage() {
    var select = document.getElementById('categorySelect');
    var selectedValue = select.options[select.selectedIndex].value;
    if (selectedValue) {
        window.location.href = selectedValue;
    }
}
</script>
</body>