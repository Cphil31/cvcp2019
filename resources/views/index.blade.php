@extends('layouts.template')

@section('title', 'Page Title')

@section('sidebar')
    
@endsection

@section('content')

<nav class="navbar  fixed-top  navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand text-uppercase nom "  href="#">cecile philippe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav nom">
      <li class="nav-item ">
        <a class="nav-link" href="#">Competences <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Formations</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Expériences</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Contact</a>
      </li>
    
    </ul>
  </div>
</nav>



@endsection