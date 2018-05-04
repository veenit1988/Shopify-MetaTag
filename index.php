<?php
session_start();
// Required File Start.........
require __DIR__.'/conf.php'; //Configuration
require __DIR__.'/connection.php'; //DB connectivity
require __DIR__.'/vendor/autoload.php';
use phpish\shopify;
// Required File END...........
error_reporting(E_ALL);
//print_r($_SESSION); 
ini_set('display_errors', 1);

if((isset($_REQUEST['shop'])) && (isset($_REQUEST['code'])) && $_REQUEST['shop']!='' && $_REQUEST['code']!='' )
{
	$_SESSION['shop']=$_REQUEST['shop'];
	$_SESSION['code']=$_REQUEST['code'];
}
echo 1;
echo $access_token = shopify\access_token($_REQUEST['shop'], SHOPIFY_APP_API_KEY, SHOPIFY_APP_SHARED_SECRET, $_REQUEST['code']);

?>
<html>
<head>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700" rel="stylesheet"> 
 <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/988a7dc35f.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>  
<link href="style.css" rel="stylesheet" type="text/css"/>
 </head>
<body>
<h2>Hello welcome to my app</h2>
</body>
</html>
