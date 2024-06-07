<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Mrs+Saint+Delafield&family=Questrial&display=swap" rel="stylesheet">

    <title>Villa Górski Raj</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white">


    <x-Header />
    {{ $slot }}


    <x-Footer/>

</body>

</html>
