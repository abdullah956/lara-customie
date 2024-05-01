<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Home/home.css') }}">
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
            @if (session('user_data'))
                {{ session('user_data')['name'] }}
            @endif
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

    <center>
        <h1 style="margin-top: 8%">YOUR ORDER HAS BEEN PLACED</h1>
        <img src="https://cdn-icons-png.flaticon.com/512/61/61222.png" alt=""
            style="width: 10vw;margin-top:2%">
        <p style="margin-top: 2%;font-size:2vw">Thank you for Shopping</p>

    </center>
    {{-- <h2>Your Cart Items:</h2>
    <ul>
        @foreach ($cartItems as $item)
            <li>
                <strong>Product ID: {{ $item['product_id'] }}</strong>
                <p>Price: {{ $item['price'] }}</p>
                <p>Quantity: {{ $item['quantity'] }}</p>
                <p>Actual Image: <img src="{{ asset($item['actual_image']) }}" alt="Actual Image"></p>
                <p>Uploaded Image: <img src="{{ asset($item['uploaded_image']) }}" alt="Uploaded Image">
                </p>
                <p>Uploaded Text: {{ $item['uploadedtext'] }}</p>
                <p>Height: {{ $item['height'] }}</p>
                <p>Width: {{ $item['width'] }}</p>
                <p>Subtotal: {{ $item['subtotal'] }}</p>
                <p>Total :{{ $totalbill }}</p>
            </li>
        @endforeach
    </ul> --}}
    <footer>
        <div class="footerdiv">
            <h3 class="footerheading"
                style="
                padding-top: 10vh;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                font-size: 3vw;
                text-decoration: underline;
                color: rgb(224, 224, 224);
              ">
                Customie PK</h3>
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
        $(".container").slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
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
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>
</body>

</html>
