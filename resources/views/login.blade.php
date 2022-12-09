<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Buku | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        main {
            height: 100vh;
        }
    </style>
</head>

<body>
    <main class="d-flex justify-content-center align-items-center">
        {{-- login form --}}

        <div class="card" style="width: 18rem;">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

                <div class="mt-3">
                    <p>Belum punya akun? <a href="/register">Daftar</a></p>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
