<?php
<<<<<<< HEAD
#
# A directory index file for the CSCI E-15 P1 application.
# Copyright 2020 Christopher Reilly
#
#

session_start();
require 'controller/index-controller.php';


session_start();

$results = null;

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    extract($results);

    $_SESSION['results'] = null;
}

# require 'index-view.php';
