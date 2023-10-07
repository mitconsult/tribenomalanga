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
            <img src="images/without-tagline/cut.jpg" alt="">
            <h1 style="text-align: left; margin-left: 10%">SHOP</h1>
        </div>

        <div class="shop-main">
            <h2>Register for The Humanising Business Webinar Series </h2>
            <p>
                The Humanizing Business Series, by The Nomalanga Tribe offers 
                leadership insights that mature understanding of the “business 
                and human” relationship in the pursuit of shared value. We offer 
                a new framework that guides and reimagines the role of the C-suite 
                leading regenerative and responsible businesses of the future.
            </p>
            <h2 style="color: #C19545; margin-top:5%">Registration here for free</h2>
            <h2 style="color: #ffff; margin-bottom:5%">Listen to past series here</h2>

            <div class="shop-form">
                <form action="">
                    <table width=100%>
                        <tr>
                            <td>
                                <label for="fname">First Name</label><br>
                                <input type="text" id="fname" name="fname">
                            </td>

                            <td>
                                <label for="fname">Last Name</label><br>
                                <input type="text" id="lname" name="lname"> 
                            </td>
                        </tr>
                        <tr height="40px"></tr>
                        <tr>
                            <td>
                                <label for="email">Email Address</label><br>
                                <input type="email" id="email" name="email">
                            </td>

                            <td>
                                <label for="company">Company</label><br>
                                <input type="text" id="company" name="company">
                            </td>
                        </tr>

                        <tr>
                            <td colspan=2>
                                <input type="submit" value="Sign Up">
                            </td>
                        </tr>
                        
                    </table>
                </form>
            
            </div>

            <div class="shop-journey">
                    <div id="shop-journey-left">
                        <h2>
                            PRE-ORDER<br>NEW BOOK
                        </h2>

                        <h2>OUR NOMALANGA<br>JOURNEY</h2>

                        <h3>Book summary</h3>

                        <p>
                            Our Nomalanga Journey offers 12 suggestive milestones of self-healing, 
                            self-rediscovery, and self-leadership in the macro context of The Great 
                            Transformation and the rise of Feminine energy. Guided by the 12 oasis 
                            of well-being framework developed by the author, this journey invites 
                            aspiring self-healers and self-leaders to a) ground and own; b) invest 
                            and drive; and c) master and evolve their personal energy which is at 
                            the core of self-empowered mental, emotional, and spiritual well-being.
                        </p>

                        <p>
                            Nomalanga is a word in IsiZulu meaning Mother of the sun/ Bringer of light 
                            (which is already within us all). The book invites the reader to reflect on 
                            key concepts as we unpack each oasis of well-being and concludes with prompts 
                            and short assignments that asks the reader to interact with each concept in order 
                            to complete the milestone of each oasis.
                        </p>

                    <p>
                            Our Nomalanga Journey guides us back home to our light through tapping into the 
                            Feminine aspect of who we are and contributes an African lens to the growing 
                            healing arts and sciences for us to thrive as individuals and a society through 
                            this broader great transformation era. 
                    </p>
                    
                    <button>ORDER</button>
                    
                    </div>
                </div>

                <div id="shop-journey-right">
                    <h2>BOOK A<br>COUCHING OUTSIDE <br>SESSION </h2>

                    <p>
                        Having shown to have wide-ranging health benefits, which include reduced stress and anxiety, 
                        mood improvement, clarity of mind, and an increase in overall well-being, CoachingOutside has 
                        been our response to getting more people to experience the healing power of nature.
                        CoachingOutside has been developed by Award-winning Work Psychologist Dr Joy Ntetha, as a 
                        guided walking conversation in nature to help leaders experience:
                    </p>
                    
                    <p>
                        <strong>A personal check in Introspection & reflection on what may be depleting or refueling your energy<br>
                        Refocusing & setting new intentions and goals</strong>
                    </p>
                        As we walk in nature, we also release all the microstresses we may have accumulated in everyday 
                        work and life, and refill our mind and body with adaptive energy to better cope with today's tech 
                        heavy, always on lifestyle.
                        Join one of our trained coaches, and other leaders on the mountain as we have conversations that 
                        help us to reflect and reenergise ourselves back to life.

                    </p>

                    <button>BUY A TICKET</button>
                </div>
            </div>

            <p style="clear: both; text-align: left">Available: February 2024</p>
                
        </div>

    </body>
    @endsection
</html>