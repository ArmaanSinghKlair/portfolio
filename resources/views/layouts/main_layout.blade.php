<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="/css/state.css" type="text/css">
    <link rel="stylesheet" href="/css/layout.css" type="text/css">
    <link rel="stylesheet" href="/css/theme.css" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Portfolio</title>
</head>
<body>
<div class="header flex flex-row justify-content-space-between">
    <div class="logo">armaan@portfolio</div>

    <nav class=" flex flex-row justify-content-space-around align-items-center">
        <a href="/" class="{{Request::is('/')?'current':''}} text-link">Home</a>
        <a href="/projects/index" class="{{Request::is('projects/index')?'current-page':''}} text-link">Projects</a>
        <a href="/about" class="{{Request::is('about')?'current-page':''}} text-link">About</a>
        <a href="https://github.com/ArmaanSinghKlair" class="social-media-link">
            <img src="https://img.icons8.com/fluent/28/000000/github.png"/>
        </a>

        <a href="https://www.linkedin.com/in/armaan-singh-klair/" class="social-media-link">
            <img src="https://img.icons8.com/metro/28/000000/linkedin.png"/>
        </a>
    </nav>

   
</div>
    @yield('content')

    <div class="footer flex flex-row justify-content-space-between">
        <nav class=" flex flex-row justify-content-space-around align-center">
            <a href="/" class="{{Request::is('/')?'current':''}} text-link">Home</a>
            <a href="/projects/index" class="{{Request::is('projects/index')?'current-page':''}} text-link">Projects</a>
            <a href="/about" class="{{Request::is('about')?'current-page':''}} text-link">About</a>
            <a href="https://icons8.com/">Icons</a>
            <a href="https://github.com/ArmaanSinghKlair" class="social-media-link">
                <img src="https://img.icons8.com/fluent/28/000000/github.png"/>
            </a>

            <a href="https://www.linkedin.com/in/armaan-singh-klair/" class="social-media-link">
                <img src="https://img.icons8.com/metro/28/000000/linkedin.png"/>
            </a>

        </nav>
            <div class="logo">armaan@portfolio</div>
    </div>
</body>
</html>