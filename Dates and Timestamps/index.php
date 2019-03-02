<?php

  // echo date('d'); // DAY
  // echo date('m'); // MONTH
  // echo date('Y'); // YEAR
  // echo date('l'); // DAY OF THE WEEK 

  // echo date('m/d/Y');

  // echo date('h'); // HOUR
  // echo date('i'); // MINUTE
  // echo date('s'); // SECONDS
  // echo date('a'); // AM OR PM

  // SET TIME ZONE
  date_default_timezone_set('America/Denver');

  // echo date('h:i:sa');

  $timestamp = mktime(0, 0, 0, 6, 11, 2000);

  // echo date('m/d/Y', $timestamp);

  $timestamp2 = strtotime('7:00pm March 22 2016');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next Sunday');
  $timestamp5 = strtotime('+1 Month');

  echo date('m/d/Y h:i:sa', $timestamp5);
