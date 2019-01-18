<?php
// this fuction is created to make the head for each page. 
function printHead($pageTitle)
{
  $head= <<< "FROUGH"
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- link to googlefonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <!-- link to custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- link to uikit for responsive webdesging -->
      <link rel="stylesheet" type="text/css" href="/uikit-2/css/uikit.min.css">
      <link rel="stylesheet" href="/uikit-2/css/uikit_custom.css">
      <title>$pageTitle</title>
  </head>
 
FROUGH;
echo $head;
}
// this funcation is created to build the naviagation bar for each page
function printNav(){
    $navbar= <<< "NAVBAR"
NAVBAR;
echo $navbar;
}

// this fuction is created to build the responsive navigation bar for each page; 
function printSmallMenu(){
  $small= <<< "SMALLMENU"
 
SMALLMENU;
echo $small; 
}

function javaLinks(){
  $links= <<< "IMPORTANT"
 
IMPORTANT;
echo $links; 
}
?>