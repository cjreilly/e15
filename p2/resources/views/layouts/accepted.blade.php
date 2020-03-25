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
</div>
<p class="container">
  <img class="aligned" src="images/suggestions.png"/>
</p>
@endsection
