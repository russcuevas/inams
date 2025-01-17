<div class="d-flex flex-column" style="width: 280px;height:100%;background-color: #004643">
    <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
     <img src="{{ asset('assets/images/logo.png')}}" class = "img-crop" alt="" style="margin-left:11%;">
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto px-4">
      <li class="nav-item">
        <a href="{{ route('tenants.profile.page') }}" class="nav-link link-body-emphasis text-light fw-bold">
            <img src="{{ asset('assets/images/user.png')}}" alt="" class="small-logo">
          Profile
        </a>
      </li>
      <hr>
      <li>
        <a href="{{ route('tenants.maintenance.page') }}" class="nav-link link-body-emphasis text-light fw-bold">
            <img src="{{ asset('assets/images/optimizing.png')}}" alt="" class="small-logo">
          Maintenance
        </a>
      </li>
      <hr>
      <li>
        <a href="{{ route('tenants.payments.page') }}" class="nav-link link-body-emphasis text-light fw-bold">
            <img src="{{ asset('assets/images/cash-on-delivery.png')}}" alt="" class="small-logo">
          Payment
        </a>
      </li>
      <hr>
      <li>
        <a href="{{ route('tenants.message.page')}}" class="nav-link link-body-emphasis text-light fw-bold">
            <img src="{{ asset('assets/images/comments.png')}}" alt="" class="small-logo">
          Messages
        </a>
      </li>
      <hr>
    </ul>
    <div class="container my-3">
      <div class="name my-3 fs-5 text-light" style = "margin-left:14%;">

      </div>
    <hr>
    <a href="" class="outmenu" style = "margin-left:31%; color:red;text-decoration:none;">Log out</a>
   </div>
  </div>
