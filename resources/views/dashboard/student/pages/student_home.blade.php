<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coming Soon</title>
  @include('template.includes.head_construct')
</head>
<body>
<div class="container_12" id="content">
  @if(Auth::guard('student')->user()->status == 'Free Member')
    <p>Hi, {{ Auth::guard('student')->user()->first_name }}</p>
    <p>You're registered as, <b>{{ Auth::guard('student')->user()->status }}</b></p>
    <a class="btn btn-primary btn-flat" href="{{ url ('student/logout') }}"><i class="fa fa-home" aria-hidden="true"></i> Upgrade To Premium</a>
  @else
    <h3>Hi, {{ Auth::guard('student')->user()->first_name }}</h3>
    <h3>You're registered as, {{ Auth::guard('student')->user()->membership }}</h3>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  @endif
	<h1 class="back-header">English Muslim</h1>
	<h3 class="back-caption">Under Construction.....</h3>
	<div class="main">
		<div class="mcontent">
			<div class="box mr20">
				<h2>Contact us</h2>
				<p><i class="fa fa-whatsapp" aria-hidden="true"></i> +62 812-9582-4191<br/>
          <i class="fa fa-envelope" aria-hidden="true"></i> cs@englishmuslim.com</p>
			</div>
			<div class="box mr20">
				<h2>Visit Us</h2>
				<p>englishmuslim.com</p>
				<a href="{{ url ('student/logout') }}"><i class="fa fa-home" aria-hidden="true"></i> Back to Home</a>
			</div>
			<div class="box2">
				<h2>Follow us</h2>
        <a href="https://www.facebook.com/English-Muslim-490815254317318/?fref=ts" target="blank" data-toggle="tooltip" data-placement="bottom" title="English Muslim">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="https://www.instagram.com/english_muslim/" target="blank" data-toggle="tooltip" data-placement="bottom" title="english_muslim">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="" data-toggle="tooltip" data-placement="bottom" title="English Muslim">
          <i class="fa fa-youtube-square" aria-hidden="true"></i>
        </a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
