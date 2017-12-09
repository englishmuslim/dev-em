@extends('template/master')
@section('content')
<!-- Header -->
<div class="container-fluid bg-internship">
    <div class="container">
        <div class="row mb-12 mt-12">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-white text-center">
                <h1>#EMInternshipProgram</h1>
                <h4 class="f-light p-1">We are looking for superheroes like you! Get onboard the most exciting
                    rocketship in the nation
                    and together shape the future of Indonesia's education.</h4>
                <h4 class="f-bold mb-4">EM Internship Program comes back in its fifth year in 2017,
                    and now it is both bigger and better!</h4>
                <a href="{{url('internship_formulir')}}" class="btn btn-primary p-1 mt-3">APPLY NOW</a>
                <div class="mt-4">
                    <a href="#about" id="btn-scroll"><img class="img-mouse" src="images/internship/mouse.gif"
                                                          class="img-responsive" alt="mouse"></a>
                </div>
                <div id="about"></div> <!-- Target Mouse Scrolling -->
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<!-- About English Muslim -->
<div class="container">
    <div class="row">
        <div class="text-center p-4">
            <h2 class="pt-2">About English Muslim</h2>
            <div class="line"></div>
        </div>
        <div class="col-md-6">
            <p>English Muslim team consists of a team of nearly 100 people who work very passionately to provide better
                access to quality education through the use of technology. We have built a learning management system
                targeted to the K-12 market in Indonesia which enables students and teachers to access learning
                materials for free. In addition to that, we also provide complementary services, such as private
                tutoring and learning video subscription to help students advance their education. We work closely with
                the government and schools to generate data that would help them to develop more evidence based
                education policies.</p>

            <p>We are an ambitious group and we work really hard to pursue our goals. We also realize that to do this,
                we will need help from you - the equally ambitious, hungry, talented, passionate, and hardworking
                individuals to join the team. Our current team boasts people having studied at Stanford, Harvard,
                Columbia, NTU, UI, ITB, Unpad, IPB, and other top universities. Many of them have also worked in a
                diverse set of industries, including consulting, startup, non-profit, education, research, creative, and
                other sectors. We at English Muslim also like to have fun, and we bet you will also get lots of it when
                you
                join.</p>
        </div>
        <div class="col-md-6">
            <img src="images/internship/app.png" alt="image app laptop" class="img-responsive">
        </div>
    </div>
</div>

