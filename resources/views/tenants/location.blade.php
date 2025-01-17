<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location Page</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tenants/style.css') }}">
</head>
    <body>
            {{-- INCLUDING HEADER --}}
            @include('tenants.components.header')

            <div>
                <img src="assets/images/presentation.png" alt="" class ="img-crop" style = "width:100%; height:110px;">
            </div>

            {{-- INCLUDING FOOTER --}}
            @include('tenants.components.footer')
        </html>
    </body>
</html>