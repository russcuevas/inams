<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - Page</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tenants/style.css') }}">
</head>
    <body>
        @include('tenants.components.header')
        <div class="container">
            <div class="px-3 pt-5 my-5 text-center d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
                <h1 class="display-4 fw-bold text-body-emphasis"></h1>
                <div class="col-lg-6 mx-auto">
                  <img src="{{ asset('assets/images/404.png') }}" width="600" height="500" alt="">
                  </div>
                </div>
              </div>
            </div>
        @include('tenants.components.footer')
    </html>
</body>
</html>