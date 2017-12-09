@extends('template/master')
@section('content')
<!--Slider-->
<div class="mt-slider">
    <div class="owl-carousel owl-theme" id="owl-slider-homepage">
        <!-- slider pertama -->
        <div class="item banner blue-banner container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Muslim Speaks English <br>with Confidence</h1>
                        <h3>The muslim way to learn English</h3>
                        <a href="{{url('student/register')}}" class="btn btn-module orange-prmary btn-slider">Get
                            Started</a>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <img src="images/slider/luky1.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider kedua -->
        <div class="item banner pink-banner container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Improve Your Skill with Our Method</h1>
                        <h3>Our method is made with standard Islamic material</h3>
                        <a href="{{url('em_method')}}" class="btn btn-module green-banner btn-slider">Get Our
                            Method</a>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <img src="images/slider/luky3.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider ketiga -->
        <div class="item banner purple-banner container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Get The Special English Muslim Module & DVD</h1>
                        <h3>Learning with modules & DVD english muslim is easier</h3>
                        <a href="{{url('em_module')}}" class="btn btn-module pink-banner btn-slider">Get Our
                            Module</a>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <img src="images/slider/luky5.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider keempat -->
        <div class="item banner green-banner container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Scheduled Study with an International Teacher</h1>
                        <h3>Learn with a variety of free international teachers</h3>
                        <a href="{{url('em_teachers')}}" class="btn btn-module indigo-banner  btn-slider">View Our
                            Teacher</a>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <img src="images/slider/luky4.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider kelima -->
        <div class="item banner teal-banner container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Get a Free English Certificate</h1>
                        <h3>Improve your skills with an English Certificate</h3>
                        <a href="{{url('student/register')}}" class="btn btn-module green-banner btn-slider">Get
                            Certificate</a>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <img src="images/slider/luky2.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Choose Your Level-->
<div class="container course">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2 class="text-center">CHOOSE YOUR LEVEL</h2>
            <h4 class="text-center">You can learn english as per your level</h4>
        </div>
    </div> <!-- end of row -->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <div class="course-detail">
                <center>
                    <img src="images/1.png" alt="" class="img-responsive">
                </center>
                <h4 class="text-center">BEGINNER</h4>
                <p class="text-center">You will learn simplest vocabularies around you.</p>
                <center>
                    <a href="{{url('em_module#beginner')}}" class="btn btn-danger">Read Detail</a>
                </center>
            </div>
        </div>
        <div class="col-md-2">
            <div class="course-detail">
                <center>
                    <img src="images/2.png" alt="" class="img-responsive">
                </center>
                <h4 class="text-center">ELEMENTARY</h4>
                <p class="text-center">You will learn phrase, idioms, slang &amp; other conversational.</p>
                <center>
                    <a href="{{url('em_module#elementary')}}" class="btn btn-warning">Read Detail</a>
                </center>
            </div>
        </div>
        <div class="col-md-2">
            <div class="course-detail">
                <center>
                    <img src="images/3.png" alt="" class="img-responsive">
                </center>
                <h4 class="text-center">INTERMEDIATE</h4>
                <p class="text-center">You will learn about highly tenses for conversation.</p>
                <center>
                    <a href="{{url('em_module#intermediate')}}" class="btn btn-warning btn-green">Read Detail</a>
                </center>
            </div>
        </div>
        <div class="col-md-2">
            <div class="course-detail">
                <center>
                    <img src="images/4.png" alt="" class="img-responsive">
                </center>
                <h4 class="text-center">TOP MIDDLE</h4>
                <p class="text-center">You will learn about highly tenses for conversation.</p>
                <center>
                    <a href="{{url('em_module#topmiddle')}}" class="btn btn-warning btn-dark-green">Read Detail</a>
                </center>
            </div>
        </div>
        <div class="col-md-2">
            <div class="course-detail">
                <center>
                    <img src="images/5.png" alt="" class="img-responsive">
                </center>
                <h4 class="text-center">ADVANCED</h4>
                <p class="text-center">You will be able to the debate, dialogue &amp; speech in public.</p>
                <center>
                    <a href="{{url('em_module#advanced')}}" class="btn btn-warning btn-blue">Read Detail</a>
                </center>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<!--Registration Now-->
<div class="container-fluid bg-get-free-access text-center margin-top-register pbt-10">
    <h2 class="text-white">If you don't know about your english level contact us.</h2>
    <h4 class="text-white">Join thousands of students from various countries to learn english here.</h4>
    <a href="{{ url('student/register') }}" class="btn btn-registration-now"><p class="lead">REGISTRATION NOW!</p>
        <p class="f-13">Get free consultation and placement test</p></a>
</div>

