<div class="layout">
    <div class="container2">
  <div class="admin-sidebar" style="width: 280px; height:100%; background-color: #004643">
      <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="{{ asset('assets/images/logo.png') }}" class="img-crop" alt="">
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mx-4">
        <li class="nav-item">
          <a href="{{ route('admin.tenants.list') }}" class="menu-list">
            <img src="{{ asset('assets/images/tenant.png') }}" alt="" class="small-logo">
            Tenants
          </a>
        </li>
        <li>
          <a href="{{ route('admin.maintenance.list') }}" class="menu-list">
            <img src="{{ asset('assets/images/optimizing.png') }}" alt="" class="small-logo">
            Maintenance
          </a>
        </li>
        <li>
          <a href="{{ route('admin.monthly_reports.list')}}" class="menu-list">
            <img src="{{ asset('assets/images/sales.png') }}" alt="" class="small-logo">
            Reports
          </a>
        </li>
        <li>
          <a href="{{ route('admin.payment.list') }}" class="menu-list">
            <img src="{{ asset('assets/images/cash-on-delivery.png') }}" alt="" class="small-logo">
            Payments
          </a>
        </li>
        <li>
          <a href="{{ route('admin.message.list') }}" class="menu-list">
            <img src="{{ asset('assets/images/question.png') }}" alt="" class="small-logo">
            Messages
          </a>
        </li>
        <li>
          <a href="{{ route('admin.account.list') }}" class="menu-list">
            <img src="{{ asset('assets/images/team.png') }}" alt="" class="small-logo">
            Accounts
          </a>
        </li>
        <li>
          <a href="{{ route('admin.appartment.list') }}" class="menu-list">
            <img src="{{ asset('assets/images/house-key.png') }}" alt="" class="small-logo">
            Apartments
          </a>
        </li>
        <li>
          <a href="{{ route('admin.system.settings') }}" class="menu-list">
            <img src="{{ asset('assets/images/apartment.png') }}" alt="" class="small-logo">
            System Settings
          </a>
        </li>
        <hr>
      </ul>
      <div class="container my-3">
        <div class="name fs-5 text-light" style="margin-left:14%;">
          {{-- NAME OF ADMIN --}}
        </div>
        <a href="" class="outmenu" style="margin-left:31%; color:red;text-decoration:none;">Log out</a>
        <hr>
      </div>
    </div>
  </div>