<?php

// *************************************
// HTML の埋め込みを排除する
// *************************************
function hsc($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}


// *************************************
// データの書き込み
// *************************************
function write_data() {

    global $dataFile;

    $message = trim($_POST["message"]);
    $user = trim($_POST["user"]);

    if ($message !== "") {

        if ( $user == "" ) {
            $user = "匿名で投稿";
        }

        // データの区切り文字をスペース化する
        $message = str_replace("\t", ' ', $message);
        $user = str_replace("\t", ' ', $user);

        $time_stamp = date('Y-m-d H:i:s');

        $newData = "{$message}\t{$user}\t{$time_stamp}\n";

        // ファイルに書き込み
        $fp = fopen($dataFile, 'a');
        fwrite($fp, $newData);
        fclose($fp);

        //header('Location: control.php');
        //exit;
    }
}



