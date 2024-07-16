<?php
// next_auction.php
$page_title = "Auction";
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BechaKena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="auction.css">
</head>
<body>
    <div id="auctionTimer" class="text-center my-3"></div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bat.png" class="card-img-top" alt="cricket bat">
                    <div class="card-body">
                        <h5 class="card-title">Cricket Bat of WC23</h5>
                        <p class="card-text">This bat was used in WC23 final match by Warner.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $155</span>
                            <span class="buy-now">Base Price: $150</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike1.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">YAMAHA R15 V5</h5>
                        <p class="card-text">Yamaha's latest model R15 V5 ash color.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $5009</span>
                            <span class="buy-now">Base Price: $5000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike10.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">YAMAHA R15 V3</h5>
                        <p class="card-text">This is blue color Yamaha R15 V3.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $4055</span>
                            <span class="buy-now">Base Price: $4050</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike2.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">YAMAHA MT15 V4</h5>
                        <p class="card-text">This is black color Yamaha MT15 V4 for bike passionate lover.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $6008</span>
                            <span class="buy-now">Base Price: $6000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike3.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">YAMAHA R15 V3</h5>
                        <p class="card-text">Yamaha R15 V3 two year used, good condition, blue color.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $3510</span>
                            <span class="buy-now">Base Price: $3500</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike4.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">LIFAN KPR Red</h5>
                        <p class="card-text">Lifan is a chines bike brand and kpr is the iconic model.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $2550</span>
                            <span class="buy-now">Base Price: $2250</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike5.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">Pulser NS160</h5>
                        <p class="card-text">Bajjaj Pulser NS160 made in Vietnam ash-blue.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $2050</span>
                            <span class="buy-now">Base Price: $2000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike6.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">Pulser NR160 New</h5>
                        <p class="card-text">Bajjaj Pulser NR160 New is assembled in Bangladesh.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $2200</span>
                            <span class="buy-now">Base Price: $2090</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike7.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">Pulser 150</h5>
                        <p class="card-text">This is the first Pulser 150 model lunched in market.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $1500</span>
                            <span class="buy-now">Base Price: $1150</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike8.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">Apache RTR 160</h5>
                        <p class="card-text">TVS Apache RTR 160, millage 45 kilo per litter.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $1100</span>
                            <span class="buy-now">Base Price: $1000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bike9.png" class="card-img-top" alt="Bike">
                    <div class="card-body">
                        <h5 class="card-title">HORNET V2.0 160</h5>
                        <p class="card-text">HONDA Hornet V2.0 160 made in japan.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $3100</span>
                            <span class="buy-now">Base Price: $3000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/car1.png" class="card-img-top" alt="Car">
                    <div class="card-body">
                        <h5 class="card-title">BMW G-Power 1200cc</h5>
                        <p class="card-text">BMW G-Power 1200cc five sit privet car.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $55000</span>
                            <span class="buy-now">Base Price: $50000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/car2.png" class="card-img-top" alt="Item Image">
                    <div class="card-body">
                        <h5 class="card-title">BMW G-Power turbo</h5>
                        <p class="card-text">BMW G-Power 1500cc turbo engine sports car.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $100000</span>
                            <span class="buy-now">Base Price: $95000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/car3.png" class="card-img-top" alt="Car">
                    <div class="card-body">
                        <h5 class="card-title">FERRARI</h5>
                        <p class="card-text">Ferrari 1200cc red sports car.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $90000</span>
                            <span class="buy-now">Base Price: $85000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/car4.png" class="card-img-top" alt="Car">
                    <div class="card-body">
                        <h5 class="card-title">BMW 8 Series</h5>
                        <p class="card-text">BMW 8 series blue color for luxery person.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $2000000</span>
                            <span class="buy-now">Base Price: $1800000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/bus.png" class="card-img-top" alt="Bus">
                    <div class="card-body">
                        <h5 class="card-title">Bus</h5>
                        <p class="card-text">Bus for factory use, 40 sit, red color, happy & comfortable trip.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $22000</span>
                            <span class="buy-now">Base Price: $20000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/house1.png" class="card-img-top" alt="House">
                    <div class="card-body">
                        <h5 class="card-title">House</h5>
                        <p class="card-text">This is a banglo house for personal use or spend vacation.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $200000</span>
                            <span class="buy-now">Base Price: $150000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/house2.png" class="card-img-top" alt="House">
                    <div class="card-body">
                        <h5 class="card-title">House</h5>
                        <p class="card-text">This is a banglo house for personal use or spend vacation.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $200100</span>
                            <span class="buy-now">Base Price: $190150</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/land1.png" class="card-img-top" alt="Land">
                    <div class="card-body">
                        <h5 class="card-title">Land</h5>
                        <p class="card-text">This land is an useful place for building any business.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $100000</span>
                            <span class="buy-now">Base Price: $90000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/rabindranath.png" class="card-img-top" alt="Rabindranath">
                    <div class="card-body">
                        <h5 class="card-title">Rabindronath</h5>
                        <p class="card-text">This portrait was drawn by Jaynul Abedin.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $5100</span>
                            <span class="buy-now">Base Price: $4950</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/ring.png" class="card-img-top" alt="Ring">
                    <div class="card-body">
                        <h5 class="card-title">Diamond Ring</h5>
                        <p class="card-text">this ring was used by british princes.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $2100</span>
                            <span class="buy-now">Base Price: $1500</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/watch1.png" class="card-img-top" alt="Watch">
                    <div class="card-body">
                        <h5 class="card-title">Rollex Watch</h5>
                        <p class="card-text">Luxerious rolex watch for men in black.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $10100</span>
                            <span class="buy-now">Base Price: $9150</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/watch2.png" class="card-img-top" alt="Watch">
                    <div class="card-body">
                        <h5 class="card-title">Rollex Watch</h5>
                        <p class="card-text">Luxerious Rollex watch in golden color.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $20100</span>
                            <span class="buy-now">Base Price: $18150</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4" >
                <div class="card">
                    <img src="images/auction/viollin.png" class="card-img-top" alt="Viollin">
                    <div class="card-body">
                        <h5 class="card-title">Viollin</h5>
                        <p class="card-text">Big Viollin for house to increase beautiful ness.</p>
                        <div class="price-info mb-2">
                            <span class="current-bid">Current Bid: $1100</span>
                            <span class="buy-now">Base Price: $1000</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Enter your bid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Submit Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="auction1.html">1</a></li>
                <li class="page-item"><a class="page-link" href="auction2.html">2</a></li>
            </ul>
        </nav>
    </div>
    <script>
        // Function to get the end time from localStorage or set a new one
        function getOrSetEndTime() {
            let endTime = localStorage.getItem('auctionEndTime');
            if (!endTime) {
                // Set end time to 24 hours from now if not already set
                endTime = new Date().getTime() + 24 * 60 * 60 * 1000;
                localStorage.setItem('auctionEndTime', endTime);
            }
            return parseInt(endTime);
        }
        
        // Get or set the end time
        var countDownDate = getOrSetEndTime();
        
        // Update the countdown every 1 second
        var x = setInterval(function() {
            // Get the current date and time
            var now = new Date().getTime();
        
            // Find the distance between now and the countdown date
            var distance = countDownDate - now;
        
            // Time calculations for hours, minutes and seconds
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
            // Display the result in the element with id="auctionTimer"
            document.getElementById("auctionTimer").innerHTML = "Auction Ends In: " +
            hours + "h " + minutes + "m " + seconds + "s ";
        
            // If the countdown is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("auctionTimer").innerHTML = "AUCTION ENDED";
                // Clear the end time from localStorage when auction ends
                localStorage.removeItem('auctionEndTime');
            }
        }, 1000);
        </script>
</body>
</html>
<?php
include 'footer.php';
?>