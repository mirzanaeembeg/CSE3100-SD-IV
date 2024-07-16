<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'BechaKena'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="footer.css">
</head>

<footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="about.php">About Us</a>
                </div>
                <div class="col-md-3">
                    <a href="customer_service.php">Customer Service</a>
                </div>
                <div class="col-md-3">
                    <a href="terms.php">Terms & Conditions</a>
                </div>
                <div class="col-md-3">
                    <a href="contact_us.php">Contact Us</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <p>&copy; 2024 BechaKena. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
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
