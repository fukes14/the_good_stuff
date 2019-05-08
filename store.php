<?php
$inemail = $_POST['email'];
$inpass = $_POST['password'];

$domdick = new domDocument();
$domdick->load("xmlstuff/users.xml");
$CRLF = $domdick->createTextNode("\n");
$root=$domdick->documentElement;

$infotag = $domdick->createElement("user");
  $email = $domdick->createElement("email", $inemail);
  $pass = $domdick->createElement("password", $inpass);

$infotag->appendChild($CRLF);
$infotag->appendChild($email);
$infotag->appendChild($pass);

$root->appendChild($CRLF);
$root->appendChild($infotag);
$root->appendChild($CRLF);

 $domdick->save('xmlstuff/users.xml');

header( 'Location: https://www.cs.sunyit.edu/~fukesc/index.html' );
  ?>
