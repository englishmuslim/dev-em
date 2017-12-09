<!-- CSS Library -->
<link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset ('css/custom.css') }}">
<link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/simplelightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset ('css/demo.css') }}">
<link rel="stylesheet" href="{{ asset ('css/bootstrap-iso.css') }}" />
<link rel="stylesheet" href="{{ asset ('css/bootstrap-datepicker3.css') }}"/>
<link rel="stylesheet" href="{{ asset ('libs/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset ('libs/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
<link href="{{ asset('css/select2.min.css') }}" type="text/css" rel="stylesheet" />

<!-- Javascript Library -->
<script type="text/javascript" src="{{ asset ('js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/simple-lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/gallery-js.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/formden.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('libs/owl-carousel/dist/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/owl-carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/scripts.js') }}"></script>

<script type="text/javascript" src="{{ asset ('js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/prettify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/anchor.min.js') }}"></script>

<script>
  $(document).ready(function(){
      //Check to see if the window is top if not then display button
      $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
          $('.scrollToTop').fadeIn();
        } else {
          $('.scrollToTop').fadeOut();
        }
      });

      //Click event to scroll to top
      $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
      });

  });

  $(document).ready(function(){
       $("a").tooltip();
  });

  $(document).ready(function(){
		var date_input=$('input[name="birth_date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})

  $(document).ready(function() {
    // $(".select2").select2();
    $(".select2-occupation").select2({
      placeholder: "Select & Search Occupation",
      allowClear: true
    })

    $(".select2-country").select2({
      placeholder: "Select & Search Country",
      allowClear: true
    })
  });


</script>
