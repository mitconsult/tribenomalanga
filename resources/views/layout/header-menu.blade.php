<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
        
    </head>

    <body>
        <div class="menu">
            <div class="menu-item"  style="width:40%"><a href="{{asset('/')}}">THE NOMALANGA TRIBE</a></div>
            <div class="menu-item"><a href="{{asset('/')}}">HOME</a></div>
            <div class="menu-item"><a href="{{asset('heal')}}">HEAL</a></div>
            <div class="menu-item"><a href="{{asset('thrive')}}">THRIVE</a></div>
            <div class="menu-item"><a href="{{asset('lab')}}">LAB</a></div>
            <div class="menu-item"><a href="{{asset('shop')}}">SHOP</a></div>
            <div class="menu-item"><a href="{{asset('about')}}">ABOUT US</a></div>
            <div class="menu-item"><a href="{{asset('contact-us')}}">CONTACT US</a></div>
        </div>
    </body>

    @yield('content')
</html>