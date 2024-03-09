<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ URL::asset('Imgs/logo.png') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>


</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"></i>PK
                MART</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>

                <a href="{{ route('analytics') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="{{ route('inventory') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Inventory</a>
                <a href="{{ route('addProduct') }}""
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Add Products</a>

                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle primary-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>User
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Add Clothes and Accessories Section -->
            <div class="col-sm-12 col-md-12 mt-3">
                <div class="container p-4 bg-light rounded" style="max-width: 600px;">
                    <h2 class="mb-4 text-center">Add Products</h2>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('Store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="productType" class="form-label">Category</label>
                            <select class="form-select" name="product_type" id="productType"
                                onchange="updateCategories()">
                                <option value="home">Home</option>
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                                <option value="stationary">Stationary</option>
                                <option value="banners">Banners</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Type</label>
                            <select class="form-select" name="category" id="category">

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="picture" class="form-label">Picture</label>
                            <input type="file" name="picture" class="form-control" id="picture">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="serialNo" class="form-label">Serial No.</label>
                            <input type="text" name="serial_no" class="form-control" id="serialNo">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="quantity"
                                min="1" value="1">
                        </div>
                        <button type="submit" class="btn btn-dark">Add to Cart</button>
                    </form>
                </div>
            </div>









        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>

    <script>
        function updateCategories() {
            // Get the selected value from the first select
            var selectedValue = document.getElementById('productType').value;

            // Get the second select element
            var categorySelect = document.getElementById('category');

            // Clear existing options
            categorySelect.innerHTML = '';

            // Add options based on the selected value
            switch (selectedValue) {
                case 'home':
                    categorySelect.options.add(new Option('Cups', 'cups'));
                    categorySelect.options.add(new Option('Pillows', 'pillows'));
                    categorySelect.options.add(new Option('Clocks', 'clocks'));
                    // Add more options as needed
                    break;
                case 'men':
                    categorySelect.options.add(new Option('Shirts', 'shirts'));
                    categorySelect.options.add(new Option('Wallets', 'wallets'));
                    // Add more options as needed
                    break;
                case 'women':
                    categorySelect.options.add(new Option('Shirts', 'shirts'));
                    categorySelect.options.add(new Option('Rings', 'rings'));
                    categorySelect.options.add(new Option('Necklace', 'necklace'));
                    // Add more options as needed
                    break;
                case 'stationary':
                    categorySelect.options.add(new Option('Pen', 'pen'));
                    categorySelect.options.add(new Option('Books', 'books'));

                    // Add more options as needed
                    break;
                case 'banners':
                    categorySelect.options.add(new Option('Birth Days', 'birthdays'));
                    categorySelect.options.add(new Option('Weddings', 'weddings'));
                    categorySelect.options.add(new Option('Functions', 'functions'));
                    // Add more options as needed
                    break;
                case 'others':
                    categorySelect.options.add(new Option('Key Chains', 'keychains'));
                    categorySelect.options.add(new Option('Mobile Covers', 'mobilecovers'));
                    // Add more options as needed
                    break;
                    // Add cases for other values if needed
                default:
                    // Add a default case or leave it empty if no specific options for the value
                    break;
            }
        }
        window.onload = updateCategories;
    </script>

</body>

</html>
