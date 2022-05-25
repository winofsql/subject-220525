<?php

// *************************************
// HTML の埋め込みを排除する
// *************************************
function hsc($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}






