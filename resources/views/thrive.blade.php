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
            <h1>THRIVE</h1>
            <p>
                Embrace the future of work today, where new <br>
                leadership skills are essential for success in both <br>
                our inner and outer worlds. Thrive Academy is your <br>
                trusted partner in personal leadership education and <br>
                development, so that you can lead well.  

            </p>

        </div>

        <div class="thrive-main">
            <div class="thrive-top">
                <h2>About Thrive Academy</h2>
                
                <h3>
                    Thrive Academy unites holistic individuals, visionary ideas, and immersive experiences 
                    to empower and nurture leaders who harness this collective wisdom to answer Africa’s 
                    greatest questions. 
                </h3>    
                <p>
                    Welcome to Thrive Academy, your premier online leadership school dedicated to empowering 
                    African leaders to thrive from within. Our specialization lies in concise, impactful online 
                    learning experiences that enhance measurable skills. These courses, delivered by a globally 
                    acclaimed faculty, are designed to support the thriving journey of African leaders with digital 
                    accreditation. 
                </p>        
                <p>
                    In a world defined by relentless global, technological, and geopolitical transformations, 
                    our capacity to excel and make an impact in every facet of our lives as self-leaders requires 
                    perpetual evolution. Organisations, particularly in a rapidly expanding and dynamic Africa, 
                    demand exceptional managers and leaders who exude self-assured influence within their teams 
                    and champion a more humane, responsible, and inclusive style of leadership that society yearns for.  
                </p>
            </div>
            <h2>WORK WITH THRIVE ACADEMY</h2>
            <p>Our Signature Ready To Learn Courses</p>

            <!--<table>
                <tr>
                    <td style="backround-color:#183215; color: white">
                        <p>
                            While our leadership care solutions are grounded in science, we recognize that holistic 
                            well-being thrives within a cultural framework. We've meticulously researched and crafted 
                            a model that forms the very heart of our mission to help you lead well.  
                        </p>

                        <p>
                        Envision your personal well-being as a mosaic of 12 oases, each serving as a compass to ground, 
                        propel, and master your energy — ultimately leading to peak leadership effectiveness. 
                        </p>
                    </td>
                </tr>
            </table>-->

            <div class="thive-card">
                <p>
                    While our leadership care solutions are grounded in science, we recognize that holistic 
                    well-being thrives within a cultural framework. We've meticulously researched and crafted 
                    a model that forms the very heart of our mission to help you lead well.  
                <br>
                    Envision your personal well-being as a mosaic of 12 oases, each serving as a compass to ground, 
                    propel, and master your energy — ultimately leading to peak leadership effectiveness. 
                </p>

                <h2 style="font-size:25px">
                    INTEGRATED LEADER
                </h2>

            </div>

            <div class="thive-card">
                <p>
                    While our leadership care solutions are grounded in science, we recognize that holistic 
                    well-being thrives within a cultural framework. We've meticulously researched and crafted 
                    a model that forms the very heart of our mission to help you lead well.  
                <br>
                    Envision your personal well-being as a mosaic of 12 oases, each serving as a compass to ground, 
                    propel, and master your energy — ultimately leading to peak leadership effectiveness. 
                </p>

                <h2 style="font-size:25px">
                    THE RENAISSANCE LEADER
                </h2>

            </div>

            <div class="thive-card">
                <p>
                    While our leadership care solutions are grounded in science, we recognize that holistic 
                    well-being thrives within a cultural framework. We've meticulously researched and crafted 
                    a model that forms the very heart of our mission to help you lead well.  
                <br>
                    Envision your personal well-being as a mosaic of 12 oases, each serving as a compass to ground, 
                    propel, and master your energy — ultimately leading to peak leadership effectiveness. 
                </p>

                <h2 style="font-size:25px">
                    RISING NEXT-GEN LEADER
                </h2>

            </div>

            <div class="thive-card">
                <p>
                    While our leadership care solutions are grounded in science, we recognize that holistic 
                    well-being thrives within a cultural framework. We've meticulously researched and crafted 
                    a model that forms the very heart of our mission to help you lead well.  
                <br>
                    Envision your personal well-being as a mosaic of 12 oases, each serving as a compass to ground, 
                    propel, and master your energy — ultimately leading to peak leadership effectiveness. 
                </p>

                <h2 style="font-size:25px">
                    CONSCIOUS INCLUSION TOOLKIT
                </h2>

            </div>

            <div class="thive-card">
                <p>
                    While our leadership care solutions are grounded in science, we recognize that holistic 
                    well-being thrives within a cultural framework. We've meticulously researched and crafted 
                    a model that forms the very heart of our mission to help you lead well.  
                <br>
                    Envision your personal well-being as a mosaic of 12 oases, each serving as a compass to ground, 
                    propel, and master your energy — ultimately leading to peak leadership effectiveness. 
                </p>

                <h2 style="font-size:25px">
                    THE RESILIENT LEADER
                </h2>

            </div>
        </div>

        <div class="micro-learning">
            <table id="micro-learning-table" width="100%">
                <tr style="background-color: #183215;">
                    <td colspan=4 style="font-weight:35px;  padding: 5% 0px">EXPLORE OUR MICRO-LEARNING EXPERIENCES</td>
                </tr>
                <tr style="background: linear-gradient(180deg, rgba(193,149,69,1) 0%, rgba(24,50,21,1) 96%); ">
                    <td>Live Masterclasses</td>
                    <td>Team Day Accelerators and workshops</td>
                    <td>Think tanks and heart tanks</td>
                    <td>Keynotes and Talks</td>
                </tr>
            </table>
        </div>

        <div class="thrive-bottom">
            <div id="thrive-bottom-left">
                <h2 style="margin-top:50%; margin-left:10%; font-weight: 500">MEET OUT <br>GLOBAL FACULTY</h2>
            </div>

            <div id="thrive-bottom-right">
                <img src="images/morning-sun.jpg" alt="">
                <button id="thrive-button">ABOUT US</button>
            </div>
        </div>
    </body>
    @endsection
</html>