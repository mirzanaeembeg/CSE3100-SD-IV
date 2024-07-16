<?php
// seller_registration.php
$page_title = "Seller Registration";
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BechaKena - Seller Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="seller_registration.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="registration-form">
                    <h2 class="text-center">Register you as a Seller</h2>
                    <form action="register_seller.php" method="post">
                        <div class="mb-3">
                            <label for="businessName" class="form-label">Business Name</label>
                            <input type="text" class="form-control" id="businessName" name="businessName" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactName" class="form-label">Contact Name</label>
                            <input type="text" class="form-control" id="contactName" name="contactName" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactNumber" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contactNumber" name="contactNumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="businessType" class="form-label">Business Type</label>
                            <select class="form-select" id="businessType" name="businessType" required>
                                <option value="Retail">Retail</option>
                                <option value="Wholesale">Wholesale</option>
                                <option value="Manufacturer">Manufacturer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="businessLicense" class="form-label">Business License Number</label>
                            <input type="text" class="form-control" id="businessLicense" name="businessLicense" required>
                        </div>
                        <div class="mb-3">
                            <label for="taxId" class="form-label">Tax Identification Number (TIN)</label>
                            <input type="text" class="form-control" id="taxId" name="taxId" required>
                        </div>
                        <div class="mb-3">
                            <label for="website" class="form-label">Website (optional)</label>
                            <input type="url" class="form-control" id="website" name="website">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                        <br><br>
                        <small class="text1">Already have a seller account?<a href="#">Sign In</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</body>
</html>
<?php
include 'footer.php';
?>