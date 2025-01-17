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
        <title>Profile Page</title>
    </head>
    <body class = "container1">
            {{-- TENANT LEFT SIDEBAR  --}}
            <div class="container2">
                @include('tenants.components.dashboard.left-sidebar')
            </div>
            <div class="container">
                <div class="px-4 my-3 text-center">
                <h1 class="display-4 fw-bold" style ="color:#013237;"><img src="{{ asset('assets/images/User.png') }}" alt="" style ="height:75px; width:75px object-fit-contain;" class ="pb-3"> Profile</h1>
                <hr>
            </div>
            <div class="container6">
              <div class="col shadow-lg rounded-5 mx-3 pt-4">
                <img src="{{ asset('assets/images/girl.jpg')}}" class ="shadow-lg rounded-circle" style ="height:200px; width:200px; object-fit-contain" alt="">
                <h3 class = "mt-3 fw-bolder">Tenant ID:</h3>
                <h3 class= "fw-bolder mt-3">Sample</h3>
                <h3 class = "fw-normal">Sample</h3>
                
                <!-- Button trigger modal -->
                <div class = "mt-5">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop_edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>Edit Profile
                </button>

                </div>
                <!-- Button trigger modal -->
              
              </div>
              <div class="col2"></div>
              <div class="col rounded-5 mx-5 pt-4 shadow-lg" style="background-color: #C0E6BA; ">
                <div style = "font-size:35px; margin-top:5px;font-weight:bold;">My Apartment</div>
                    <img src="{{ asset('assets/images/rent.jpg') }}" alt="" style ="height:260px; width:260px object-fit-contain;" class ="shadow-lg rounded-3 mt-3">
                    <h3 class = "fw-bold mt-2">Unit 1</h3>
                    <div class = "d-flex flex-row mt-3">
                    <h3 class = "me-3 fw-normal" style ="margin-left:11%;">Sink and Bedroom</h3>
                    <h3 class = "me-3 fw-normal">Aircon</h3>
                    <h3 class = "me-3 fw-normal">2 Rooms</h3>
                    </div>
                </div>
              <div>
                
              </div>
            </div>
            </div>
            
        </body>
    </html>