<!-- Avalaible Program Intern -->
<div class="container-fluid mt-4">
    <div class="container">
        <div class="row">
            <div class="text-center"><h2>Avalaible Program Intern</h2></div>
            <div class="line"></div>
            <div class="intern-content mt-3">
                <!-- Engineering -->
                <div class="content-item row mt-2">
                    <div class="container">
                        <h3>Engineering</h3>
                        <div class="col-md-6">
                            <h4 class="f-bold">Back-end Developer</h4>
                            <img class="float-left mr-2" src="images/internship/browser.png" alt="">
                            <p>You will build and optimise concepts, systems, or tools to maximize the potential of
                                Englishmuslim.com’s engine. You will be handed a full-boat of creativity and initiatives
                                to
                                learn about the experience of technical role and startup in a fun setting.</p>
                            <p>Preferred background but not limited to: Information System, Computer Science.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="f-bold">Front-end Developer</h4>
                            <img class="float-left mr-2" src="images/internship/front-end.png" alt="">
                            <p>You will build and optimise the interface design to maximize the potential of
                                Englishmuslim.com's
                                Persona. You will be handed a full-boat of creativity and initiatives to learn about the
                                experience of technical role and startup in a fun setting.</p>

                            <p>Preferred background but not limited to: Information Science, Computer Science.</p>
                        </div>
                        <div class="col-md-6 mt-2">
                            <h4 class="f-bold">System Analyst</h4>
                            <img class="float-left mr-2" src="images/internship/analytics.png" alt="">
                            <p>Together to build the English Muslim design system with modern concept. Because we will
                                build
                                a
                                system that can be useful for many people. With a system analyst it will be able to
                                optimize
                                the
                                English Muslim system</p>
                            <p>Preferred background but not limited to: Information Science, Computer Science.</p>
                        </div>
                        <div class="col-md-6 mt-2">
                            <h4 class="f-bold">Quality Assurance</h4>
                            <img class="float-left mr-2" src="images/internship/qa.png" alt="">
                            <p>Together with our QA team, you will be the one who makes sure that our products and
                                features
                                deliver the highest quality standard possible. You will design and maintain test plans
                                and
                                test cases based on product.</p>
                            <p>Preferred background but not limited to: Information System, Computer Science.</p>
                        </div>
                    </div>
                </div>
                <!-- Content & Design Lab -->
                <div class="content-item row mt-2">
                    <div class="container">
                        <h3>Content & Design Lab</h3>
                        <div class="col-md-6">
                            <h4 class="f-bold">Video Editor</h4>
                            <img class="float-left mr-2" src="images/internship/video-editor.png" alt="">
                            <p>If you see yourself as a bright talent with great video editing skill, we invite you to
                                join
                                our
                                team as a Videography Intern! You will be challenged to deliver a video content which
                                will
                                regularly be distributed in Englishmuslim.com's digital assets and its partners.</p>

                            <p>Preferred background but not limited to: any major.</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="f-bold">Graphic Desginer</h4>
                            <img class="float-left mr-2" src="images/internship/graphic-designer.png" alt="">
                            <p>We are looking for the creative individuals who posses strong skill in graphic design to
                                join
                                our
                                Marketing & Communication team. As a Graphic Design intern, you will be producing
                                interesting
                                visuals to support our marketing and public relation's campaign by optimizing our
                                digital
                                assets.
                            <p>Preferred background: any major.</p>
                        </div>
                        <div class="col-md-6 mt-2">
                            <h4 class="f-bold">Content Writer</h4>
                            <img class="float-left mr-2" src="images/internship/content-writer.png" alt="">
                            <p>As a marketing content writer intern you will be in charge for both promotional and
                                non-promotional for marketing materials. Along the way, you will develop your analytical
                                skill from analyzing the results of our social media activities.
                            <p>Preferred background: any major</p>
                        </div>
                        <div class="col-md-6 mt-2">
                            <h4 class="f-bold">Actors & Actress</h4>
                            <img class="float-left mr-2" src="images/internship/actor-actris.png" alt="">
                            <p>
                                This is the place for you to channel your passion in acting. Because we need creative
                                talents to
                                fill this position. Make this your chance to work and be known to many people.</p>
                            <p>Preferred background: any major</p>
                        </div>
                        <div class="col-md-6 mt-2"></div>
                        <div class="col-md-6 mt-2">
                            <h4 class="f-bold">Englsih Teacher Online</h4>
                            <img class="float-left mr-2" src="images/internship/teacher.png" alt="">
                            <p>This is your chance to try the practice as an online English teacher for students
                                studying in English Muslim from all corners of the country. An acquaintance with many
                                other enthusiastic people.</p>
                            <p>Preferred background: any major</p>
                        </div>
                    </div>
                </div>
                <!-- Business and Growth -->
                <div class="content-item row mt-2">
                    <div class="container">
                        <h3>Business and Growth</h3>
                        <div class="col-md-6">
                            <h4 class="f-bold">Product Analyst</h4>
                            <img class="float-left mr-2" src="images/internship/product-analyst.png" alt="">
                            <p>Let's build quality products with English Muslim. Here we need creative talents to build
                                products that have value in the community. We see this is a great opportunity to learn
                                to
                                build
                                quality products.</p>
                            <p>Preferred background: any major</p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="f-bold">Social Media Marketing Specialist</h4>
                            <img class="float-left mr-2" src="images/internship/social-media-marketing.png" alt="">
                            <p>You will have the opportunity to envision and to execute how Englishmuslim communicates
                                to
                                its audiences through all social media accounts (FB, twitter, instagram, and its
                                renowened LINE
                                Academy - with million of users combined).</p>
                            <p>Preferred background: any major</p>
                        </div>
                    </div>
                </div>
                <!-- General -->
                <div class="content-item row mt-2">
                    <div class="container">
                        <h3>General</h3>
                        <div class="col-md-6">
                            <h4 class="f-bold">Management (HR)</h4>
                            <img class="float-left mr-2" src="images/internship/management-hr.png" alt="">
                            <p>We are looking for people-person individuals to join with our Human Resource team. Your
                                work
                                includes assisting end-to-end recruitment process and employee-related initiatives. This
                                role is
                                suitable for those who is comfortable to meet with new people and possess sense of
                                humour,
                                we
                                like fun people!</p>
                            <p>Preferred background but not limited to: Psychology, Human Resource Management,
                                Humanities,
                                Business Administration, Social Science</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Internship -->
