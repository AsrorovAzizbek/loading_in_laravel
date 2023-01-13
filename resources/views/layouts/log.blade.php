<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../log/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../../log/css/style.css">
</head>
<body>
<div class="main">
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                @yield('log')
            </div>
        </div>
    </section>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="../../log/js/main.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>