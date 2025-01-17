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
                <h1 class="display-4 fw-bold" style ="color:#013237;"><img src="{{ asset('assets/images/comments.png') }}" alt="" style ="height:75px; width:75px object-fit-contain" class ="pb-3"> Message the Owner</h1>
                <hr>
            </div>
            <form action="" method="POST">
                     <div class ="d-flex align-items-end flex-column m-4">
                    <button type="button" class="btn btn-warning fw-bold" style ="color:#013237;" data-bs-toggle="modal" data-bs-target="#staticBackdrop_message">
                        Message History
                    </button>
                     </div>
                     <div class ="d-flex align-items-start flex-column m-4"style ="color:#013237;">    
                     <h4>Message the owner:</h4>
                     <textarea name="message" class = "shadow-lg" style= "width:100%; height:270px; padding:10px; border-radius:5px; border:1px; background-color:#c0e6ba;"placeholder ="Message Here..."></textarea>
                     </div>
                </form>
                
                 <div class= "d-flex align-items-end flex-column me-4">
                 <button type="submit" class="btn btn-warning mb-1 shadow-lg text-light">Submit</button>
                 <button type="submit" class="btn btn-danger shadow-lg my-1">Cancel</button>
                 </div>

                 <div class="visually-hidden">
                    @include('tenants.components.footer')
                </div>
        </div>
        </body>
    </html>