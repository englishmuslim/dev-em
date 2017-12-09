@extends('template/master')
@section('content')
<div class="container-fluid bg-method">
    <div class="container">
        <div class="row">
            <h1 class="text-center title-method">Our Methods</h1>
            <div class="col-md-4 space-method">
                <iframe width="100%" height="284" src="https://www.youtube.com/embed/7d16CpWp-ok" frameborder="0"
                        allowfullscreen></iframe>
            </div>
            <div class="col-md-8 space-method">
                <p class="text-justify">EM was not only originally created to be an English learning method. It was built to accomplish a
                    Dakwah Mission- to help Muslim able to to speak English Languange.
                    We think it’s important that everyone who invest or join in EM understands what this mission means
                    to us. How we make decisions and why we do things we do.
                    At EM, we’re inspired by Al Quran and Hadist that have given inspiration and motivation as our
                    guidance in our life
                </p>
                <p class="text-justify"> Every Muslim, we believe, we have obligations in this world. For example dakwah. Dakwah is to invite
                    people back to Islam. So that;s why we created a support system of Learning English Language for
                    Muslims. We hope, this is one of alternative method for muslim into learning English Language. Here,
                    you will not only learn about English language, how to speak English but also you learn about Islam.
                </p>
                <a href="{{ url('em_module') }}" class="btn btn-module blue space-button">View Our Modul</a>
                <a href="{{ url('/') }}" class="btn btn-module pink space-button">Test Your Level</a>
            </div>
        </div>
    </div>
</div>
<div class="container space-container">
    <div class="row middle-space">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center bold">THE ADVANTAGES OF ENGLISH MUSLIM</h2>
            <p class="text-center">Allow us to share some of the benefits, so you can understand why you're going to
                learn more with us. And if you still some questions, take a look at our frequently asked questions
                (FAQ’s).</p>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row middle-space text-center">
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-1.png">
            <p class="lead bold item-p-method">ISLAMIC MATERIAL</p>
            <p>You don't have to adjust your schedule. You decide the time and day. Nulla porttitor accumsan tincidunt
                ante ipsum.</p>
        </div>
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-2.png">
            <p class="lead bold item-p-method">COMPREHENSIVE CURRICULUM</p>
            <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna
                dictum porta. Curabitur non.</p>
        </div>
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-3.png">
            <p class="lead bold item-p-method">PERSONALIZED LEARNING PLANS</p>
            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus
                convallis quis ac lectus. </p>
        </div>
    </div>
    <div class="row up-space text-center">
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-4.png">
            <p class="lead bold item-p-method">FLEXSIBLE SCHEDULES</p>
            <p>You don't have to adjust your schedule. You decide the time and day. Nulla porttitor accumsan tincidunt
                ante ipsum.</p>
        </div>
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-5.png">
            <p class="lead bold item-p-method">FAST, FUN & EASY</p>
            <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna
                dictum porta. Curabitur non.</p>
        </div>
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-9.png">
            <p class="lead bold item-p-method">REAL ENGLISH CONVERSATION</p>
            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus
                convallis quis ac lectus. </p>
        </div>
    </div>
    <div class="row up-space text-center">
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-6.png">
            <p class="lead bold item-p-method">INTERNATIONAL QUALIFIED TEACHER</p>
            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus
                convallis quis ac lectus. </p>
        </div>
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-7.png">
            <p class="lead bold item-p-method">EM CERTIFICATES</p>
            <p>You don't have to adjust your schedule. You decide the time and day. Nulla porttitor accumsan tincidunt
                ante ipsum.</p>
        </div>
        <div class="col-md-4 col-sm-4">
            <img src="images/method/icon/method-8.png">
            <p class="lead bold item-p-method">6 MONTHS MONEY BACK GUARANTEE</p>
            <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna
                dictum porta. Curabitur non.</p>
        </div>

    </div>
</div>
<div class="container-fluid bg-method-testimony">
    <div class="container">
        <div class="row middle-space">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3 class="text-center">What people are saying about method English Muslim </h3>
                <p class="text-center">Allow us to share some of the benefits, so you can understand why you're going to
                    learn more with us. And if you still some questions, take a look at our frequently asked questions
                    (FAQ’s).</p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row middle-space">
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-6">
                <div class="col-md-12 box-method-testimony rounded">
                    <div class="col-md-12">
                        <p class="padding-middle-top">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                            Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci
                            porta dapibus. </p>
                    </div>
                    <div class="col-md-12 text-right">
                        <img src="images/testimony/person-6.png">
                        <p><b>Ahmad Solihin (@ahmadsolihin)</b></p>
                        <p>Studying Computer Engineering @ Beykent University.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="col-md-12 box-method-testimony rounded">
                    <div class="col-md-12">
                        <p class="padding-middle-top">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla
                            quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus.</p>
                    </div>
                    <div class="col-md-12 text-right">
                        <img src="images/testimony/person-7.png">
                        <p><b>Fatin Nurmawati (@fatinnurmawati)</b></p>
                        <p>Studying Computer Engineering @ Beykent University.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
<div class="container-fluid bg-get-free-access text-white">
    <div class="container text-center">
        <h3>Learn how to high score your english level!</h3>
        <p>Download our free ebook and start making your modul in a few simple steps.</p>
        <a href="{{ url('em_module') }}" class="btn btn-module orange-prmary space-button">Get free access VIP Now!</a>
    </div>
</div>
@stop