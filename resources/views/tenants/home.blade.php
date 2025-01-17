<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tenants/style.css') }}">
</head>
    <body>
        {{-- INCLUDING HEADER --}}
        @include('tenants.components.header')
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/images/front.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="400" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Welcome to INAMS</h1>
                <p class="lead">The Intelligent Apartment Management System (INAMS) is a web-based system that automates tenant interactions, rent collection, and maintenance requests. Streamlining daily operations for a more effective & efficient daily operations.</p>
              </div>
            </div>
          </div>
        
          <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/images/black-logo.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="800" height="500" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Why choose us?</h1>
                <p class="lead">INAMS provide its users a streamlined and efficient platform that enhances the overall experience for both tenants &  property managers/owners.</p>
                <p class="lead">Features included in this platform includes the following: tenant management, rent collection and maintenanc requests and tracking. The system can will be availbale for both property manager/owner and tenants.</p>
                <p class="lead">The property owner/manager can monitor tenants information, available units, maintenance request, sales record and account management for the admin. On the other hand, tenants can view their accounts information, payment management, maintenance request, and messages from the admin.</p>
              </div>
            </div>
          </div>
        
          <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/images/front.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="400" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Apartments</h1>
                <p class="lead">Discover your ideal living space with our beautifully designed, move-in-ready apartments. Whether you’re looking for a cozy one-bedroom or a spacious two-bedroom, we have a variety of floor plans to suit your needs. Each apartment is thoughtfully crafted with modern finishes, open layouts, and plenty of natural light to create a comfortable and inviting atmosphere.
        
                    Our apartments are equipped with all the essentials, including fully-equipped kitchens, in-unit laundry, and ample storage space. You’ll also enjoy the convenience of smart home features, energy-efficient appliances, and high-speed internet connections to make everyday living a breeze.</p>
                  <a href="" class = "btn btn-warning fw-bold">View Apartments</a>
              </div>
            </div>
          </div>
        
          
          <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Locations</h1>
                <p class="lead">We understand that choosing the right location is key to creating a comfortable, convenient, and accessible living experience. Here, you can see how close our dormitories, apartments, and condo units are to key areas like food establishments, schools, review centers, public transportation, and more. Check it out to see how easy and convenient life can be when you pick one of our places in U-Belt Manila. Simple living, close to everything you need!</p>
                  <a href="" class = "btn btn-warning fw-bold">View Locations</a>
              </div>
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/images/front.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="400" loading="lazy">
              </div>
            </div>
          </div>
        {{-- INCLUDING FOOTER --}}
        @include('tenants.components.footer')
    </html>
</body>
</html>