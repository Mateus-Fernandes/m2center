<!DOCTYPE html>
<html>
<head>
    <title>M2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    @font-face {
        font-family: 'Arvo';
        font-display: auto;
        src: local('Arvo'), url(https://fonts.gstatic.com/s/arvo/v9/rC7kKhY-eUDY-ucISTIf5PesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        }    
    </style>
</head>
<body>
    <div id="app">
        <app></app>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" ></script>

<script src="{{ mix('js/site.js') }}"></script>

<script src="{{ mix('js/custom.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</html>