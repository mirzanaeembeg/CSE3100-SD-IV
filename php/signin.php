<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BechaKena</title>
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
                <form action="php/login.php" method="post">
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
                        <a href="php/forget_password.php" class="text-decoration-none">Forgot Password?</a>
                    </div>
                </form>
                <p class="text-center">Don't have an account? <a href="register.html" class="text-decoration-none">Sign Up</a>.</p>                
            </div>
        </div>
    </div>
</body>
</html>
