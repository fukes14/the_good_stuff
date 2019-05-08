<?php
echo "hello";
$inemail = $_POST['email'];
$inpass = $_POST['password'];
$inverify = $_POST['password2'];

$domdick = new domDocument();
$domdick->load("xmlstuff/users.xml");
$CRLF = $domdick->createTextNode("\n");
$root=$domdick->documentElement; // This can differ (I am not sure, it can be only documentElement or documentElement->firstChild or only firstChild)


$infotag = $domdick->createElement("user");
  $email = $domdick->createElement("email", $inemail);
  $pass = $domdick->createElement("password", $inpass);

$infotag->appendChild($CRLF);
$infotag->appendChild($email);
$infotag->appendChild($pass);

$root->appendChild($CRLF);
$root->appendChild($infotag);
$root->appendChild($CRLF);

  $guessedRight = true;
if ($guessedRight)
{
header( 'Location: https://www.cs.sunyit.edu/~fukesc/listing_main.html' );
die();
}
else
{
header( 'Location: https://www.cs.sunyit.edu/~fukesc/create.html' );
}


  ?>
