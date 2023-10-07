    <html>
        <head>
            <title></title>
            <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
            
        </head>
@extends('layout.header-menu')
@section('content')

        <body>
            <div class="about-header" style="z-index: -100; position: relative;">
                <img src="images/morning-sun.jpg" alt="">
                <h1>CONTACT US</h1>
                <p>
                    Be a light so that you can lead your <br>
                    people well. Reach us today so we can <br>
                    help you illuminate your way.
                </p>
            </div>

        <div class="contact-form">
            <div id="contact-form-left">
                <p>
                    We’d like to be your partner in illuminating what great 
                    leadership looks like for your family, team, and the 
                    organisation you belong to.
                </p>
            </div>

            <div id="contact-form-right">
                <form action="">
                    <input type="text" id="fname" name="fname" placeholder="NAME"><br>
                    <input type="email" id="emai" name="email" placeholder="EMAIL"><br>
                    <select id="select" name="select">
                        <option value="healing">HEALING</option>
                        <option value="learning">LEARNING</option>
                    </select><br>
                    <textarea id="subject" name="subject" placeholder="TEL US ABOUT YOUR NEEDS" style="height:200px"></textarea>
                    <input type="submit" value="GET STARTED">
                </form>
            </div>
        </div>

    </body>
    @endsection
</html>