<!--Why Your Learn English-->
<div class="container-fluid benefit">
    <div class="container">
        <div class="row">
            <h2 class="text-center">WHY YOU SHOULD LEARN ENGLISH HERE</h2>
            <p class="text-center">There are 8 reasons we are different than others methods.</p>
            <div class="col-md-4">
                <img src="images/luky-cover.png" alt="" class="top-cover hidden-xs hidden-sm">
            </div>
            <div class="col-md-8">
                <ul>
                    <li>
                        <h4><i class="fa fa-check-square-o" aria-hidden="true"></i> ISLAMIC MATERIAL</h4>
                        <p>Our english teaching material is harmonized with Islamic values.</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o" aria-hidden="true"></i> SPEAKING ORIENTED</h4>
                        <p>We focus on how to learn english speaking.</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o" aria-hidden="true"></i> EASY &amp; FAST</h4>
                        <p> How to learn english easy &amp; fast.</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o" aria-hidden="true"></i> LEARN ANYTIME &amp; ANYWHERE</h4>
                        <p>You can learn english anywhere &amp; anytime.</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o" aria-hidden="true"></i> REAL ENGLISH CONVERSATION</h4>
                        <p>How to learn english conversation or learn english dialogue.</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o" aria-hidden="true"></i> COACHING LESSON</h4>
                        <p>How to learn english with online free coaching</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o" aria-hidden="true"></i> INTERNATIONAL ENGLISH TEACHER</h4>
                        <p>You can learn english with international english teacher.</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o" aria-hidden="true"></i> VIP MEMBER BONUS</h4>
                        <p>You can get free merchandise.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--Testimony-->
<div class="container-fluid space-container">
    <div class="container">
        <div class="row middle-space">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h2 class="text-center">WHAT PEOPLE ARE SAYING ABOUT ENGLISH MUSLIM</h2>
                <p class="text-center">Allow us to share some of the benefits, so you can understand why you're going to
                    learn more with us. And if you still some questions, take a look at our frequently asked questions
                    (FAQ’s).</p>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row middle-space">
            <div class="owl-carousel owl-theme" id="slider-testimony">
                <div class="item col-md-12 col-sm-12">
                    <div class="col-md-12 box-method-testimony rounded">
                        <div class="col-md-12">
                            <p class="padding-middle-top">Cras ultricies ligula sed magna dictum porta. Curabitur non
                                nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Donec
                                rutrum congue leo eget malesuada. Cras ultricies ligula sed.</p>
                        </div>
                        <div class="col-md-12 text-right">
                            <img src="images/testimony/person-6.png">
                            <p><b>Ahmad Solihin Nugraha (@ahmadsolihin)</b></p>
                            <p>Studying Computer Engineering @ Beykent University.</p>
                        </div>
                    </div>
                </div>
                <div class="item col-md-12 col-sm-6">
                    <div class="col-md-12 box-method-testimony rounded">
                        <div class="col-md-12">
                            <p class="padding-middle-top">Cras ultricies ligula sed magna dictum porta. Curabitur non
                                nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Donec
                                rutrum congue leo eget malesuada. Cras ultricies ligula sed.</p>
                        </div>
                        <div class="col-md-12 text-right">
                            <img src="images/testimony/person-7.png">
                            <p><b>Fatin Nurmawati (@fatinnurmawati)</b></p>
                            <p>Studying Computer Engineering @ Beykent University.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--Membership Member-->
<div class="container-fluid pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h2 class="text-center">MEMBERSHIP SERVICE</h2>
                <p class="text-center">
                    Membership service provides services for you who want to learn English per level. There are two
                    special services provided that is free member and VIP member. Choose the best one for you.</p>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row middle-space">
            <div class="col-md-6">
                <div class="pricing-thumbnail pricing-free">
                    <h1 class="text-center">FREE MEMBER</h1>
                </div>
                <div class="pricing-thumbnail">
                    <ul class="list-free">
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free Placement Test</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free Consultation (Limited)</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free Trial Class</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free Module (Sample)</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free Practice English Speaking</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pricing-thumbnail pricing-vip">
                    <h1 class="text-center">VIP MEMBER</h1>
                </div>
                <div class="pricing-thumbnail">
                    <ul class="list-vip">
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free Unlimited Consultation</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free T - Shirt</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free English Private Coaching</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Guarantee Cash Back 100 %</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free Ticket Goes to Singapore</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Get Certificate</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> &nbsp;Free Learning Read Qur'an</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Registration Now-->
<div class="container-fluid bg-get-free-access text-center">
    <h2 class="text-white">What are you waiting for ? Join us !</h2>
    <h4 class="text-white">Join more than 100.000++ of students from various countries to learn english here.</h4>
    <a href="{{ url('student/register') }}" class="btn btn-registration-now"><p class="lead">REGISTRATION NOW!</p>
        <p class="f-13">Get free consultation and placement test</p></a>
</div>
@stop
