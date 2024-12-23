<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        @include('admin.layouts.nav')
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
