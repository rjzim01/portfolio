@extends('0_layout')

@section('content')

  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>RJ ZIM</h1>
      <h2>I'm a professional software engineer</h2>
      <a href="{{ route("about") }}" class="btn-about">About Me</a>
    </div>
  </section>

@endsection

  
