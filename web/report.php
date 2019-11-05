<?php
$good = "good.txt";/*not behind router*/
$raw  = "raw.txt";/*behind router but upnp is enabled*/
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_GET['p'];
$network = $_GET['n'];
if($network == 1)
{
file_put_contents($raw, $ip.":".$port."\n");

}
else
{
file_put_contents($good, $ip.":".$port."\n");
}
?>
