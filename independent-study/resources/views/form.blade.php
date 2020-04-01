<?php
#
# Copyright 2020 Christopher Reilly
#
?>
@extends('master')

@section('title')
{{ $title }}
@endsection

@section('head')
<link href='/css/olspring.css' type='text/css' rel='stylesheet'>
<link href='/css/style.css' type='text/css' rel='stylesheet'>
@endsection

@section('header')
<span class="header container">
  <a class="large-font left-float" href='/'><img class="icon"
    src='/images/spring.png' id='logo' alt='§'></a>
  <span class="container">Leave your comments at the ole' spring.</span>
</span>
@endsection

@section('content')
<h1 class="title">{{ $title }}</h1>
<p class="container">Drop a hint. We'll respond as soon as we can!</p>
<form>
  <fieldset class="container">
    <span class="line">
      <textarea id="hint" class="standard" cols="100" rows="10" autofocus required
        placeholder="Write your comment here."></textarea>
    </span>
    <span class="line">
      <label for="telephone-number" class="standard">Phone Number</label>
      <input id="telephone-number" type="tel" class="standard"
        placeholder="xxx-xxx-xxxx" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"></input>
    </span>
    <span class="line">
      <label for="email-address" class="standard">Email Address</label>
      <input id="email-address" type="email" class="standard" placeholder="email@mailserver.com"/>
    </span>
    <span class="line">
      <label for="form-rating" class="standard">Rate your satsifaction with this form</label>
      <input id="form-rating" type="range" class="standard" min="0" max="100" value="80"></input>
    <span class="line">
      <input type="submit" value="Submit"></input>
    </span>
  </fieldset>
</form>
<p class="container">
  <img class="aligned" src="images/suggestions.png"/>
</p>
@endsection

@section('footer')
<hr class="break"/>
&copy; {{ date('Y') }}
@endsection
