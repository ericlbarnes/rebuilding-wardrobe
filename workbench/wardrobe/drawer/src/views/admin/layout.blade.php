<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wardrobe</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/packages/wardrobe/drawer/css/{{{ $theme or 'light' }}}.css">
        <link rel="stylesheet" href="/packages/wardrobe/drawer/css/icons.css">
    </head>
    <body>
        @include('wardrobe::admin.inc.navigation')
        <div class="wrapper">
            @yield('content')
        </div>

    </body>
</html>