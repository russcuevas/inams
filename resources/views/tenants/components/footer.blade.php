<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Company, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="assets/images/logo.png" width="40" height="32" alt="">
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