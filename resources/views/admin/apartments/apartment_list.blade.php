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
        <title>Apartment List</title>
    </head>
    <body>

        {{-- ADMIN LEFT SIDEBAR  --}}
        @include('admin.components.left-sidebar')
        <div class="main">
            <div class="container3">
                <div class="px-4 my-3 text-center border-bottom">
                    <h1 class="admin-header"><img src="{{ asset('assets/images/house-key.png') }}" alt="" style="height:75px; width:75px object-fit-contain" class="pb-3 me-3"><span style="font-size: 30pxw">Apartment</span></h1>
                </div>
    
                <!-- Card Container -->
    
                <div class="card" style="max-width: 15rem;">
                    <div class="card-header">Total Apartment</div>
                    <div class="card-body">
                        <h5 class="card-title">5</h5>
                    </div>
                </div>
    
                <!-- Table -->
                <div class="table">
                    <div class="button">
                        <button class="right-button btn btn-primary" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=""> View Assign Units</button>
                        <button class="right-button btn btn-success" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="">New Apartment</button>
                    </div>
                    <div class="table_header">
                        <h3>List of Apartment</h3>
                    </div>
                    <div class="table_section" style="overflow-x: auto;">
                        <table id="myApartment" class="table table-striped" style="min-width: 800px;">
                            <thead>
                                <tr>
                                    <th>Unit #</th>
                                    <th>Category</th>
                                    <th>Apartment Details</th>
                                    <th>Price</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>Category 2</td>
                                    <td>Sample..</td>
                                    <td>21221212</td>
                                    <td>
                                        <button data-id="" class="btn btn-primary btn-assign">Occupied</button></td>
                                    <td style="display: flex; gap:10px;width:147px;">
                                        <a href="apartments?id=" class="btn btn-danger">Remove</a>
                                        <button class="btn btn-primary btn-edit">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Table -->
            </div>
        </div>

        </div>
        <!-- Include jQuery (required for DataTables) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Include DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <!-- Initialize DataTables -->
        <script>
            $(document).ready(function() {
                if (!$.fn.DataTable.isDataTable('#myApartment')) {
                    $('#myApartment').DataTable();
                }
            });
        </script>
        <!-- Include Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
    </html>