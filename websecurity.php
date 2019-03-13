<!-- ip address; -->
<!-- type of browser; -->
<!-- type of machine; -->
<!-- location of browse; -->
<!-- user agent (e.g. information about the machine generally. this provides more information). -->
<?php
// RETURNS THE FILENAME OF THE SCRIPT BEING EXECUTED
echo $_SERVER['PHP_SELF'];
echo "<br>";
// RETURNS THE IP ADDRESS OF THE HOST SERVER
// $_SERVER['SERVER_ADD'];
echo "<br>";
// RETURNS THE NAME OF THE HOST SERVER
$_SERVER['SERVER_NAME'];
echo "<br>";
// RETURNS THE
// $_SERVER['SERVER_HOST'];
echo "<br>";
// RETURNS THE IP ADDRESS FROM WHERE THE USER IS VIEWING THE CURRENT PAGE
$_SERVER['REMOTE_ADDR'];
echo "<br>";
// RETURNS THE HOST FROM WHERE THE USER IS VIEWING THE CURRENT PAGE
// $_SERVER['REMOTE_HOST'];
echo "<br>";
// RETURNS THE PORT BEING USED BY THE USER'S MACHINE TO COMMUNICATE WITH THE WEB SERVER
$_SERVER['REMOTE_PORT'];
echo "<br>";
// RETURNS THE BROWSER
$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
?>
