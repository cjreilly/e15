<?php
#
# Copyright 2020 Christopher Reilly
#
?>
@extends('layouts.master')

@section('content')
<h1 class="title">{{ $title }}</h1>
<p class="container">Drop a hint. I'll respond as soon as I can!</p>
<form method="post" action="/comment">
  {{ csrf_field() }}
  <fieldset class="container">
    @if(count($errors) > 0)
      <ul class="form-error-summary">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    <span class="line">
      <textarea name="hint" id="hint" class="standard" cols="100" rows="10"
                autofocus placeholder="Write your comment here."
                >{{ old("hint") }}</textarea>
    </span>
    <span class="line">
      <label for="telephone-number" class="standard">Phone Number</label>
      <input name="telephone-number" id="telephone-number" type="text"
        class="standard" value='{{ old("telephone-number") }}'
        placeholder="xxx-xxx-xxxx"></input>
    </span>
    <span class="line">
      <label for="email-address" class="standard">Email Address</label>
      <input name="email-address" id="email-address" type="text"
              class="standard" value='{{ old("email-address") }}'
              placeholder="email@mailserver.com"/>
    </span>
    <span class="line">
      <label for="form-rating" class="standard">
        Rate your satsifaction with this form
      </label>
      <input name="form-rating" id="form-rating" type="range" class="standard"
              min="0" max="100" value='{{ old("form-rating") }}'></input>
    <span class="line">
      <input type="submit" value="Submit"></input>
    </span>
  </fieldset>
</form>
<p class="container">
  <img class="aligned" src="images/suggestions.png"/>
</p>
@endsection

