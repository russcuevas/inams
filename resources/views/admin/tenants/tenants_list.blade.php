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
        <title>Tenants List</title>
    </head>
    <body>

        {{-- ADMIN LEFT SIDEBAR  --}}
        @include('admin.components.left-sidebar')
        <div class="main">
            <div class="container3">
                <div class="my-3 text-center">
                    <h1 class="display-4 fw-bold" style="color:#013237; margin-left:190px;"><img src="{{ asset('assets/images/tenant.png') }}" alt="" style="height:75px; width:75px object-fit-contain" class="pb-3 my-3">Tenants</h1>
                    <div class="card" style="max-width: 15rem;">
                        <div class="card-header">Total Tenants</div>
                        <div class="card-body">
                            <h5 class="card-title">5</h5>
                        </div>
                    </div>
                </div>
    
    
                <div class="table">

                  <style>
                      h1.admin-header {
                          margin-left: auto !important;
                      }
                  </style>
  
                  <div class="button">
                      <button class="right-button btn btn-success" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">New Tenant</button>
                  </div>
  
                  <div class="table_header">
                      <h3>List of Tenants</h3>
                  </div>
                  <div class="table_section">
                      <table id="myTable" class="table table-striped">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Unit #</th>
                                  <th>Location</th>
                                  <th>Date In</th>
                                  <th>Status</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Russ</td>
                                    <td>2</td>
                                    <td>Secret</td>
                                    <td>2024-12-26</td>
                                    <td><span class='badge bg-success'>Active<span></td>
                                    <td><a href="" class="btn btn-danger">Remove</a></td>
                                </tr>
                          </tbody>
                      </table>
  
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
                if (!$.fn.DataTable.isDataTable('#myTable')) {
                    $('#myTable').DataTable();
                }
            });
        </script>
        <!-- Include Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
    </html>