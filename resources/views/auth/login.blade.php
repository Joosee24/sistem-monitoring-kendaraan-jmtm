<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("/asset/x2u9prt7.bmp");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .bg-white-transparent  {
      background-color: rgba(255, 255, 255, 0.7); /* White color with 50% opacity */
    }
    </style>
</head>
<body class="me-0">
    <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100 ">
        <form class="bg-white-transparent  border border-dark rounded shadow p-5 d-flex flex-column align-items-center" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="mb-4">Login</h2>
            <div class="mb-3">
                <center><label for="email " class="form-label">Email address</label></center>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <center><label for="password" class="form-label">Password</label></center>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @if(session('status'))
    <script>
        alert("{{ session('status') }}");
    </script>
@endif
@if($errors->any())
    <script>
        alert("{{ $errors->first() }}");
    </script>
@endif


</body>
</html>
