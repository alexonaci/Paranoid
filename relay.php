<?php
include 'PhpSerial.php';
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyACM0");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none"); 
$serial->deviceOpen();
sleep(2);
$serial->sendMessage($_GET["command"]);
sleep(2);
$read = $serial->readPort();
if(strcmp("", $read) == 0)
{
	sleep(0.2);
	$read = $serial->readPort();
	echo "abc";
}
echo $read;
?>
