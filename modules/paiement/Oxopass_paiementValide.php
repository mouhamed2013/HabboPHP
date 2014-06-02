<?php
session_start();
define('CORE','CORE');
$admin = true ;
require'../../includes/core.php';
// Copyright 2013 oXopass Micropaiement
$oxodid = $config->oxopassid;
$oxofrm = $config->url_site.'/shop.php?error';
$oxoapi = file_get_contents('https://secure.oxopass.com/check-access.php?ip='.$_SERVER['REMOTE_ADDR'].'&did='.$oxodid.'');
if($oxoapi != 'autorise') {
   header('Location: '.$oxofrm.'');
   die();
} else {
	$user->addJetons('oxopass');
	addLogsPaiement($user->username, 'oxopass');
	redirection($config->url_site.'/shop.php?success');
}

?>
