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
        <title>Message List</title>
    </head>
    <body>

        {{-- ADMIN LEFT SIDEBAR  --}}
        @include('admin.components.left-sidebar')
        <div class="main">
            <div class="container3">
                <div class="px-4 my-3 text-center border-bottom">
                <h1 class="admin-header"><img src="{{ asset('assets/images/comments.png') }}" alt="" style ="height:75px; width:75px object-fit-contain" class ="pb-3">Messages</h1>
                </div>
                
                  <!-- Table -->
                  <div class="table">
                <div class="table_header">
                    <h3>List of Messages</h3>
                    <div class>
                        <input class = "search_admin"placeholder = "Search.."/>
                        
                    </div>
                    
                </div>
                <div class="table_section">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tenant Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Messages</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Joane</td>
                                    <td>Santiago</td>
                                    <td>Ganda ng System</td>
                                    <td>May 24 ,2004</td>
                                    <td>
                                        <button class = "admin_but">
                                        <svg class = "admin_archive"xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#153608"><path d="m480-270 156-156-40-40-86 86v-201h-60v201l-86-86-40 40 156 156ZM180-120q-24.75 0-42.37-17.63Q120-155.25 120-180v-529q0-9.88 3-19.06 3-9.18 9-16.94l52-71q8-11 20.94-17.5Q217.88-840 232-840h495q14.12 0 27.06 6.5T775-816l53 71q6 7.76 9 16.94 3 9.18 3 19.06v529q0 24.75-17.62 42.37Q804.75-120 780-120H180Zm17-614h565l-36.41-46H233l-36 46Z"/></svg>
                                        </button>
                                        <button class = "admin_but">
                                        <svg class = "admin_delete"xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#153608"><path d="M261-120q-24 0-42-18t-18-42v-570h-41v-60h188v-30h264v30h188v60h-41v570q0 24-18 42t-42 18H261Zm106-146h60v-399h-60v399Zm166 0h60v-399h-60v399Z"/></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Deniel Gaudiel</td>
                                    <td>2</td>
                                    <td>Pulilan, Bulacan</td>
                                    <td>December 6 ,2022</td>
                                    <td>
                                        <button class = "admin_but">
                                        <svg class = "admin_archive"xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#153608"><path d="m480-270 156-156-40-40-86 86v-201h-60v201l-86-86-40 40 156 156ZM180-120q-24.75 0-42.37-17.63Q120-155.25 120-180v-529q0-9.88 3-19.06 3-9.18 9-16.94l52-71q8-11 20.94-17.5Q217.88-840 232-840h495q14.12 0 27.06 6.5T775-816l53 71q6 7.76 9 16.94 3 9.18 3 19.06v529q0 24.75-17.62 42.37Q804.75-120 780-120H180Zm17-614h565l-36.41-46H233l-36 46Z"/></svg>
                                        </button>
                                        <button class = "admin_but">
                                        <svg class = "admin_delete"xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#153608"><path d="M261-120q-24 0-42-18t-18-42v-570h-41v-60h188v-30h264v30h188v60h-41v570q0 24-18 42t-42 18H261Zm106-146h60v-399h-60v399Zm166 0h60v-399h-60v399Z"/></svg>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
        
                    </div>
                </div>
                 <!-- End Table -->
            </div>

    </body>
    </html>