<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

require_once("model.php");

$dataFile = 'bbs.dat';
$kensu = "";

// POST ( FORM からの送信 )
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    write_data();

}

$posts = @file("bbs.dat", FILE_IGNORE_NEW_LINES);

if ( $posts !== FALSE ) {
    $posts = array_reverse($posts);
}
else {
    // ファイルが無い場合空の配列
    $posts = array();
}

$kensu = count($posts);
// print "<pre>";
// print_r($posts);
// print "</pre>";

$line_data = "";

if ( $kensu != 0 ) {
    $count = count( $posts );
    for( $i = 0; $i < $count; $i++ ) {
        // print "<p>{$i} {$posts[$i]}</p>";
        // $line_data .= "<li>{$posts[$i]}</li>\n";

        // https://www.php.net/manual/ja/function.explode.php
        $fields = explode( "\t", $posts[$i] );
        // $line_data .= "<li>{$fields[0]} 🍕 {$fields[1]} 🍕 {$fields[2]}</li>";

        $message = hsc( $fields[0] );
        $user = hsc( $fields[1] );
        $time_stamp = $fields[2];

        $line_data .= "<li>{$message} {$user} - {$time_stamp}</li>";

    }
}
else {
    $line_data .= '<li>投稿データはありません</li>';
}

require_once("view.php");
