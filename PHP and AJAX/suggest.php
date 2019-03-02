<?php
  // PEOPLE ARRAY @TODO - GET FROM DB
  $people[] = "Tom";
  $people[] = "Ron";
  $people[] = "Leslie";
  $people[] = "Ben";
  $people[] = "April";
  $people[] = "Andy";
  $people[] = "Ann";
  $people[] = "Chris";

  // GET QUERY STRING
  $q = $_REQUEST['q'];
  $suggestion = '';

  // GET SUGGESTIONS
  if($q != ''){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
      if(stristr($q, substr($person, 0, $len))){
        if($suggestion === ""){
          $suggestion = $person;
        } else {
          $suggestion .= ", $person";
        }
      }
    }
  }

  echo $suggestion = '' ? 'No Suggestion' : $suggestion;