@extends('adminlte::page')

@section('title', 'profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
<div class="box box-primary">
<div class="box-body box-profile">
  <img class="profile-user-img img-responsive img-circle" src="{{ asset('img/profile-placeholder.jpg') }}" alt="User profile picture">

  <h3 class="profile-username text-center">
  </h3>

  <p class="text-muted text-center">Software Engineer</p>

  <ul class="list-group list-group-unbordered">
    <li class="list-group-item">
      <b>Email: </b> <a class="pull-right"> </a>
    </li>
  </ul>

</div>

</div>
@stop