<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Forms/bannerForm.css') }}">
    <script src="{{ URL::asset('js/Forms/bannerForm.js') }}"></script>
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
    <center>
        <div class="sec4">
            <p style="font-size: 2vw"><b><strong>Banners</strong></b></p>
        </div>
    </center>

    {{-- <center>
        <!-- Product details section -->
        <section class="sec4top">

            <div class="sec4right">
                <form action="{{ route('cart.store') }}" method="post" class="sec4form" id="orderSummaryForm"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="sec4left">
                        <img name="actualimage" src="{{ asset($product->picture) }}" alt="" class="sec4img">
                    </div>

                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <span id="fileerror" style="font-size: 1vw;"></span>
                    <input type="file" name="uploadedimg" id="uploadfile"
                        style="height: 2.8vw; width: 18vw; margin-left: 3vw;font-size: 1vw;">

                    <div>
                        <p>Please Enter The Description</p>
                        <textarea id="" cols="40" rows="3" name="uploadedtext" required></textarea>
                    </div>
                    <div>
                        <p>Per Foot Price: {{ $product->price }}</p>
                    </div>
                    <div>
                        <label for="width" style="margin-right: 2.2vw;">Width (ft)</label>
                        <input type="number" name="width" id="width" value="1" min="1"
                            onchange="updatePrice()" required>
                    </div>
                    <div>
                        <label for="height" style="margin-right: 1.8vw;">Height (ft)</label>
                        <input type="number" name="height" id="height" value="1" min="1"
                            onchange="updatePrice()" required>
                    </div>
                    <div>
                        <p style="margin-right: .8vw;">Price Rs.
                            <span>
                                <input name='total' type="text" id="total" value="" readonly>
                            </span>
                        </p>
                    </div>

                    <!-- Existing form fields or additional fields can be added here -->

                    <input type="hidden" id="orderSummaryJson" name="orderSummaryJson" value="">

                    <div class="sec4cart">
                        <button type="submit" name="uploadedbtn">
                            <img src="../imgs/Icons/Black/cartblack.png" alt="">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </center> --}}

    <section class="sec4top">
        <div class="container thick-border border border-3">
            <form action="{{ route('cart1.store') }}" method="post" class="sec4form needs-validation"
                id="orderSummaryForm" enctype="multipart/form-data" novalidate>
                @csrf
                <input type="hidden" name="total" value="{{ $product->price }}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sec4left mb-3">
                            <img name="actualimage" src="{{ asset($product->picture) }}" alt=""
                                class="sec4img img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="hidden" name="product_id" value="{{ $product->serial_no }}">
                        <div class="mb-3">
                            <label for="uploadfile" class="form-label">Upload Image</label>
                            <input type="file" name="uploadedimg" id="uploadfile" class="form-control"
                                style="height: 2.8vw;" required>
                            <div class="invalid-feedback">
                                Please choose a file.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="uploadedtext" class="form-label">Description</label>
                            <textarea class="form-control" id="uploadedtext" name="uploadedtext" cols="40" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a description.
                            </div>
                        </div>
                        <div class="mb-3">
                            <p>Per Foot Price: {{ $product->price }}</p>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="width" class="form-label">Width (ft)</label>
                            <input type="number" name="width" id="width" class="form-control" value="1"
                                min="1" onchange="updatePrice()" required>
                            <div class="invalid-feedback">
                                Please enter a valid width.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="height" class="form-label">Height (ft)</label>
                            <input type="number" name="height" id="height" class="form-control" value="1"
                                min="1" onchange="updatePrice()" required>
                            <div class="invalid-feedback">
                                Please enter a valid height.
                            </div>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <p class="mb-2">Price Rs.</p>
                            <input name='total' type="text" id="total" class="form-control" value=""
                                readonly>
                        </div> --}}

                        <!-- Existing form fields or additional fields can be added here -->

                        <input type="hidden" id="orderSummaryJson" name="orderSummaryJson" value="">

                        <div class="mb-3 sec4cart">
                            <button type="submit" name="uploadedbtn" class="btn btn-dark">
                                {{-- <img src="../imgs/Icons/Black/cartblack.png" alt="" class="me-2"> --}}
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>



    <!---->

    <!--sec5 started-->

    <!--footer started-->
    <footer style="margin-top: 15vw;">
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
        function updatePrice() {
            // Get the values of width and height
            var width = parseFloat(document.getElementById('width').value) || 0;
            var height = parseFloat(document.getElementById('height').value) || 0;

            // Get the base price from the server or set a default value
            var basePrice = parseFloat("{{ $product->price }}") || 0;

            // Calculate the total price
            var totalPrice = basePrice * width * height;

            // Update the total input field
            document.getElementById('total').value = totalPrice.toFixed(2);
        }
        window.addEventListener('load', function() {
            // Call the updatePrice function on window load
            updatePrice();
        });

        // Assuming you are making an AJAX request to the server
        // after submitting the form to save the banner data
    </script>
</body>

</html>

<!--

-->
