<?php
/* Vi starter med at definere ROOT folder:*/
define('baseDir', dirname(dirname(__FILE__)));

/* Her laver vi alle globale strings, som vi vil bruge i vores functioner */
$sitename = 'Eksempel side';
$headercss = '\css\header.css';

/* Her inkludere vi ALLE de filer, hvis funktioner skal virke sitewide:
include_once('sti/til/filen.php'); - Hvis function filen ikke er tilstede eller indeholder fejl, vil include_once bare give en advarsel. 
require_once('sti/til/filen.php'); - Hvis function filen ikke er tilstede eller indeholder fejl, vil require_once udløse en fatal error, der stopper php. 
*/
require_once(baseDir.'\functions\header.php');
require_once(baseDir.'\functions\is_this_file_included.php');
