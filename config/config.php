<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
    header("Acces-Contorl-Allow-Origin");/// to call API and clear the error from web-page


    $thename='Loan Application'; 
    $page = basename($_SERVER['SCRIPT_NAME']);
    $website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $ip_address=$_SERVER['REMOTE_ADDR']; //ip used
    $sysname=gethostname();//computer used
    /////////////////////////////////////////////////////////////////

  
    $website_url='http://localhost/bloan.com';
    //$website_url='http://192.168.78.162/bloan.com';
?>
