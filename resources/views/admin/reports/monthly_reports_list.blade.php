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
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/admin.css') }}">
        <title>Monthly Reports List</title>
    </head>
    <body>

        {{-- ADMIN LEFT SIDEBAR  --}}
        @include('admin.components.left-sidebar')
        <div class = "main">

            <div class="container3">
                <div class="px-4 my-3 text-center border-bottom">
                <h1 class="admin-header"><img src="{{ asset('assets/images/sales.png') }}" alt="" style ="height:75px; width:75px object-fit-contain" class ="pb-3 me-3">Reports</h1>      
            </div>
        
                <div class="d-flex flex-row">
                    <div class="card" style="max-width: 15rem;">
                        <div class="card-header">Monthly Payment Report</div>
                            <div class="card-body">
                                <a href="#" class="card-link">View Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    </html>