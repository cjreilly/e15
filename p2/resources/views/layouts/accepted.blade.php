<?php
#
# Copyright 2020 Christopher Reilly
#
?>
@extends('layouts.master')
@section('content')
<h1 class="title">{{ $title }}</h1>
<div class="container">
  <span class="line">
    Your comment is accepted. Thank you for your validation!
  </span>
  <span class="line">
    @if($request["telephone-number"] && !$request['email-address'])
      I understand that you prefer to be contacted by phone.
    @elseif($request["email-address"] && !$request['telephone-number'])
      I understand you prefer to be contacted by email.
    @elseif($request["email-address"] && $request['telephone-number'])
      Thank you for providing multiple contact methods.
    @else
      You did not provide a contact method.
    @endif
  </span>
  <span class="line">
    @if($request["form-rating"] < 10)
      I am sorry about your frustration. I will make some revisions.
    @elseif($request["form-rating"] < 50)
      I understand you rated the form below 50.
      The next version will fix these problems.
    @elseif($request["form-rating"] < 80)
      I have some work to do with a rating below 80.
    @elseif($request["form-rating"] < 90)
      Thank you for your rating.
    @elseif($request["form-rating"] < 100)
      Thank you for your rating. No rating below 100 will go unreviewed.
    @else
      Thank you for your 100 rating! Your comments are greatly appreciated.
    @endif
  </span>
</div>
<p class="container">
  <img class="aligned" src="images/suggestions.png"/>
</p>
@endsection
