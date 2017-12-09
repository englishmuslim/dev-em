@extends('template/master')
@section('content')

<div class="container-fluid brief">
    <div class="container">
      <h1 class="text-center">EM in Brief</h1>
      <div class="row brief-one">
        <div class="col-md-6">
          <h4>What is English Muslim ?</h4>
          <p>Many people asked  us, what is English Muslim? English Muslim is the Muslim way to learn English. This is a new method to learn English Language for Muslims.</p>
        </div>
        <div class="col-md-6">
          <h4>Why Muslims Need This Method ?</h4>
          <p>I still find many Muslims don’t speak English well. as we know English is very necessary for this life. Especially for Muslim. through English Language, Muslims can spread Islam.</p>
        </div>
      </div>
      <div class="row brief-two">
        <h1 class="text-center">EM Base Material</h1>
        <p class="text-center">When you use the English Muslim method to learn English seriously. You will get some useful benefits for you because we are confident with some of the benefits below can improve understanding in english more deeply. Here are some of these benefits.</p>
        <div class="col-md-4">
          <center>
            <img src="{{ asset ('images/islam.png') }}" alt="" class="img-responsive">
          </center>
          <p>Learn about Islam</p>
        </div>
        <div class="col-md-4">
          <center>
            <img src="{{ asset ('images/exam.png') }}" alt="" class="img-responsive">
            <p>Learn English</p>
          </center>
        </div>
        <div class="col-md-4">
          <center>
            <img src="{{ asset ('images/interview.png') }}" alt="" class="img-responsive">
            <p>Practice English</p>
          </center>
        </div>
      </div>
    </div>
  </div>

@stop