<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BechaKena - Winning Bids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="winning_bids.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <div class="profile-header text-center">
                        <img src="profile.jpg" alt="Profile Picture" class="profile-pic" id="profile-pic">
                        <h3 class="profile-name">Naeem Beg</h3>
                        <p class="profile-email">naeembeg@gmail.com</p>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="profilePicture" id="profilePicture" class="form-control form-control-sm" onchange="document.getElementById('profile-pic').src = window.URL.createObjectURL(this.files[0])">
                            <button type="submit" class="btn btn-light btn-sm mt-2">Upload</button>
                        </form>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="personal_info.html"><i class="fas fa-user me-2"></i><span>Personal Info</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_bids.html"><i class="fas fa-gavel me-2"></i><span>My Bids</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="winning_bids.html"><i class="fas fa-trophy me-2"></i><span>Winning Bids</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_orders.html"><i class="fas fa-shopping-cart me-2"></i><span>My Orders</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sign-out-alt me-2"></i><span>Sign Out</span></a>
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
                <div class="winning-bids-card">
                    <h3>Winning Bids</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Order Time</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be fetched from the database -->
                                <!-- Example row -->
                                <tr>
                                    <td>123</td>
                                    <td>Fan</td>
                                    <td>HomeAppliance</td>
                                    <td>$500</td>
                                    <td>2024-03-15 14:30</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>