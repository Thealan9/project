<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
    <style>
        body {
            background-color: #F6F4F3;

        }

        .navbar-nav .nav-link:hover {
            color: #9E846F !important;
            font-size: 1.2rem;

        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex flex-column vh-100">

        @include('Client.fragments.navbar')

        @include('fragments.alerts')


        @yield('sectionMain')
    </div>

</body>

</html>
