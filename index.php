<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BechaKena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="index-style.css">
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
                        <select class="form-select me-2 border1" id="categorySelect">
                            <option selected disabled><b>All</b></option>
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
                        <li class="nav-item">
                            <a class="nav-link border1" href="signin.php">
                                <i class="fas fa-sign-in-alt"></i> <big>Sign In</big>
                            </a>
                        </li>
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
    <main>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="books.php"><img src="images/carousel/3.jpg" class="d-block w-100" alt="books"></a>
              </div>
              <div class="carousel-item">
                <a href="homeappliance.php"><img src="images/carousel/4.jpg" class="d-block w-100" alt="homeappliance"></a>
              </div>
              <div class="carousel-item">
                <a href="gadgets.php"><img src="images/carousel/2.jpg" class="d-block w-100" alt="Gadgets"></a>
              </div>
              <div class="carousel-item">
                <a href="toys.php"><img src="images/carousel/1.jpg" class="d-block w-100" alt="toys"></a>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
          <br>
          <br>
          <h2>Categories</h2>
          <br>
          <div class="container-fluid">
            <div class="row g-0">
                <div class="col-md-3 border2">
                    <a href="shoes.php">
                        <div class="card">
                            <b>Shoes</b>
                            <img src="images/categories/shoes.jpg" class="card-img-top" alt="Shoes">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="smartphone.php">
                        <div class="card">
                            <b>Smartphone</b>
                            <img src="images/categories/smartphone.jpg" class="card-img-top" alt="Smartphone">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="sports.php">
                        <div class="card">
                            <b>Sports</b>
                            <img src="images/categories/sports.jpg" class="card-img-top" alt="Sports">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="books.php">
                        <div class="card">
                            <b>Books</b>
                            <img src="images/categories/books.jpg" class="card-img-top" alt="Books">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="homeappliance.php">
                        <div class="card">
                            <b>Home Appliances</b>
                            <img src="images/categories/home appliance.jpg" class="card-img-top" alt="Home Appliances">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="grocery.php">
                        <div class="card">
                            <b>Grocery</b>
                            <img src="images/categories/grocery.jpg" class="card-img-top" alt="Grocery">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="gadgets.php">
                        <div class="card">
                            <b>Gadgets</b>
                            <img src="images/categories/gadget.jpg" class="card-img-top" alt="Gadgets">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="personalcare.php">
                        <div class="card">
                            <b>Personal Care</b>
                            <img src="images/categories/personal care.jpg" class="card-img-top" alt="Personal Care">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="auction1.php">
                        <div class="card">
                            <b>Auct-Goods</b>
                            <img src="images/categories/auction.jpg" class="card-img-top" alt="Auct-Goods">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="chocolates.php">
                        <div class="card">
                            <b>Chocolates</b>
                            <img src="images/categories/chocolates.jpg" class="card-img-top" alt="Chocolates">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="paints.php">
                        <div class="card">
                            <b>Paints</b>
                            <img src="images/categories/paints.jpg" class="card-img-top" alt="Paints">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="toys.php">
                        <div class="card">
                            <b>Toys</b>
                            <img src="images/categories/toys.jpg" class="card-img-top" alt="Toys">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="artncraft.php">
                        <div class="card">
                            <b>Art & Craft</b>
                            <img src="images/categories/art and craft.jpg" class="card-img-top" alt="Art & Craft">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="pets.php">
                        <div class="card">
                            <b>Pets</b>
                            <img src="images/categories/pets.jpg" class="card-img-top" alt="Pets">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="fashion.php">
                        <div class="card">
                            <b>Fashion</b>
                            <img src="images/categories/fashion.jpg" class="card-img-top" alt="Fashion">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 border2">
                    <a href="furnitures.php">
                        <div class="card">
                            <b>Furniture</b>
                            <img src="images/categories/furniture.jpg" class="card-img-top" alt="Furniture">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h2>Flash Deals</h2>
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/100 dollar start up.jpg" class="card-img-top" alt="100 dollar start up">
                        <div class="card-body">
                            <h5 class="card-title">100$ Start Up</h5>
                            <p class="card-text">Lead a life of adventure, meaning and purpose—and earn a good living.</p>
                            <p class="card-price">$19.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/airpod.jpg" class="card-img-top" alt="airpod">
                        <div class="card-body">
                            <h5 class="card-title">Airpod</h5>
                            <p class="card-text">The AirPods Pro 2nd generation MADE IN DUBAI Bluetooth Earbuds.</p>
                            <p class="card-price">$29.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/birthdaydecoration pack.png" class="card-img-top" alt="birthday pack">
                        <div class="card-body">
                            <h5 class="card-title">Birthday Decoration Pack</h5>
                            <p class="card-text">Helpful for quick decorating a place for someone's birthday celebration.</p>
                            <p class="card-price">$39.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/blackshari with ornaments.png" class="card-img-top" alt="Shari combo">
                        <div class="card-body">
                            <h5 class="card-title">Black Shari Combo</h5>
                            <p class="card-text">Saree Bangles Necklace Earrings Mehedi Mirror Chocolate Gazra etc.</p>
                            <p class="card-price">$49.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/chiaseeds.png" class="card-img-top" alt="chiaseeds">
                        <div class="card-body">
                            <h5 class="card-title">Chiaseeds</h5>
                            <p class="card-text">Quantity : 1 kg Origin: UK. Pure and Fresh Grocery Item. Good for your healthy life.</p>
                            <p class="card-price">$19.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/facewash.jpg" class="card-img-top" alt="face wash">
                        <div class="card-body">
                            <h5 class="card-title">Face Wash</h5>
                            <p class="card-text">This is a Bioaqua Papaya Moisturizing Face Wash -100G.</p>
                            <p class="card-price">$29.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/fat cutter detox powder.jpg" class="card-img-top" alt="detox powder">
                        <div class="card-body">
                            <h5 class="card-title">Detox Powder</h5>
                            <p class="card-text">This is a fat cutter detox powder for Weight losing.</p>
                            <p class="card-price">$39.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/laptopdesk.jpg" class="card-img-top" alt="laptop desk">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Desk</h5>
                            <p class="card-text">Foldable and portable laptop table stand.• Multi-purpose: study table, bed table.</p>
                            <p class="card-price">$49.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/moneybag.jpg" class="card-img-top" alt="money bag">
                        <div class="card-body">
                            <h5 class="card-title">Money Bag</h5>
                            <p class="card-text">High Quality New Fashion Retro PU Leather Short Wallet Men.</p>
                            <p class="card-price">$19.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/photoframe.jpg" class="card-img-top" alt="photoframe">
                        <div class="card-body">
                            <h5 class="card-title">Photoframe</h5>
                            <p class="card-text">Elevate Your Wall Decor with the Fiber Art Photo Frame: A Captivating Canvas.</p>
                            <p class="card-price">$29.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/rechargeable fan.jpg" class="card-img-top" alt="rechargeable fan">
                        <div class="card-body">
                            <h5 class="card-title">Rechargeable Mini Fan</h5>
                            <p class="card-text">JY-2218 Professional Rechargeable Portable Mini Table Fan .</p>
                            <p class="card-price">$39.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/slipper sandal.jpg" class="card-img-top" alt="sandal">
                        <div class="card-body">
                            <h5 class="card-title">Slipper Sandal</h5>
                            <p class="card-text">Stylish Black, Yellow, Green and White Color Slides Slipper SUNZTONZ Light Weight.</p>
                            <p class="card-price">$49.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/sunglass.jpg" class="card-img-top" alt="sunglass">
                        <div class="card-body">
                            <h5 class="card-title">Sunglass</h5>
                            <p class="card-text">New Men Fashionable Sunglasses Black Vision Driving Party Best Sunglasses.</p>
                            <p class="card-price">$19.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/trimmer.jpg" class="card-img-top" alt="trimmer">
                        <div class="card-body">
                            <h5 class="card-title">Trimmer</h5>
                            <p class="card-text">Vintage T9 Electric Hair Cutting Machine Rechargeable T9 Hair Clipper.</p>
                            <p class="card-price">$29.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/tshirt.jpg" class="card-img-top" alt="t-shirt">
                        <div class="card-body">
                            <h5 class="card-title">T-Shirt</h5>
                            <p class="card-text">NEW Stylish Premium Quality Fashionable POLO Shirt For Men.</p>
                            <p class="card-price">$39.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card flash-deal-card">
                        <img src="images/flashdeals/zero to one book.jpg" class="card-img-top" alt="0 to 1">
                        <div class="card-body">
                            <h5 class="card-title">Zero to One</h5>
                            <p class="card-text">Zero to One: Notes on Startups, or How to Build the Future.</p>
                            <p class="card-price">$49.99</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <br>
    <br>
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
    <script>
        document.getElementById('categorySelect').addEventListener('change', function() {
            var selectedPage = this.value;
            if (selectedPage) {
                window.location.href = selectedPage;
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