<div class="container-fluid mt-4 mb-3 bg-the-intern">
    <div class="container">
        <div class="text-center"><h2>The Internship</h2></div>
        <div class="line"></div>
        <div class="row mt-4">
            <div class="col-md-6">
                <p>If you want to experience and learn how to grow a company, gain real working experience, and to shape
                    the state of education in Indonesia, this program is for you! You will be an integral part of the
                    team, be paired with our senior leads and members at Englishmuslim.com, and get access to our
                    in-house classes
                    for employees.</p>

                <p>The internship program is a flexible program starting from 8 up to 12 weeks, designed for high school
                    students, university students at all levels or recent graduates into specific roles such as
                    marketing, business, computer science, human resources, and many more. The most important traits
                    that we seek
                    from our next superheroes are genuine drive and passion about education and technology, and not
                    necessarily
                    your grades.</p>

                <p>We invite you to embark on an exciting journey of creative thinking, problem solving, and career
                    development directly with the core team of Englishmuslim.com. This program is vital in our full-time
                    recruitment process. Some of our most successful employees today were previously part of the
                    internship program. You can learn about their stories here.</p>

                <p>We want to help you to be more ready in the world of work later. We want to share that experience
                    when we build this Muslim English. That's why we invite you to join dream dreams together to create
                    a technology that can help people out there to continue to learn English to achieve its goals.</p>

                <p>When you join this internship program, you will meet many wonderful people like you. Make this a
                    chance as a boost for more of your friends network anywhere.</p>
            </div>
            <div class="col-md-6 mb-2">
                <img src="images/internship/1.jpg" class="img-responsive">
                <img src="images/internship/2.jpg" class="img-responsive mt-1">
            </div>
        </div>
    </div>
</div>

<!--Perks-->
<div class="container">
    <div class="row">
        <div class="text-center"><h2>The Perks</h2></div>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center mt-4">
            <img class="" src="images/internship/get-certificate.png" alt="">
            <h4>Get an EM Certificate Internship Program to be Your Pride</h4>
            <p>Get an English Muslim certificate as your advantage when apprenticing here and use the certificate for
                the workplace later</p>
        </div>
        <div class="col-md-4 text-center mt-4">
            <img class="" src="images/internship/remotly.png" alt="">
            <h4>Remotely Working When and Wherever You want without to Meet</h4>
            <p>You can work remotely from anywhere without having to meet directly with the English Muslim team.
                Flexible time you can get here.</p>
        </div>
        <div class="col-md-4 text-center mt-4">
            <img class="" src="images/internship/you-design-program.png" alt="">
            <h4>You-Design Program: Customized to Your Skills and Aspirations</h4>
            <p>You can design your skills a lot better to fit your skills and keep growing in the future to keep moving
                much better.</p>
        </div>
        <div class="col-md-4 text-center mt-4">
            <img class="" src="images/internship/mentoring.png" alt="">
            <h4>Class / Workshop and Mentorship by Experts with EM team</h4>
            <p>Aims to skill your ability to be more targeted and according to the target achievement of Muslim English
                goals to be better.</p>
        </div>
        <div class="col-md-4 text-center mt-4">
            <img class="" src="images/internship/exposure.png" alt="">
            <h4>Exposure to our Partners, Stakeholders and Users is a Benefit for You</h4>
            <p>This is one opportunity for you to get a wider network of friends to meet with Partners, Stakeholders,
                Users</p>
        </div>
        <div class="col-md-4 text-center mt-4">
            <img class="" src="images/internship/direct-opportunity.png" alt="">
            <h4>A Direct Opportunity to Work as an EM Family for Generations to come</h4>
            <p>Be part of an English Muslim family who has the enthusiasm to reach dreams together in the future and
                move together.</p>
        </div>
    </div>
