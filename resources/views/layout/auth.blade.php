<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/dist/assets/css/app.css">
    <link rel="stylesheet" href="/dist/assets/css/pages/auth.css">
</head>
<body>
    <div id="auth">
        @yield('content')
    </div>
</body>
</html>