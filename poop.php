<?php
$USER=$_POST['user'];
$PASS=$_REQUEST['password'];
echo <<<TEXT
<p>Hello, my name is <b>$USER</b>, I am <b>$PASS</b> years old and live in <b></b> and I am learning how to use PHP to create typing shortcuts by passing information from one place to another place within my web pages.</p>
TEXT;

$xml=simplexml_load_file("usernames.xml") or die("Error: Cannot create object");

$xmlDoc = new DOMDocument();
$xmlDoc->load("usernames.xml");

$x = $xmlDoc->documentElement;

foreach ($x->childNodes AS $item) {
	$item->nodeValue;
	if($item == $USER)
{
header('Location: listing_main.html');
exit;
}
if($item != $USER)
{
print "hi";
}
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
print_r($xml);
?>