</div>

<!-- Testimony -->
<div class="container-fluid bg-testimony-intern mt-8">
    <div class="container mt-4 mb-4">
        <di class="row text-center text-white">
            <h2>What It's Really Like Interning at English Muslim?</h2>
            <h4>Read what Ahmad Solihin, Fatin Nurmawati, and Caroline said about their internship experiences with
                us</h4>
        </di>
        <div class="row middle-space">
            <div class="owl-carousel owl-theme" id="slider-testimony">
                <div class="item col-md-12 col-sm-12">
                    <div class="col-md-12 box-method-testimony-intern rounded">
                        <div class="col-md-12">
                            <p class="padding-middle-top">In English Muslim we can learn a lot about technical and
                                non-technical issues. I can grow with an English Muslim team according to my passion. I
                                love the work style of the English Muslim team with the modern start-up style.</p>
                        </div>
                        <div class="col-md-12 text-right">
                            <img src="images/testimony/person-6.png">
                            <p><b>Ahmad Solihin (@ahmadsolihin)</b></p>
                            <p>Studying Computer Engineering @ Universitas Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="item col-md-12 col-sm-12">
                    <div class="col-md-12 box-method-testimony-intern rounded">
                        <div class="col-md-12">
                            <p class="padding-middle-top">When I was apprenticing with the Muslim English team I was
                                really new to the world of work. That's where I can learn a lot about the real world of
                                work. I keep learning from my Muslim English friends & many benefits that I can
                                feel.</p>
                        </div>
                        <div class="col-md-12 text-right">
                            <img src="images/testimony/person-7.png">
                            <p><b>Fatin Nurmawati (@fatinnurmawati)</b></p>
                            <p>Studying Computer Engineering @ Intsitut Teknologi Bandung.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ -->
<div class="container mt-4 mb-3">
    <div class="row">
        <div class="text-center"><h2>FAQ's</h2></div>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-4">
            <h4 class="bold">Who can apply?</h4>
            <p>This program is open for students in high school, diploma, undergrad or master programs, as long as you
                have the skills and the drive needed to succeed. Fresh graduates and professionals in their sabbatical
                are also encouraged to apply!</p>
        </div>
        <div class="col-md-6 mt-4">
            <h4 class="bold">What should I prepare for my application?</h4>
            <p>In general, you only have to prepare your most updated resume and portfolio of your past work (for those
                who
                are applying for engineering & design and content lab positions). </p>
        </div>
        <div class="col-md-6 mt-4">
            <h4 class="bold">How is the typical selection process?</h4>
            <p>We will review your application in a few cycles. If we think your profile is interesting, we will invite
                you for an interview session (we don't wait until application period is closed). Our team will interview
                you to discuss about who you are as a person, your interest, past work, aspirations - and how exactly we
                can help you to achieve that! The earlier you apply the better your chances to be accepted. We review
                applications on a rolling basis and will prioritize those who apply early. Since our capacity to
                accommodate interns is limited, we might close the application early if we have filled in the roles. So,
                don’t wait until the last minute!</p>
        </div>
        <div class="col-md-6 mt-4">
            <h4 class="bold">Why do I need a portfolio?</h4>
            <p>In our experience, portfolio is a better indicator of a candidate's skillsets. Even, to be frank, if you
                don’t have a good GPA in school, do not worry - you can compensate it with activities or work portfolio
                that reflect your deep passion about what you are doing! :)</p><br />
            <p class="f-bold">Contact Us</p>
            <p>If you still have any question, feel free to drop us an email at <span class="f-bold">internship@englishmuslim.com</span></p>
        </div>
    </div>
</div>

<!-- Action Apply -->
<div class="container-fluid mt-4 bg-action-apply p-6">
    <div class="container text-center">
        <h2 class="f-bold">Are You Ready to Become the Next Challenger?</h2>
        <p>Let's join a large Muslim English family, let's create works that benefit others. We are waiting for you.</p>
        <a href="{{url('internship_formulir')}}" class="btn btn-primary p-1 mt-2">APPLY NOW</a>
    </div>
</div>
@stop