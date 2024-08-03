<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #F5F7F8;
        }
        .navbar-toggler {
            border: none;
            box-shadow: none;
        }
        .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    .dropdown-toggle:focus, .dropdown-toggle:active {
        outline: none;
        border:none;
        box-shadow: none;
    }
    /* @media (min-width: 768px) {
        .container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .row {
        display: flex;
        flex-direction: column;
        flex: 1;
    }
    } */

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-lg d-flex flex-row" style="color:#FFD700; background:#004B87">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active ms-2 fs-5">
                    <a class="nav-link text-light" href="#"><i class="bi bi-house-fill"></i><span class="ms-2">Home</span> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ms-2 fs-5">
                    <a class="nav-link text-light" href="#"><i class="bi bi-clipboard2-fill"></i><span class="ms-2">Input</span></a>
                </li>
                <li class="nav-item ms-2 fs-5">
                    <a class="nav-link text-light" href="#">Pricing</a>
                </li>
            </ul>
        </div>
        <div class="d-flex flex-row me-2">
            <h1 class="fs-1">Wel<span class="fs-1 text-light">come</span></h1>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-4 me-3 p-0 z-1 bg-secondary">
                <div class="border border-2 border-warning d-flex flex-row align-items-center">
                <img src="/asset/ikon_mobil.png" style="width: 150px; height:150px;" class="z-2">
               <h2 class="fs-4 fw-bold ms-5" style="color:#FFD700;"> <span class="fs-4 fw-bold text-light">Pilih </span>Kendaraan</h2>
               {{-- tempat dropdown --}}
               <div class="dropdown">
                <a class="btn  p-0 fs-3 border-0" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-caret-down-fill text-white ms-3"></i> <!-- Ganti dengan ikon yang sesuai -->
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Inova</a></li>
                  <li><a class="dropdown-item" href="#">Brv</a></li>
                  <li><a class="dropdown-item" href="#">Fortuner</a></li>
                </ul>
              </div>
                </div>
            </div>
            <div class="col mt-4 ms-3 p-0 z-1 bg-secondary">
                <div class="border border-2 border-warning">
                <h3 class="fs-4 text-center text-light">Masih Belum Tau</h3>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
