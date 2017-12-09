@extends('template/master')
@section('content')
<div class="container vision">
   <h1 class="header-gallery text-center">EM Gallery</h1>
   <p>This is a photo gallery used to provide information on Muslim English activities on various occasions. We are happy to always perpetuate content that is eklusive. Here are our various activities with the students we lead. Many of us who often do activities to fill the seminar as pengenalam Muslim English material to potential young people.</p>
   <div class="container-one">
      <div class="gallery">
         <a href="{{ asset('/images/gallery/3.jpg') }}" class="big"> <img src="{{ asset('/images/gallery/3.jpg') }}" alt="" title="Beautiful Image"></a>
         <a href="{{ asset('/images/gallery/1.jpg') }}"><img src="{{ asset('/images/gallery/1.jpg') }}" alt="" title="Beautiful Image"></a>
         <a href="{{ asset('/images/gallery/7.jpg') }}"><img src="{{ asset('/images/gallery/7.jpg') }}" alt="" title="Beautiful Image"></a>
         <a href="{{ asset('/images/gallery/5.jpg') }}"><img src="{{ asset('/images/gallery/5.jpg') }}" alt="" title="Beautiful Image"></a>
         <div class="clear"></div>
         <a href="{{ asset('/images/gallery/6.jpg') }}"><img src="{{ asset('/images/gallery/6.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/8.jpg') }}"><img src="{{ asset('/images/gallery/8.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/9.jpg') }}" class="big"><img src="{{ asset('/images/gallery/9.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/10.jpg') }}"><img src="{{ asset('/images/gallery/10.jpg') }}" alt="" title=""></a>
         <div class="clear"></div>
         <a href="{{ asset('/images/gallery/11.jpg') }}"><img src="{{ asset('/images/gallery/11.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/12.jpg') }}" class="big"><img src="{{ asset('/images/gallery/12.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/18.jpg') }}"><img src="{{ asset('/images/gallery/18.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/14.jpg') }}"><img src="{{ asset('/images/gallery/14.jpg') }}" alt="" title=""></a>
         <div class="clear"></div>
         <a href="{{ asset('/images/gallery/15.jpg') }}" class="big"><img src="{{ asset('/images/gallery/15.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/16.jpg') }}"><img src="{{ asset('/images/gallery/16.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/17.jpg') }}"><img src="{{ asset('/images/gallery/17.jpg') }}" alt="" title=""></a>
         <a href="{{ asset('/images/gallery/13.jpg') }}"><img src="{{ asset('/images/gallery/13.jpg') }}" alt="" title=""></a>
         <div class="clear"></div>
      </div>
   </div>
</div>
@stop