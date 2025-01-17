<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tenants/style.css') }}">
</head>
    <body>
        <header class="p-3 mb-3 border-bottom sticky-top" style ="background-color: #004643;">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="" class="d-flex align-items-center mb-2 mb-lg-0 me-5 link-body-emphasis text-decoration-none">
                <img src="{{ asset('assets/images/logo.png') }}" width="200" height="100" alt="">
                </a>
        
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="{{ route('homepage') }}" class="pub-menu px-2 text-light">Home</a></li>
                  <li><a href="{{ route('apartmentspage') }}" class="pub-menu px-2 text-light">Apartments</a></li>
                  <li><a href="{{ route('locationpage') }}" class="pub-menu px-2 text-light">Locations</a></li>
                </ul>
        
                
                <div class="text-end">
                  <div class="dropdown text-end">
                  <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('assets/images/user1.png') }}" style = "height:40px; width:40px; object-fit-contain;" alt="">
                  </a>
                  <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="{{ route('tenants_login_page') }}">Login as Tenant</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin_login_page') }}">Login as Admin</a></li>
                  </ul>
                </div>
        
                </div>
              </div>
            </div>
          </header>

            <div class="container mt-5">
                <form action="" method = "POST" class = "w-50 mx-auto">
                    <h2 class = "fw-bold">Log in as Tenant</h2>
                    <div class="mb-2">
                        <label for="">Username</label>
                        <input required type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="">Password</label>
                        <input required type="password" name="password" class="form-control">
                    </div>
                    <button class="btn btn-warning">Login as Tenant</button>
                </form>
            </div>
            
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="{{ asset('assets/images/logo.png') }}" width="40" height="32" alt="">
            </a>

            <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="{{ route('homepage')}}" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="{{ route('apartmentspage') }}" class="nav-link px-2 text-body-secondary">Apartments</a></li>
            <li class="nav-item"><a href="{{ route('locationpage') }}" class="nav-link px-2 text-body-secondary">Location</a></li>
            </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </html>
</body>
</html>