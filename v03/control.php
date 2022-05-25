<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

require_once("model.php");

$posts = @file("bbs.dat", FILE_IGNORE_NEW_LINES);

// print "<pre>";
// print_r($posts);
// print "</pre>";

$line_data = "";
$count = count( $posts );
for( $i = 0; $i < $count; $i++ ) {
    // print "<p>{$i} {$posts[$i]}</p>";
    // $line_data .= "<li>{$posts[$i]}</li>\n";

    // https://www.php.net/manual/ja/function.explode.php
    $fields = explode( "\t", $posts[$i] );
    $line_data .= "<li>{$fields[0]} 🍕 {$fields[1]} 🍕 {$fields[2]}</li>";

}

require_once("view.php");
?>