<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Forms/checkout.css') }}">
    <script src="{{ URL::asset('js/Forms/checkout.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
            <a href="{{ route('cart') }}"><img src="../imgs/Icons/Black/cartblack.png" alt=""></a>
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
                            <a class="nav-link dropdown-toggle" href="{{ route('Catagory.Home') }}"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('Catagory.Home') }}">Cups</a></li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.Home') }}">Pillows</a></li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.Home') }}">Clocks</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('Catagory.Men') }}"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Men
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('Catagory.Men') }}">Shirts</a></li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.Men') }}">Wallets</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('Catagory.Women') }}"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Women
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('Catagory.Women') }}">Shirts</a></li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.Women') }}">Rings</a></li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.Women') }}">Necklace</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('Catagory.stat') }}"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Stationary
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('Catagory.stat') }}">Pen</a></li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.stat') }}">Books</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('Catagory.Banners') }}"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Banners
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('Catagory.Banners') }}">Birthdays</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.Banners') }}">Weddings</a></li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.Banners') }}">Functions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('Catagory.Other') }}"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Others
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('Catagory.Other') }}">Keychains</a></li>
                                <li><a class="dropdown-item" href="{{ route('Catagory.Other') }}">Mobile Covers</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    {{-- <div class="container mt-5">
        <h2>Checkout Summary</h2>

        <div class="row">
            <div class="col" style="display: none">
                <h4>Cart Items</h4>
                <ul>
                    @foreach ($cartItems as $item)
                        <li>
                            Product ID: {{ $item['product_id'] }},

                            Quantity: {{ $item['quantity'] }},
                            Text: {{ $item['uploadedtext'] }},
                            Height: {{ $item['height'] }} (in cm),
                            Width: {{ $item['width'] }} (in cm),
                            Actual Image: <img src="{{ asset($item['actual_image']) }}" alt="Actual Design"
                                style="max-width: 6vw; max-height: 6vw">
                            User Design: <img src="{{ asset($item['uploaded_image']) }}" alt="Uploaded Image"
                                style="max-width: 6vw; max-height: 6vw">
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col">
                <h4>Total</h4>
                <p>Total Amount: ${{ $total }}</p>
            </div>
        </div>

    </div> --}}
    <!--section1 start-->
    <!--checkout Form started-->
    <section class="sec4">
        <center>
            <h2 style="color: black; text-decoration: none;">Checkout Form</h2>
        </center>
        <center>
            <p>Please fill the required fields.</p>
        </center>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form name="checkoutForm" method="post" action="{{ route('stripe.session') }}"
                        onsubmit=" return validateFormCheckout()">
                        @csrf
                        <div class="col" style="display: none">
                            <h4>Cart Items</h4>
                            <ul>
                                @foreach ($cartItems as $item)
                                    <li>
                                        Product ID: {{ $item['product_id'] }},

                                        Quantity: {{ $item['quantity'] }},
                                        Text: {{ $item['uploadedtext'] }},
                                        Height: {{ $item['height'] }} (in cm),
                                        Width: {{ $item['width'] }} (in cm),
                                        Actual Image: <img src="{{ asset($item['actual_image']) }}"
                                            alt="Actual Design" style="max-width: 6vw; max-height: 6vw">
                                        User Design: <img src="{{ asset($item['uploaded_image']) }}"
                                            alt="Uploaded Image" style="max-width: 6vw; max-height: 6vw">
                                    </li>
                                @endforeach
                            </ul>
                            <input type="hidden" name="cartItems" value="{{ json_encode($cartItems) }}">
                        </div>
                        <div class="row">
                            <div class="col-50">
                                <h3 style="color: black; text-decoration: none;">Total : <span>Rs <input
                                            name='totalbill' type="text" value="{{ $total }}" readonly>
                                    </span></h3>
                                <label for="fname"><i class="fa fa-user"></i> First Name</label>
                                <span id="fnameerror" class="span-error"></span>
                                <input class="checkF" type="text" id="fname" name="fname"
                                    placeholder="Enter First Name">
                                <label for="lname"><i class="fa fa-user"></i> Last Name</label>
                                <span id="lnameerror" class="span-error"></span>
                                <input class="checkF" type="text" id="lname" name="lname"
                                    placeholder="Enter Last Name">
                                <label for="saddress"><i class="fa fa-address-card-o"></i> Shippping Address</label>
                                <span id="saddresserror" class="span-error"></span>
                                <input class="checkF" type="text" id="saddress" name="saddress"
                                    placeholder="Enter Shipping Address">
                                <label for="country"><i class="fa fa-globe"></i> Select Country</label>
                                <span id="countryerror" class="span-error"></span>
                                <select class="checkF" name="country" id="country">
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="India">India</option>
                                    <option value="China">China</option>
                                </select>
                                <br>
                                <label for="state"><i class="fa fa-institution"></i> State</label>
                                <span id="stateerror" class="span-error"></span>
                                <input class="checkF" type="text" id="state" name="state"
                                    placeholder="Enter State">
                                <label for="money"><i class="fa fa-money" aria-hidden="true"></i> Payment
                                    Method</label><br>
                                <span id="moneyerror" class="span-error"></span>
                                <input class="checkF" type="radio" name="money" value="cashondelivery" required>
                                COD
                                <input class="checkF" type="radio" name="money" value="banktransfer"> Bank
                                Transfer
                            </div>

                            <div class="col-50">
                                <h3 style="color: black; text-decoration: none;"></h3>
                                <label for="email"><i class="fa fa-envelope"></i> E Mail</label>
                                <span id="emailerror" class="span-error"></span>
                                <input class="checkF" type="text" id="email" name="email"
                                    placeholder="Enter email">
                                <label for="phone"><i class="fa fa-phone"></i> Phone</label>
                                <span id="phoneerror" class="span-error"></span>
                                <input class="checkF" type="text" id="phone" name="phone"
                                    placeholder="Enter Phone Number">
                                <label for="baddress"><i class="fa fa-address-card-o"></i> Billing Address</label>
                                <span id="baddresserror" class="span-error"></span>
                                <input class="checkF" type="text" id="baddress" name="baddress"
                                    placeholder="Enter Billing Address">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <span id="cityerror" class="span-error"></span>
                                <input class="checkF" type="text" id="city" name="city"
                                    placeholder="Enter City">
                                <label for="zip"><i class="fa fa-file-archive-o" aria-hidden="true"></i>
                                    Zip</label>
                                <span id="ziperror" class="span-error"></span>
                                <input class="checkF" type="text" id="zip" name="zip"
                                    placeholder="Enter Zip Code">

                            </div>

                        </div>
                        <input type="submit" value="Continue to checkout" class="button" name="billingbtn">
                    </form>
                </div>
            </div>
        </div>

    </section>

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
        $(document).ready(function() {
            $(".checkF").click(function() {
                $(".span-error").text("");
            });
        });
    </script>

</body>

</html>
