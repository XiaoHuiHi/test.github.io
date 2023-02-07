<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Header-->
    <input type="checkbox" id="cart">
    <label for="cart" class="label-cart"><span class="las la-shopping-cart"></span></label>
    <h3 class="logo">1 Coin Sandwich</h3>

    <!--Sidebar-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <span class="las la-search"></span>
            <a href="#">Search</a>
        </div>
        <div class="sidebar-menu">
            <span class="las la-home"></span>
            <a href="#">Home</a>
        </div>
        <div class="sidebar-menu">
            <span class="lab la-gratipay"></span>
            <a href="#">Favs</a>
        </div>
        <div class="sidebar-menu">
            <span class="las la-user"></span>
            <a href="#">Profile</a>
        </div>
        <div class="sidebar-menu">
            <span class="las la-sliders-h"></span>
            <a href="#">Setting</a>
        </div>
    </div>
    
    <!--Home Page-->
    <div class="homepage">
        <div class="homepage-banner">
            <img src="Welcome.jpg"/>
        </div>

        <div class="homepage-title"><h2>Welcome Back!</h2></div>
        <div class="homepage-menu">
            <a href="#">Favourites</a>
            <a href="#">Best Seller</a>
            <a href="#">Sandwich</a>
            <a href="#">Beverages</a>
            <a href="#">All</a>
        </div>

        <div class="homepage-content">
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-slicedchicken-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Chicken Slice<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-chicken-teriyaki-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Chicken Teriyaki<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-italian-bmt-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Italian B.M.T.™<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-meatball-marinara-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Meatball Marinara<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-roasted-chicken-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Roasted Chicken<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-roast-beef-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Roast Beef<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-spicy-italian-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Spicy Italian<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-steakandcheese-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Steak & Cheese<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-subway-club-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Subway Club™<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-subway-melt-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Subway Melt™<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-tuna-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Tuna<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-seafood-sensation-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Seafood & Crab<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-turkey-MY-594x334.jpg">
                <div class="card-detail">
                    <h4>Turkey Breast<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-sliced-chicken-ham-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Turkey Breast & Chicken Slice<span>RM10</span></h4>
                </div>
            </div>
            <div class="homepage-card">
                <img class="card-image" src="Card-image/RPLC-all-sandwiches-veggie-delite-PH-594x334.jpg">
                <div class="card-detail">
                    <h4>Veggie Delite™<span>RM10</span></h4>
                </div>
            </div> 
        </div>
    </div>

    <?php
    // $conn = Connect();

    $sql = "SELECT * FROM foodmenu WHERE Food_Stock > 1 ORDER BY Food_ID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
    $count=0;
    }
    while($row = mysqli_fetch_assoc($result)){
        if ($count == 0)
        echo "<div class='row'>";
    }
    ?>

    <!--Cart-->
    <div class="order">
        <h3>Order Menu</h3>
        <div class="table">
            <p>Table B12</p>
        </div>

        <div class="order-time">
            <span class="las la-clock"></span>20 mins
        </div>

        <div class="order-wrapper">
            <div class="order-card">
                <img class="order-image" src="Card-image/RPLC-all-sandwiches-chicken-teriyaki-PH-594x334.jpg">
                <div class="order-detail">
                    <p>Chicken Teriyaki</p>
                    <i class="las la-times"></i><input type="text" value="1">
                </div>
                <h4 class="order-price">RM10</h4>
            </div>
            <div class="order-card">
                <img class="order-image" src="Card-image/RPLC-all-sandwiches-slicedchicken-MY-594x334.jpg">
                <div class="order-detail">
                    <p>Chicken Slice</p>
                    <i class="las la-times"></i><input type="text" value="1">
                </div>
                <h4 class="order-price">RM10</h4>
            </div>
            <div class="order-card">
                <img class="order-image" src="Card-image/RPLC-all-sandwiches-italian-bmt-PH-594x334.jpg">
                <div class="order-detail">
                    <p>Italian B.M.T.™</p>
                    <i class="las la-times"></i><input type="text" value="1">
                </div>
                <h4 class="order-price">RM10</h4>
            </div>
            <div class="order-card">
                <img class="order-image" src="Card-image/RPLC-all-sandwiches-meatball-marinara-PH-594x334.jpg">
                <div class="order-detail">
                    <p>Meatball Marinara</p>
                    <i class="las la-times"></i><input type="text" value="1">
                </div>
                <h4 class="order-price">RM10</h4>
            </div>
        </div>
        <hr class="divider">
        <div class="order-total">
            <p>Subtotal <span>RM 40</span></p>
            <p>Delivery Fee <span>RM 5</span></p>

            <div class="order-promo">
                <input class="input-promo" type="text" placeholder="Apply Voucher">
                <button class="button-promo">Find Promo</button>
            </div>
            <hr class="divider">
            <p>Total <span>RM 45</span></p>
        
        </div>
        <button class="checkout">Checkout</button>
    </div>
    
</body>
</html>