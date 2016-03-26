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
sleep(3);
$serial->sendMessage("R"); // send char R to arduino to actuate relay
?>
