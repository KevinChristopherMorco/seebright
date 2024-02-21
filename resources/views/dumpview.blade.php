<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/css/custom-style.css'])

    <title>SeeBright</title>
</head>

<body>
    <div class="relative w-full h-full">
        <div class="maintenance-signage absolute left-1/2 top-2/4">
            <div class="flex justify-center">
                <div>
                    <img src="{{asset('logo/owl.png')}}" width="100px" height="100px" alt="No image found" width="">
                </div>
            </div>
            <div class="text-center">
                <p class="text-2xl font-bold">SeeBright is currently down for maintenance.</p>
                <p class="text-base">We expect to be back in a couple of hours. Thanks for your patience.</p>
            </div>
        </div>
    </div>


</body>


</html>