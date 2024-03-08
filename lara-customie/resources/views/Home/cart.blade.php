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



    <!-- ... (previous code) ... -->




    <div class="container mt-5 cart-container p-5">
        <div class="cart-headings mb-3 p-2">
            <div class="col">ID</div>
            <div class="col">Actual Design</div>
            <div class="col">User Design</div>
            <div class="col">Price</div>
            <div class="col">Height</div>
            <div class="col">Width</div>
            <div class="col">Quantity</div>
            <div class="col">Subtotal</div>
            <div class="col">Remove</div>
        </div>

        <!-- Display product items dynamically -->
        @foreach ($cartItems as $item)
            <div class="row cart-item mb-2 border border-secondary rounded p-2">
                <div class="col d-flex align-items-center">{{ $item['product_id'] }}</div>
                <div class="col"><img src="{{ asset($item['actualImage']) }}" alt="Actual Design"
                        style="max-width: 6vw;max-height:6vw"></div>
                <div class="col"><img src="{{ asset(Storage::url($item['uploadedImagePath'])) }}"
                        alt="Uploaded Image" style="max-width: 6vw;max-height-6vw"></div>
                <div class="col  d-flex align-items-center">{{ $item['total'] }}</div>
                <div class="col  d-flex align-items-center ">{{ $item['height'] }}</div>
                <div class="col  d-flex align-items-center">{{ $item['width'] }}</div>
                <div class="col  d-flex align-items-center">
                    <!-- Placeholder for Quantity -->
                    <!-- You can replace this with the actual quantity value -->
                    <input type="number" class="form-control quantity-input" min="1" value="1"
                        name="quantity" id="quantityInput" data-price="{{ $item['total'] }}"
                        data-product-id="{{ $item['product_id'] }}"
                        data-actual-image="{{ asset($item['actualImage']) }}"
                        data-uploaded-image="{{ asset(Storage::url($item['uploadedImagePath'])) }}"
                        data-height="{{ $item['height'] }}" data-width="{{ $item['width'] }}">
                </div>
                <div class="col  d-flex align-items-center">
                    <!-- Placeholder for Subtotal -->
                    <!-- You can replace this with the actual subtotal value -->

                    <span class="subtotal">{{ $item['total'] }}</span>
                </div>
                <div class="col  d-flex align-items-center">
                    <a href="" class="btn btn-danger btn-sm">Remove</a>
                </div>
            </div>
        @endforeach

        <!-- Display total -->
        <div class="col mt-3">
            <div class="col-6">
                <p>Total: <span id="total"></span></p>
            </div>
            <div class="col-6">
                <form id="checkoutForm" action="{{ url('/checkout') }}" method="post">
                    @csrf <!-- Include CSRF token for Laravel -->

                    <input type="hidden" name="cartItems" id="cartItemsInput">
                    <input type="hidden" name="total" id="totalInput">

                    <div class="col-6">
                        <button type="button" class="btn btn-dark btn-lg" id="proceedToCheckoutBtn">Proceed to
                            Checkout</button>
                    </div>
            </div>
            </form>
        </div>
    </div>




    <!-- ... (remaining code) ... -->

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get all quantity input fields
            const quantityInputs = document.querySelectorAll('.quantity-input');

            // Add onchange event listener to each quantity input
            quantityInputs.forEach(function(input) {
                input.addEventListener('change', function() {
                    // Get the quantity and other details
                    const quantity = parseInt(this.value);
                    const price = parseFloat(this.dataset.price);
                    const productId = this.dataset.productId;

                    const actualImage = this.dataset.actualImage ? this.dataset.actualImage : '';
                    const uploadedImage = this.dataset.uploadedImage ? this.dataset.uploadedImage :
                        '';
                    const height = this.dataset.height ? this.dataset.height : '';
                    const width = this.dataset.width ? this.dataset.width : '';


                    // Calculate subtotal
                    const subtotal = quantity * price;

                    // Update the corresponding subtotal element
                    const subtotalElement = this.closest('.cart-item').querySelector('.subtotal');
                    subtotalElement.textContent = subtotal.toFixed(2);

                    // Update the total
                    updateTotal();
                });
            });

            // Function to update the total based on all subtotals
            function updateTotal() {
                const subtotalElements = document.querySelectorAll('.subtotal');
                let total = 0;

                // Calculate the sum of all subtotals
                subtotalElements.forEach(function(subtotalElement) {
                    total += parseFloat(subtotalElement.textContent);
                });

                // Update the total element
                document.getElementById('total').textContent = total.toFixed(2);
            }

            function onPageLoad() {
                // Call your updateTotal function here
                updateTotal();
            }

            // Attach the onPageLoad function to the onload event of the window
            window.onload = onPageLoad;
        });

        document.addEventListener("DOMContentLoaded", function() {
            const quantityInputs = document.querySelectorAll('.quantity-input');

            quantityInputs.forEach(function(input) {
                input.addEventListener('change', function() {
                    updateTotal();
                });
            });

            function proceedToCheckout() {
                const cartItems = [];

                // Loop through each cart item to gather values
                quantityInputs.forEach(function(input) {
                    const cartItem = {
                        product_id: input.dataset.productId,
                        quantity: parseInt(input.value),
                        actual_image: input.dataset.actualImage,
                        uploaded_image: input.dataset.uploadedImage,
                        height: input.dataset.height,
                        width: input.dataset.width,
                        price: parseFloat(input.dataset.price),
                        subtotal: parseFloat(input.closest('.cart-item').querySelector('.subtotal')
                            .textContent)
                    };

                    cartItems.push(cartItem);
                });

                const total = document.getElementById('total').textContent;

                // Set values in hidden inputs
                document.getElementById('cartItemsInput').value = JSON.stringify(cartItems);
                document.getElementById('totalInput').value = total;

                // Submit the form
                document.getElementById('checkoutForm').submit();
            }

            // Add click event listener to the document body
            document.body.addEventListener('click', function(event) {
                // Check if the clicked element has the id 'proceedToCheckoutBtn'
                if (event.target.id === 'proceedToCheckoutBtn') {
                    proceedToCheckout();
                }
            });

            function updateTotal() {
                // ... (your existing updateTotal logic)

                const subtotalElements = document.querySelectorAll('.subtotal');
                let total = 0;

                // Calculate the sum of all subtotals
                subtotalElements.forEach(function(subtotalElement) {
                    total += parseFloat(subtotalElement.textContent);
                });

                // Update the total element
                document.getElementById('total').textContent = total.toFixed(2);
            }
        });
    </script>
</body>

</html>
