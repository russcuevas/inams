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
        <title>Maintenance Page</title>
    </head>
    <body class = "container1">
    {{-- TENANT LEFT SIDEBAR  --}}
    <div class="container2">
        @include('tenants.components.dashboard.left-sidebar')
    </div>
    <div class="container">
        <div class="px-4 my-3 text-center border-bottom">
            <h1 class="display-4 fw-bold" style="color:#013237;"><img src="{{ asset('assets/images/optimizing.png')}}" alt="" style="height:75px; width:75px; object-fit-contain" class="mb-2"> Maintenance</h1>
            <hr>
            <div class="col-lg-15 mx-auto">
                <p class="lead mb-4" style="color:#013237;">Quickly Report, Efficiently Resolve – We're Here to Help</p>
                <div class="mb-3">
                    <!-- Button trigger modal -->
                    <div class="d-flex align-items-end flex-column">
                        <button type="button" class="btn btn-warning fw-bold" style="color:#013237;" data-bs-toggle="modal" data-bs-target="#staticBackdrop_history">
                            Maintenance History
                        </button>
                        
                    </div>
                    <!--comment area---->
                    <form action="" method="POST">
                        <h4 class="mb-2 mb-3 d-flex justify-content-start" style="color:#013237;">Select Unit</h4>
                        <select name="apartment_id" class="form-control" id="apartment_id">
                            <option value="">--Select Unit--</option>
                        </select>
                        <h4 class="mb-2 mb-3 d-flex justify-content-start" style="color:#013237;">Select Category</h4>
                        <select name="category" class="form-control" id="category">
                            <option value="">--Select Category--</option>
                            <option value="lumbing Issues">Plumbing Issues</option>
                            <option value="Electrical">Electrical</option>
                            <option value="HVAC">HVAC</option>
                            <option value="Pest Infestation">Pest Infestation</option>
                            <option value="Structural Damage">Structural Damage</option>
                            <option value="Security Concerns">Security Concerns</option>
                            <option value="Waste Management and Garbage Disposal">Waste Management and Garbage Disposal</option>
                            <option value="Common Area Maintenance">Common Area Maintenance</option>
                            <option value="Internet and Cable Services">Internet and Cable Services</option>
                            <option value="System Application">System Application</option>
                        </select>

                        <h4 class="mb-2 mb-3 d-flex justify-content-start" style="color:#013237;">Select Location</h4>
                        <select name="location" class="form-control" id="">
                            <option value="">--Select Unit--</option>
                            <option value="Anilao, Malolos, Bulacan">Anilao, Malolos, Bulacan</option>
                            <option value="Atlag, Malolos, Bulacan">Atlag, Malolos, Bulacan</option>
                            <option value="Babatnin, Malolos, Bulacan">Babatnin, Malolos, Bulacan</option>
                            <option value="Bagna, Malolos, Bulacan">Bagna, Malolos, Bulacan</option>
                            <option value="Balayong, Malolos, Bulacan">Balayong, Malolos, Bulacan</option>
                            <option value="Balite, Malolos, Bulacan">Balite, Malolos, Bulacan</option>
                            <option value="Bangkal, Malolos, Bulacan">Bangkal, Malolos, Bulacan</option>
                            <option value="Barihan, Malolos, Bulacan">Barihan, Malolos, Bulacan</option>
                            <option value="Bungahan, Malolos, Bulacan">Bungahan, Malolos, Bulacan</option>
                            <option value="Caingin, Malolos, Bulacan">Caingin, Malolos, Bulacan</option>
                        </select>

                        <div class="d-flex align-items-start flex-column mt-3">
                            <h4 style="color:#013237;">Explain your concerns here:</h4>
                            <textarea name="comment" class="shadow-lg" style="width:100%; height:150px; padding:10px; border-radius:5px; border:1px; background-color:#c0e6ba;" placeholder="Explain Here..."></textarea>
                        </div>

                    <div class="d-flex align-items-end flex-column">
                        <input type="hidden" name="newMaintenace" value="">
                        <button type="submit" class="btn btn-warning mb-1 shadow-lg text-light">Submit</button>
                        </form>
                        <button type="button" class="btn btn-danger shadow-lg my-1">Cancel</button>
                    </div>

                    <div class="visually-hidden">
                        @include('tenants.components.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
            
        </body>
    </html>