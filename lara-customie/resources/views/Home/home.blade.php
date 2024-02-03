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
            <a href=""><img src="../imgs/Icons/Black/cartblack.png" alt=""></a>
            <a href=""><img src="../imgs/Icons/Black/userblack.png" alt=""></a>{{ $name }}
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


    <!--slider-->
    <section class="slider">
        <div class="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imgs/Banners/main.PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imgs/Shirts/main.PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imgs/Cards/main.PNG" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="description">
            <p>
                Discover endless customization at Customie PK! Unleash your creativity on our user-friendly platform,
                personalizing everything from apparel to accessories. With a range of vibrant options, your unique style
                shines through effortlessly. Elevate your self-expression and create bespoke items that reflect you.
                Welcome to customization made simple – <b>Welcome to Customie PK!</b>
            </p>
        </div>
    </section>

    <!--catagories start-->
    <center>
        <div class="catagoriesHeading">
            <p><strong><b>Catagories</b></strong></p>
        </div>
    </center>
    <section class="categories">
        <ul class="cards">
            <li>
                <a href="" class="card">
                    <img src="../imgs/Cards/c1.PNG" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <div class="card__header-text">
                                <h3 class="card__title">Cards</h3>

                            </div>
                        </div>
                        <p class="card__description" style="text-align: center;">Crafting personalized cards to
                            capture
                            moments with a touch of heartfelt uniqueness</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <img src="../imgs/Banners/main.PNG" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <div class="card__header-text">
                                <h3 class="card__title">Banners</h3>
                            </div>
                        </div>
                        <p class="card__description" style="text-align: center;">Designing bespoke banners that turn
                            your vision into a vibrant reality for every occasion</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <img src="../imgs/Shirts/main.PNG" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <div class="card__header-text">
                                <h3 class="card__title">Men</h3>
                            </div>
                        </div>
                        <p class="card__description" style="text-align: center;">Crafting personalized men's
                            accessories
                            that elevate your style with individuality and distinction</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <img src="../imgs/Shirts/s1.PNG" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <div class="card__header-text">
                                <h3 class="card__title">Women</h3>
                            </div>
                        </div>
                        <p class="card__description" style="text-align: center;">Curating bespoke women's accessories
                            that blend elegance and individuality for a touch of personalized glamour</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <img src="../imgs/Home/main.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <div class="card__header-text">
                                <h3 class="card__title">Home</h3>

                            </div>
                        </div>
                        <p class="card__description" style="text-align: center;">Transforming spaces with personalized
                            home decor, where every piece reflects your style and memories</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <img src="../imgs/Cups/main.PNG" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <div class="card__header-text">
                                <h3 class="card__title">Others</h3>

                            </div>
                        </div>
                        <p class="card__description" style="text-align: center;">Crafting unique accessories that tell
                            your story through personalized design, adding a touch of individuality to every ensemble
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                    <img src="../imgs/Pens/p1.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <div class="card__header-text">
                                <h3 class="card__title">Stationary</h3>

                            </div>
                        </div>
                        <p class="card__description" style="text-align: center;">Crafting unique stationary that tell
                            your story through personalized design, adding a touch of individuality to every ensemble
                        </p>
                    </div>
                </a>
            </li>
        </ul>
    </section>

    <!--catagories eneded-->
    <center>
        <div>
            <p style="font-size: 2vw"><b><strong>Top Orders</strong></b></p>
        </div>
    </center>

    <section class="sec4" style="background-color:rgb(0, 0, 0);height: 70vh;width: 100%;">
        <div class="container page-wrapper" style=" width: 87vw; background-color: rgb(255, 255, 255);">
            <div class="page-inner">
                <div class="row">
                    <div class="el-wrapper">
                        <div class="box-up">
                            <img class="img" src="../imgs/Books/book.jpg" alt="" style="width: 100%;">
                            <div class="img-info">
                                <div class="info-inner">
                                    <span class="p-name">Books</span>
                                    <span class="p-company"></span>
                                </div>
                                <div class="a-size"><span class="size"></span></div>
                            </div>
                        </div>

                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>

                            <a class="cart" href="#">
                                <span class="price">$120</span>
                                <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-inner">
                <div class="row">
                    <div class="el-wrapper">
                        <div class="box-up">
                            <img class="img" src="../imgs/Shirts/s2.jpg" alt="" style="width: 100%;">
                            <div class="img-info">
                                <div class="info-inner">
                                    <span class="p-name">Shirts</span>
                                    <span class="p-company"></span>
                                </div>
                                <div class="a-size"><span class="size"></span></div>
                            </div>
                        </div>

                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>

                            <a class="cart" href="#">
                                <span class="price">$120</span>
                                <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-inner">
                <div class="row">
                    <div class="el-wrapper">
                        <div class="box-up">
                            <img class="img" src="../imgs/Rings/r1.jpg" alt="" style="width: 100%;">
                            <div class="img-info">
                                <div class="info-inner">
                                    <span class="p-name">Rings</span>
                                    <span class="p-company">Yeezy</span>
                                </div>
                                <div class="a-size"><span class="size"></span></div>
                            </div>
                        </div>

                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>

                            <a class="cart" href="#">
                                <span class="price">$120</span>
                                <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-inner">
                <div class="row">
                    <div class="el-wrapper">
                        <div class="box-up">
                            <img class="img" src="../imgs/Necklace/n1.jpg" alt="" style="width: 100%;">
                            <div class="img-info">
                                <div class="info-inner">
                                    <span class="p-name">pen</span>
                                    <span class="p-company">Yeezy</span>
                                </div>
                                <div class="a-size"><span class="size"></span></div>
                            </div>
                        </div>

                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>

                            <a class="cart" href="#">
                                <span class="price">$120</span>
                                <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-inner">
                <div class="row">
                    <div class="el-wrapper">
                        <div class="box-up">
                            <img class="img" src="../imgs/Pens/p1.jpg" alt="" style="width: 100%;">
                            <div class="img-info">
                                <div class="info-inner">
                                    <span class="p-name">Pen</span>
                                    <span class="p-company">Yeezy</span>
                                </div>
                                <div class="a-size"><span class="size"></span></div>
                            </div>
                        </div>

                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>

                            <a class="cart" href="#">
                                <span class="price">$120</span>
                                <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-inner">
                <div class="row">
                    <div class="el-wrapper">
                        <div class="box-up">
                            <img class="img" src="../imgs/Pillows/p1.jpg" alt="" style="width: 100%;">
                            <div class="img-info">
                                <div class="info-inner">
                                    <span class="p-name">Shirts</span>
                                    <span class="p-company">Yeezy</span>
                                </div>
                                <div class="a-size"><span class="size"></span></div>
                            </div>
                        </div>

                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>

                            <a class="cart" href="#">
                                <span class="price">$120</span>
                                <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </section>
    <!--sec5 started-->
    <section class="sec5">
        <center>
            <div class="sec5left">
                <img src="../imgs/Icons/Black/clockblack.png" alt="">
                <p>Delivery on time.</p>
            </div>
        </center>
        <center>
            <div class="sec5mid">
                <img src="../imgs/Icons/Black/moneyblack.png" alt="">
                <p>Secure payment.</p>
            </div>
        </center>
        <center>
            <div class="sec5left">
                <img src="../imgs/Icons/Black/moneyblack.png" alt="">
                <img src="imgs/Icons/Black/truckblack.png" alt="">
                <p>Free shipping</p>
            </div>
        </center>
    </section>
    <!--footer started-->
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
