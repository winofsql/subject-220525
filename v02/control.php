<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

require_once("model.php");

$posts = @file("bbs.dat", FILE_IGNORE_NEW_LINES);

print "<pre>";
print_r($posts);
print "</pre>";


require_once("view.php");
?>