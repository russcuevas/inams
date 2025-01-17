<header class="p-3 mb-3 border-bottom sticky-top" style ="background-color: #004643;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="" class="d-flex align-items-center mb-2 mb-lg-0 me-5 link-body-emphasis text-decoration-none">
        <img src="assets/images/logo.png" width="200" height="100" alt="">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('homepage') }}" class="pub-menu px-2 text-light">Home</a></li>
          <li><a href="{{ route('apartmentspage') }}" class="pub-menu px-2 text-light">Apartments</a></li>
          <li><a href="{{ route('locationpage') }}" class="pub-menu px-2 text-light">Locations</a></li>
        </ul>

        
        <div class="text-end">
          <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/user1.png" style = "height:40px; width:40px; object-fit-contain;" alt="">
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