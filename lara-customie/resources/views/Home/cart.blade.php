<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Home/cart.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--nav2 start-->
    <nav class="nav2">
        <div class="nav2left"><img src="../imgs/Icons/logo.PNG" alt=""></div>
        <div class="nav2mid">
            <div class="search">
                <input type="text">
                <img src="../imgs/Icons/White/searchwhite.png" alt="">
            </div>
        </div>
        <div class="nav2right">
            <a href=""><img src="../imgs/Icons/Black/heartblack.png" alt=""></a>
            <a href=""><img src="../imgs/Icons/Black/cartblack.png" alt=""></a>
            <a href=""><img src="../imgs/Icons/Black/userblack.png" alt=""></a>
        </div>
    </nav>

    <!--dropdown-->
    <section class="nav3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Cups</a></li>
                                <li><a class="dropdown-item" href="#">Pillows</a></li>
                                <li><a class="dropdown-item" href="#">Clocks</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Men
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Shirts</a></li>
                                <li><a class="dropdown-item" href="#">Wallets</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Women
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Shirts</a></li>
                                <li><a class="dropdown-item" href="#">Rings</a></li>
                                <li><a class="dropdown-item" href="#">Necklace</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Stationary
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Pen</a></li>
                                <li><a class="dropdown-item" href="#">Books</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Banners
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Birthdays</a></li>
                                <li><a class="dropdown-item" href="#">Weddings</a></li>
                                <li><a class="dropdown-item" href="#">Functions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Others
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Keychains</a></li>
                                <li><a class="dropdown-item" href="#">Mobile Covers</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!--section1 start-->
    <!--Product Form started-->
    <!--MAIN SECTION AFTER NAVS-->
    <center>


        <div class="cartheading">
            <p style="margin-left:1vw">PRODUCT DESCRIPTION</p>
            <P>PRICE</P>
            <P>QUANTITY</P>
            <P>TOTAL</P>
            <P>REMOVE</P>
        </div>


        <section class="productscart">


            {{-- 
        <div class="productdiv">
            <span class="productdetails"><img src="Clothingimgs/man-3-removebg-preview.png" alt=""><p class="productname">SHIRT</p></span>
            <span class="productprice">$100</span>
            <input type="number" class="productquantity" name="" id="" value="1">
            <span class="producttotal">$300</span>
            <button type="button">X</button>
        </div> --}}


        </section>
        <section class="cartsummary">


            <div class="summaryheading">
                <P>CART SUMMARY</P>
            </div>
            <div>
                <div class="subtotal">
                    <p>Sub Total</p>
                    <p></p>
                </div>
                <div class="shipping">
                    <p>Shipping</p>
                    <p>Rs30</p>
                </div>
                <div class="total">
                    <p>Total Bill</p>
                    <p></p>
                </div>
                <button type="button" class="chkoutbtn" id='proceedToCheckoutBtn'>Proceed to Checkout</button>

            </div>

        </section>
    </center>
    <!---->

    <!--sec5 started-->

    <!--footer started-->
    <footer>
        <div class="footerdiv">
            <h3 class="footerheading">Customie PK</h3>
            <p class="footerdiscription">
                At Custom Cafe, we believe that everyone deserves to have unique and memorable products. That's
                why we offer a wide range of customizable products, from clothing and accessories to home décor
                and electronics. Once you're happy with your design, we'll take care of the rest. We use
                high-quality printing and manufacturing processes to ensure that your custom product is made to
                the highest standards. And because we're committed to providing our customers with the best
                possible experience, we offer fast and free shipping on all orders.
            </p>
            <h2>FOLLOW US</h2>
            <section class="social">
                <div>
                    <a href=""><img src="../Imgs/Icons/White/fbwhite.png" alt="" /></a>
                </div>
                <div>
                    <a href=""><img src="../Imgs/Icons/White/instawhite.png" alt="" /></a>
                </div>
                <div>
                    <a href=""><img src="../Imgs/Icons/White/twitterwhite.png" alt="" /></a>
                </div>
                <div>
                    <a href=""><img src="../Imgs/Icons/White/whatsappwhite.png" alt="" /></a>
                </div>
            </section>
        </div>
        <p class="footerend">
            @2023 | All rights reserved | Made by Abdullah Arshed
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize cart data only if it's not already present
            if (!localStorage.getItem('cart')) {
                localStorage.setItem('cart', JSON.stringify([]));
            }

            // Retrieve cart data from localStorage
            var cartData = localStorage.getItem('cart');

            if (cartData) {
                // If cart data exists, parse it to an array
                var cartArray = JSON.parse(cartData);

                // Get the cart container element
                var cartContainer = document.querySelector('.productscart');

                // Loop through each item in the cart and create HTML elements
                cartArray.forEach(function(item) {
                    // Create a new productDiv for each item
                    var productDiv = createProductDiv(item);

                    // Append the productDiv to the cart container
                    cartContainer.appendChild(productDiv);
                });

                // Update the cart summary after loading the cart page
                updateCartSummary(cartArray);
            }

            // Add an event listener to handle remove button clicks
            var cartContainer = document.querySelector('.productscart');
            cartContainer.addEventListener('click', function(event) {
                // Check if the clicked element is a remove button
                if (event.target.tagName === 'BUTTON' && event.target.textContent === 'X') {
                    // Call the removeFromCart function with the clicked button
                    removeFromCart(event.target);
                }
            });

            // Add an event listener to handle quantity updates
            cartContainer.addEventListener('input', function(event) {
                // Check if the input is a quantity input
                if (
                    event.target.classList.contains('productquantity') &&
                    event.target.getAttribute('type') === 'number'
                ) {
                    // Call the updateQuantity function with the changed input
                    updateQuantity(event.target);
                }
            });

            // Function to create a new productDiv for a given item
            function createProductDiv(item) {
                var productDiv = document.createElement('div');
                productDiv.classList.add('productdiv');

                // Create HTML elements for the cart item
                var productDetails = document.createElement('span');
                productDetails.classList.add('productdetails');
                productDetails.innerHTML = '<img src="' + item.img + '" alt=""><p class="productname">' + item
                    .title + '</p>';

                var productPrice = document.createElement('span');
                productPrice.classList.add('productprice');
                productPrice.textContent = item.price;

                var productQuantity = document.createElement('input');
                productQuantity.classList.add('productquantity');
                productQuantity.setAttribute('type', 'number');
                productQuantity.setAttribute('value', item.quantity);
                productQuantity.setAttribute('min', '1');

                var productTotal = document.createElement('span');
                productTotal.classList.add('producttotal');
                productTotal.textContent =
                    `Rs ${(item.quantity * parseFloat(item.price.replace('Rs', ''))).toFixed(2)}`;

                var removeButton = document.createElement('button');
                removeButton.setAttribute('type', 'button');
                removeButton.textContent = 'X';

                // Append the created elements to the productDiv
                productDiv.appendChild(productDetails);
                productDiv.appendChild(productPrice);
                productDiv.appendChild(productQuantity);
                productDiv.appendChild(productTotal);
                productDiv.appendChild(removeButton);

                return productDiv;
            }

            // Function to remove an item from the cart
            function removeFromCart(removeButton) {
                var productDiv = removeButton.parentNode;
                var productName = productDiv.querySelector('.productname').textContent;

                // Retrieve cart data from localStorage
                var cartData = localStorage.getItem('cart');

                if (cartData) {
                    // If cart data exists, parse it to an array
                    var cartArray = JSON.parse(cartData);

                    // Find and remove the item from the cart array
                    cartArray = cartArray.filter(function(item) {
                        return item.title !== productName;
                    });

                    // Update the cart in localStorage
                    localStorage.setItem('cart', JSON.stringify(cartArray));

                    // Remove the productDiv from the cart container
                    cartContainer.removeChild(productDiv);

                    // Update the cart summary
                    updateCartSummary(cartArray);
                }
            }

            // Function to update quantity and recalculate total price in cart
            function updateQuantity(quantityInput) {
                var productDiv = quantityInput.parentNode;
                var productName = productDiv.querySelector('.productname').textContent;

                // Retrieve cart data from localStorage
                var cartData = localStorage.getItem('cart');

                if (cartData) {
                    // If cart data exists, parse it to an array
                    var cartArray = JSON.parse(cartData);

                    // Find the item in the cart array
                    var cartItem = cartArray.find(function(item) {
                        return item.title === productName;
                    });

                    // Update the quantity of the item
                    var newQuantity = parseInt(quantityInput.value);

                    // Ensure the new quantity is greater than or equal to 1
                    if (newQuantity < 1) {
                        newQuantity = 1;
                        quantityInput.value = newQuantity;
                    }

                    cartItem.quantity = newQuantity;

                    // Update the cart in localStorage
                    localStorage.setItem('cart', JSON.stringify(cartArray));

                    // Update the total price for the product in the cart
                    var productTotal = productDiv.querySelector('.producttotal');
                    productTotal.textContent =
                        `Rs ${(newQuantity * parseFloat(cartItem.price.replace('Rs', ''))).toFixed(2)}`;

                    // Recalculate and update the cart summary
                    updateCartSummary(cartArray);
                }
            }

            // Function to update the cart summary
            function updateCartSummary(cartArray) {
                var subtotal = 0;

                // Calculate subtotal
                cartArray.forEach(function(item) {
                    subtotal += item.quantity * parseFloat(item.price.replace('Rs', ''));
                });

                var shipping = 30; // Add shipping charges

                // Update subtotal, shipping, and total in the cart summary
                document.querySelector('.subtotal p:last-child').textContent = `Rs ${subtotal.toFixed(2)}`;
                document.querySelector('.shipping p:last-child').textContent = `Rs ${shipping.toFixed(2)}`;
                document.querySelector('.total p:last-child').textContent =
                    `Rs ${(subtotal + shipping).toFixed(2)}`;
            }
        });
        var proceedToCheckoutBtn = document.getElementById('proceedToCheckoutBtn');
        proceedToCheckoutBtn.addEventListener('click', function() {
            // Retrieve cart data from localStorage
            var cartData = localStorage.getItem('cart');

            if (cartData) {
                // If cart data exists, parse it to an array
                var cartArray = JSON.parse(cartData);

                // Calculate subtotal, shipping, and total
                var subtotal = calculateSubtotal(cartArray);
                var shipping = 30; // Add shipping charges
                var total = subtotal + shipping;

                // Construct the URL with query parameters
                var checkoutUrl = '/checkout' + '?total=' + total;

                // Redirect to the checkout page with query parameters
                window.location.href = checkoutUrl;
            }
        });

        // Existing functions...

        // Function to calculate subtotal
        function calculateSubtotal(cartArray) {
            var subtotal = 0;
            cartArray.forEach(function(item) {
                subtotal += item.quantity * parseFloat(item.price.replace('Rs', ''));
            });
            return subtotal;
        }
    </script>

</body>

</html>
