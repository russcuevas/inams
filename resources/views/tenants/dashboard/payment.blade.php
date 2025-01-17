<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/tenant.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/tenant-sidebar.css') }}">
        <title>Payment Page</title>
    </head>
    <body class = "container1">
    
            <div class="container2">
                @include('tenants.components.dashboard.left-sidebar')
            </div>
        
            <div class="container">
                <div class="px-4 my-3 text-center">
                <h1 class="display-4 fw-bold" style ="color:#013237;"><img src="{{ asset('assets/images/cash-on-delivery.png') }}" alt="" style ="height:75px; width:75px object-fit-contain" class ="pb-3"> Payment</h1>
                <hr>
            </div>
            <div class="container6">
        
        <div class="col rounded-5 m-2 mx-5 shadow-lg">
          <img src="{{ asset('assets/images/rent.jpg') }}" class = "rounded-top"style ="height:260px; width:100%; object-fit-contain" alt="">
          <h3 class = "mt-3 fw-bolder pb-2 mb-4 border-bottom border-success-subtle">Apartment 1</h3>
          <h3 class= "fw-bolder mt-1">Total Amount Due: <br> Php 20,000</h3>
            <div class = "d-flex flex-row mt-3">
              <h3 class = "me-3 fw-normal" style ="margin-left:8%;">Sink and Bedroom</h3>
              <h3 class = "me-3 fw-normal">Aircon</h3>
              <h3 class = "me-3 fw-normal">2 Rooms</h3>
            </div>
        
            <div class = "mt-2 mb-4">
              <h3 class ="fw-bold" style = "color:red;">Due Date: January 1,2025</h3>
            </div>
        </div>
        <div class="col2 visually-hidden"></div>
        
        <div class="col rounded-5 m-2 mx-5 shadow-lg" style ="background-color:#c0E6BA;">
          <h3 class ="mt-3 fw-bolder">Scan to Pay</h3>
          <img src="{{ asset('assets/images/qr.jpg')}}" alt="" style ="height:350px; width:300px; object-fit-contain;" class ="shadow-lg rounded-5 mt-3">
          
          <!-- Button trigger modal -->
          <div class = "m-3">
          <button type="button" class="btn btn-warning fw-bold shadow-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop_payment">
          Fill up Form
          </button>
          <button type="button" class="btn btn-success fw-bold shadow-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop_paymenthistory">
          Payment History
          </button>
          </div>
        
        
        </div>
        </div>
        <div>
          
        </div>
        </body>
    </html>