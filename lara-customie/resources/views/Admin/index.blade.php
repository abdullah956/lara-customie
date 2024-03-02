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

    <style>
        /* Custom scrollbar style */
        ::-webkit-scrollbar {
            width: 12px;
            /* Set the width of the scrollbar */
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Set the background color of the track */
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #969696;
            /* Set the color of the scrollbar handle */
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Set the color of the scrollbar handle on hover */
        }

        /* Optional: Smooth scrolling */
        .table-responsive {
            scroll-behavior: smooth;
        }
    </style>

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

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-4">720</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-4">{{ $totalOrders }}</h3>
                                <p class="fs-5">Orders</p>
                            </div>

                            <i class="fas fa-shopping-bag fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-4" id="approvedOrdersCount">0</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-4">Rs.{{ $totalPrice }}</h3>
                                <p class="fs-5">Earnings</p>
                            </div>
                            <i class="fas fa-wallet fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="row my-5">
                    <div class="col-6">
                        <h3 class="fs-4 mb-3">Recent Orders</h3>
                    </div>
                    <div class="col-6 text-end">
                        <button class="btn btn-secondary" onclick="downloadOrders()">Download List</button>
                    </div>

                    <div class="col">

                        <div class="table-responsive custom-scrollbar" style="max-height: 500px; overflow-y: auto;">
                            <table class="table table-bordered bg-white rounded shadow-sm table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Billing Address</th>
                                        <th scope="col">Shipping Address</th>
                                        <th scope="col">Province</th>
                                        <th scope="col">Cell No</th>
                                        <th scope="col">City</th>
                                        <th scope="col">ZIP Code</th>
                                        <th scope="col">Payment Method</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Approve/Confirmed</th>
                                        <!-- Add other table headers as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->reverse() as $order)
                                        <tr>
                                            <th scope="row">{{ $order->id }}</th>
                                            <td>{{ $order->first_name }}</td>
                                            <td>{{ $order->last_name }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->billing_address }}</td>
                                            <td>{{ $order->shipping_address }}</td>
                                            <td>{{ $order->state }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->city }}</td>
                                            <td>{{ $order->zip }}</td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>{{ $order->totalbill }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>
                                                <button id="approveBtn{{ $order->id }}"
                                                    onclick="approveOrder({{ $order->id }})"
                                                    class="btn btn-success btn-sm">Approve</button>
                                            </td>
                                            <!-- Add other table cells as needed -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <script>
        var approvedOrdersCount = 0;

        function approveOrder(orderId) {
            // Implement your logic to handle the approval action
            // Update the count and any other necessary operations

            // Example: Update the count and change the button text
            approvedOrdersCount++;
            updateApprovedOrdersCount();
            updateButtonAfterApproval(orderId);
        }

        function updateApprovedOrdersCount() {
            // Update the count in the "Delivery" section
            document.getElementById('approvedOrdersCount').innerText = approvedOrdersCount;
        }

        function updateButtonAfterApproval(orderId) {
            // Change the button text to "Confirmed"
            var button = document.getElementById('approveBtn' + orderId);
            if (button) {
                button.innerText = 'Confirmed';
                button.classList.remove('btn-success');
                button.classList.add('btn-warning'); // You can customize the styling as needed
                button.disabled = true; // Optionally, disable the button after confirmation
            }
        }
    </script>
    <script>
        function downloadOrders() {
            // Get the table HTML
            var table = document.querySelector('.table');

            // Convert the table to a worksheet
            var ws = XLSX.utils.table_to_sheet(table);

            // Create a workbook with a single worksheet
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, 'RecentOrders');

            // Save the workbook as an Excel file
            XLSX.writeFile(wb, 'recent_orders.xlsx');
        }
    </script>
</body>

</html>
