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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"></i>PK
                MART</div>
            <div class="list-group list-group-flush my-3">
                <a href="{{ route('orders') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text active"
                    style="color: white;"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>

                <a href="{{ route('analytics') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="{{ route('inventory') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Inventory</a>
                <a href="{{ route('addProduct') }}"
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

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="container mt-3">


                <table class="table table-bordered table-hover bg-white">
                    <thead class="table-dark bg-dark">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product Category</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Quantity</th>

                            <th scope="col">Price</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <form id="deleteForm-{{ $product->id }}"
                                action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ $product->picture }}" alt="Product Image" class="img-fluid"
                                            style="max-width:5vw;text-align:center ">
                                    </td>
                                    <td class="text-center align-middle">{{ $product->product_catagory }}</td>
                                    <td class="text-center align-middle">{{ $product->product_type }}</td>
                                    <td class="text-center align-middle ">{{ $product->name }}</td>
                                    <td class="text-center align-middle">{{ $product->serial_no }}</td>
                                    <td class="text-center align-middle">{{ $product->quantity }}</td>
                                    <td class="text-center align-middle">{{ $product->price }}</td>
                                    <td class="text-center align-middle">
                                        {{-- <button type="button" class="btn btn-danger btn-sm ">Remove</button> --}}
                                        {{-- <button type="submit" class="btn btn-danger btn-sm del" data-product-id="{{ $product->id }}">Remove</button> --}}
                                        <button type="button" class="btn btn-danger btn-sm del"
                                            data-product-id="{{ $product->id }}">Remove</button>
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>











            <!-- Add this modal at the end of the body -->
            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
                aria-labelledby="confirmationModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to remove this product?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="confirmRemove">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <script>
        $(document).ready(function() {
            $('.del').on('click', function() {
                var productId = $(this).data('product-id');
                $('#confirmationModal').modal('show');

                $('#confirmRemove').off('click').on('click', function() {
                    $('#deleteForm-' + productId).submit();
                    $('#confirmationModal').modal('hide');
                });

                $('#confirmationModal .close, #confirmationModal .btn-secondary').on('click', function() {
                    $('#confirmationModal').modal('hide');
                });

                $('#confirmRemove').off('click').on('click', function() {
                    $('#deleteForm-' + productId).submit();
                    $('#confirmationModal').modal('hide');
                });
            });
        });
    </script>







</body>

</html>
