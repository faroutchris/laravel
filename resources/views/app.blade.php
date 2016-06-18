<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My app</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />
    </head>
    
    <body>
        
        <div class="container">
            
            @include('partials.header')
            
        </div>
        
        <div class="container">
            
            @yield('content')
            
        </div>
        
        <div class="container footer">
            
            @include('partials.footer')
            
        </div>
        
    </body>
</html>