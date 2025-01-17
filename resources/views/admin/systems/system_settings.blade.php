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
                <div class="px-4 my-3 text-center border-bottom">
                <h1 class="admin-header"><img src="{{ asset('assets/images/house-key.png')}}" alt="" style ="height:75px; width:75px object-fit-contain" class ="pb-3 me-3"><span style="font-size: 25px">System Settings</span></h1>
                
            
                </div>
                 <!-- Form Panel -->
                 <div class="container-form-settings">
                    
                        <form action="#">
                            <div class="system_settings">
                                <div class="input-box-settings">
                                    <span class="details-settings">System Name</span>
                                    <input style="width: 900px !important;" type="text"placeholder = "Enter System Name" required>
                                </div>
                                <div class="input-box-settings">
                                    <span class="details-settings">Email</span>
                                    <input style="width: 900px !important;" type="text"placeholder = "Enter Email" required>
                                </div>
                                <div class="input-box-settings">
                                    <span class="details-settings">Contact</span>
                                    <input style="width: 900px !important;" type="text"placeholder = "Enter Contact" required>
                                </div>
                                <div class="input-box-settings">
                                    <span class="details-settings">About Content</span>
                                    <input style="width: 900px !important;" type="text"placeholder = "Enter About Content" required>
                                </div>
                                <div class="input-box-settings">
                                    <span class="details-settings">Image</span>
                                    <input type="file"placeholder = "Upload Image" required>
                                </div>
                            </div>
                            <div class="save_btn_settings">
                                <input type="submit" value = "Save">
                            </div>
                            <div class="cancel_btn_settings">
                                <input type="submit" value = "Cancel">
                            </div>
                        </form>
                 </div>
            </div>
    </body>
    </html>