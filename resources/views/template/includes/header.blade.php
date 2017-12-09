<div class="container-fluid language">
  <div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 icon-socmed-header">
              <div class="icon-socmed">
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
            <div class="col-md-2 col-sm-6 col-xs-6">
              <form action="">
                <select name="" id="" class="form-control">
                  <option value="">Indonesia</option>
                  <option value="">English</option>
                </select>
              </form>
            </div>
            <div class="col-md-5"></div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 information-header">
                <div class="information">
                  <p>
                    <i class="fa fa-envelope" aria-hidden="true"></i> cs@englishmuslim.com
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="information">
                  <p>
                    <i class="fa fa-whatsapp" aria-hidden="true"></i> +62 812-9582-4191
                  </p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end of language -->
<nav class="navbar navbar-default" data-offset-top="197">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset ('images/logo.png') }}" alt="" class="img-responsive">
          </a>
        </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('em_brief') }}">EM IN BRIEF</a></li>
                <li><a href="{{ url('em_vm') }}">EM VISION &amp; MISSION</a></li>
                <li><a href="{{ url('em_gallery') }}">EM GALLERY</a></li>
                <li><a href="{{ url('em_team') }}">EM TEAM</a></li>
              </ul>
            </li>
            <li><a href="{{ url('em_method') }}">METHOD</a></li>
            <li><a href="{{ url('em_module') }}">MODULE &amp; DVD</a></li>
            <li><a href="{{ url('em_teachers') }}">TEACHERS</a></li>
            <li class="signup"><a href="{{ url('/register') }}">REGISTER</a></li>
            <li class="member-login"><a href="{{ url ('/login') }}">LOGIN</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav> <!-- end of navbar -->

<!-- Modal Register -->
<div class="container">
  <div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <h1 class="text-center text-login">Register</h1>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <center>
                <a href="#" class="btn btn-primary btn-flat-gray btn-lg">Free Member</a> &nbsp;
                <a href="#" class="btn btn-primary btn-flat btn-lg">VIP Member</a>
              </center>
              <div class="col-md-2"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="row">
            <div class="col-sm-4 col-xs-8">

            </div>
            <div class="col-sm-8 col-xs-4">
              <!-- <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Close</button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
