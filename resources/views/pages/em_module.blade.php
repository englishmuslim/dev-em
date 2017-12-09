@extends('template/master')
@section('content')
	<div class="container vision">
		<h1 class="text-center">List of All Module</h1>
	    <div class="row">
	      <div class="col-md-12">
	         <p>This is a list of all the modules we have to support the Muslim English learning concept. With this module per level we are very confident to provide interseting learning. At each level this module is recommended for people with these levels. Because each level has many differences that are specific to a certain level of person.  Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
	      </div>
	    </div>
	</div>
	<div class="container-fluid bg-choose-level choose-level">
		<div class="container">
			<h2 class="text-white bold">Choos Your Level</h2>
			<p class="text-white ">Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. </p>

			<div class="row">
			   	<div class="col-md-2 choose-detail">
			      <div class="course-detail">
			        <center>
			          <img src="images/1.png" alt="" class="img-responsive">
			        </center>
			        <h4 class="text-center">BEGINNER</h4>
			        <p class="text-center">You will learn simplest vocabularies around you.</p>
			        <center>
			          <a href="#beginner" id="btn-beginner" class="btn btn-danger">Read Detail</a>
			        </center>
			      </div>
			    </div>
			    <div class="col-md-2 choose-detail">
			      <div class="course-detail">
			        <center>
			          <img src="images/2.png" alt="" class="img-responsive">
			        </center>
			        <h4 class="text-center">ELEMENTARY</h4>
			        <p class="text-center">You will learn phrase, idioms, slang &amp; other conversational.</p>
			        <center>
			          <a href="#elemantary" id="btn-elementary" class="btn btn-warning">Read Detail</a>
			        </center>
			      </div>
			    </div>
			    <div class="col-md-2 choose-detail">
			      <div class="course-detail">
			        <center>
			          <img src="images/3.png" alt="" class="img-responsive">
			        </center>
			        <h4 class="text-center">INTERMEDIATE</h4>
			        <p class="text-center">You will learn phrase, idioms, slang & other conversational..</p>
			        <center>
			          <a href="#intermediate" id="btn-intermediate" class="btn btn-green">Read Detail</a>
			        </center>
			      </div>
			    </div>
			   	<div class="col-md-2 choose-detail">
			      <div class="course-detail">
			        <center>
			          <img src="images/4.png" alt="" class="img-responsive">
			        </center>
			        <h4 class="text-center">TOP MIDDLE</h4>
			        <p class="text-center">You will speak English with confidence and up intermediate.</p>
			        <center>
                        <a href="#topmiddle" id="btn-topmiddle" class="btn btn-warning btn-dark-green">Read Detail</a>
			        </center>
			      </div>
			    </div>
			   	<div class="col-md-2 choose-detail">
			      <div class="course-detail">
			        <center>
			          <img src="images/5.png" alt="" class="img-responsive">
			        </center>
			        <h4 class="text-center">ADVANCED</h4>
			        <p class="text-center">You will be able to the debate, dialogue &amp; speech in public.</p>
			        <center>
			          <a href="#advanced" id="btn-advanced" class="btn btn-warning btn-blue">Read Detail</a>
			        </center>
			      </div>
			    </div>
			</div>
			<!-- Untuk link scrolling beginner-->
			<div id="beginner"></div>
		</div>
	</div>
	<div class="container-fluid bg-item-module">
		<div class="container bg-box-module">
			<div class="row item-level">
				<h3 class="bold">1. Beginner Level</h3>
				<p>You will learn about the simplest vocabularies around you. These Module & DVD will grow your spirit to learn english. you will be more open minded.</p>
				<p><b>Result:</b> You will have an ability to mention famous thing around you. for example what there in the kitchen. you know. how to say it. because the point no 1 you can speak english is VOCABULARIES. dont spend your time to mention word is useless. 99% said this is very easy module. do you?</p>
				<p><b>Result: Beginner</b> = IELTS 1-2, TOIEC 0-150</p>
			</div>
			<div class="row text-center item-module">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<img src="images/module/module-dvd-1.png" class="img-responsive">
					<h5 class="bold">DVD Package Beginner Level</h5>
				</div>
				<div class="col-md-4">
					<img src="images/module/module-book-1.png" class="img-responsive">
					<h5 class="bold">Book Package Beginner Level</h5>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="text-center">
					<div class="box-module-testimoni">
						<div class="col-md-2 col-sm-2 text-center item-img-testimoni"><img src="images/testimony/person-1.png"></div>
						<div class="col-md-10">
						<h5><b>Muhammad Nugraha</b> - Trukey</h5>
						<p>The best module for your beginer level. This module is good for you who want to learn how basic concept of english.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="box-button text-center">
				 	<a  class="btn btn-module cyan" href="">Buy Now</a>
				 	<!-- Untuk link scrolling elemantary-->
					<div id="elemantary"></div>
				</div>
			</div>
		</div>
		<div class="container bg-box-module">
			<div class="row item-level">
				<h3 class="bold">2. Elemantary Level</h3>
				<p>Building fluency like a native speaker means you also should learn phrase, idioms, slang  and other conversational, spoken English expressions, in addition to what’s appropriate for writing.</p>

				<p><b>Result:</b> If you will learn about Pharases, Idiom and Slang you will speak naturally and like a native speaker need them because they were coined to communicate a specific and usually quite precise meaning for which there is no exact word.  The clever or creative ones tend to be memorable, and what’s memorable gets repeated in meme-like fashion.</p>

				<p><b>Result: Elemantary </b> = IELTS 2-3, TOIEC 151-300</p>
			</div>
			<div class="row text-center item-module">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<img src="images/module/module-dvd-2.png" class="img-responsive">
					<h5 class="bold">DVD Package Elementary Level</h5>
				</div>
				<div class="col-md-4">
					<img src="images/module/module-book-2.png" class="img-responsive">
					<h5 class="bold">Book Package Elementary Level</h5>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="text-center">
					<div class="box-module-testimoni">
						<div class="col-md-2 col-sm-2 text-center item-img-testimoni"><img src="images/testimony/person-2.png"></div>
						<div class="col-md-10">
						<h5><b>Angga Triana</b> - Indonesia</h5>
						<p>The best module for your beginer level. This module is good for you who want to learn how basic concept of english.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="box-button text-center">
				 	<a  class="btn btn-module green" href="">Buy Now</a>
				 	<!-- Untuk link scrolling intermediate-->
					<div id="intermediate"></div>
				</div>
			</div>
		</div>

		<div class="container bg-box-module">
			<div class="row item-level">
				<h3 class="bold">3. Intermediate Level</h3>
				<p>You will learn about Tenses, why tenses again. because this is made different between educated person and uneducated person. Tenses is very necessary when you in school and univeristy. I will give you example in Islamic material.</p>

				<p><b>Result:</b> Effective communication skills of English language are necessary for the people of all professions. The concept of English verb tenses is very important in establishing effective communication. Hence, if you want to maintain both ways of communication better, that is, speaking and writing. You need to gain mastery over English tenses, because a command of twelve basic tenses of English language will aid you immensely in gaining effective communication skills.</p>

				<p><b>Result: Intermediate</b> = IELTS 3-4, TOIEC 151-300</p>
			</div>
			<div class="row text-center item-module">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<img src="images/module/module-dvd-3.png" class="img-responsive">
					<h5 class="bold">DVD Package Intermediate Level</h5>
				</div>
				<div class="col-md-4">
					<img src="images/module/module-book-3.png" class="img-responsive">
					<h5 class="bold">Book Package Intermediate Level</h5>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="text-center">
					<div class="box-module-testimoni">
						<div class="col-md-2 col-sm-2 text-center item-img-testimoni"><img src="images/testimony/person-3.png"></div>
						<div class="col-md-10">
						<h5><b>Ayu Mustika Yasmin</b> - Madinah</h5>
						<p>The best module for your beginer level. This module is good for you who want to learn how basic concept of english.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="box-button text-center">
				 	<a  class="btn btn-module orange" href="">Buy Now</a>
                    <!-- Untuk link scrolling topmiddle-->
                    <div id="topmiddle"></div>
				</div>
			</div>
		</div>

		<div class="container bg-box-module">
			<div class="row item-level">
                <h3 class="bold">4. Top Middle Level</h3>
				<p>Now, It is time to learn a practice tool to help you use what you learned. It is also time for  you practice your english speaking with international friend. its time to show or test your capabilty. I will teach you How to ask question. and how technic to powerful question</p>

                <p><b>Result:</b> However you need an idea to say something. Occasionally you need a creative idea to
                    deliver or give a feedback your messages. However text is useful to help you understand you
                    material. This DVD and book, will guide you to do reading and listening and finally speaking. I
                    highly recommend these lesson for Top Middle learners with Module&DVD will help you improve your
                    ability to listen, speak, read, write and pronouce English . Just study and practice at least 1 hour
                    everyday to speak it Fluently without thinking grammar anymore.</p>

                <p><b>Result: Top Middle</b> = IELTS 4-5, TOIEC 401-525</p>
			</div>
			<div class="row text-center item-module">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<img src="images/module/module-dvd-4.png" class="img-responsive">
                    <h5 class="bold">DVD Package Top Middle Level</h5>
				</div>
				<div class="col-md-4">
					<img src="images/module/module-book-4.png" class="img-responsive">
                    <h5 class="bold">Book Package Top Middle Level</h5>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="text-center">
					<div class="box-module-testimoni">
						<div class="col-md-2 col-sm-2 text-center item-img-testimoni"><img src="images/testimony/person-4.png"></div>
						<div class="col-md-10">
						<h5><b>Yessy Nurtika</b> - Indonesia</h5>
						<p>The best module for your beginer level. This module is good for you who want to learn how basic concept of english.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="box-button text-center">
				 	<a  class="btn btn-module pink" href="">Buy Now</a>
                    <!-- Untuk link scrolling topmiddle-->
					<div id="advanced"></div>
				</div>
			</div>
		</div>

		<div class="container bg-box-module">
			<div class="row item-level">
				<h3 class="bold">5. Advanced Level</h3>
				<p>Do you understand and speak English but have a hard time being understood? Are you fluent in English and have perfect grammar but your pronunciation is bad? Did you know there’s a psychological importance for perfect English pronunciation? People will respect you more, automatically, unconsciously, when your pronunciation is clear. Is this fair? No, it’s not fair, I know. If your pronunciation is bad, peoplemay not respect you as much.</p>
				<p><b>Result: </b>They may see you more like a child, and will react to you more like a child with less respect. I know it’s not fair, but this is reality, this is the real world. On the other hand, when you have very good pronunciation with your English, when people listen to you, when you talk to other people, especially native speakers, Americans, Canadians, British, Australian, when your pronunciation is very good, they respect you more, and they also accept you more quickly and more easily. Fair or not fair, this is reality and so pronunciation is also very important for these reasons</p>
				<p><b>Result : Advanced</b> = IELTS 6-8, TOIEC 751-900</p>
			</div>
			<div class="row text-center item-module">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<img src="images/module/module-dvd-5.png" class="img-responsive">
					<h5 class="bold">DVD Package Advanced Level</h5>
				</div>
				<div class="col-md-4">
					<img src="images/module/module-book-5.png" class="img-responsive">
					<h5 class="bold">Book Package Advanced Level</h5>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="text-center">
					<div class="box-module-testimoni">
						<div class="col-md-2 col-sm-2 text-center item-img-testimoni"><img src="images/testimony/person-5.png"></div>
						<div class="col-md-10">
						<h5><b>Intan Nurmalasari</b> - Indonesia</h5>
						<p>The best module for your beginer level. This module is good for you who want to learn how basic concept of english.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="box-button text-center">
				 	<a  class="btn btn-module purple" href="">Buy Now</a>
				</div>
			</div>
		</div>
	</div>
@stop