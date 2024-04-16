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
            background: #a5a5a5;
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
                <a href="{{ route('orders') }}"
                    class="list-group-item list-group-item-action bg-transparent second-text active"
                    style="color: white;"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>

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

            <div class="container-fluid px-4">

                <!-- Recent Orders -->

                <div class="row my-5 bg-white" id="analytics">
                    <div class="col-md-6">
                        <h3 class="fs-4 mb-3">Orders Chart</h3>
                        <canvas id="ordersChart" width="400" height="200"></canvas>
                    </div>
                    <div class="col-md-6 ">
                        <h3 class="fs-4 mb-3">Earnings Chart</h3>
                        <canvas id="earningsChart" width="400" height="200"></canvas>
                    </div>
                </div>
                <div class="row my-5 bg-white" id="aovChart">
                    <div class="col-md-6">
                        <h3 class="fs-4 mb-3">Average Order Value (AOV) Chart</h3>
                        <canvas id="aovChartCanvas" width="400" height="200"></canvas>
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
        var ordersData = {!! json_encode($ordersChartData) !!};
        var earningsData = {!! json_encode($earningsChartData) !!};

        // Orders Chart
        var ordersCtx = document.getElementById('ordersChart').getContext('2d');
        var ordersChart = new Chart(ordersCtx, {
            type: 'line',
            data: {
                labels: Object.keys(ordersData),
                datasets: [{
                    label: 'Orders',
                    data: Object.values(ordersData),
                    fill: false,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                }]
            }
        });

        // Earnings Chart
        var earningsCtx = document.getElementById('earningsChart').getContext('2d');
        var earningsChart = new Chart(earningsCtx, {
            type: 'bar',
            data: {
                labels: Object.keys(earningsData),
                datasets: [{
                    label: 'Earnings',
                    data: Object.values(earningsData),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                }]
            }
        });
        var aovData = {!! json_encode($aovChartData) !!};

        // AOV Chart
        var aovCtx = document.getElementById('aovChartCanvas').getContext('2d');
        var aovChart = new Chart(aovCtx, {
            type: 'line',
            data: {
                labels: Object.keys(aovData),
                datasets: [{
                    label: 'AOV',
                    data: Object.values(aovData),
                    fill: false,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                }]
            }
        });
    </script>


</body>

</html>
