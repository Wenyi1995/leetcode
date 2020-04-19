<?php


function entityParser($text)
{
    $p = ['/&quot;/', '/&apos;/', '/&amp;/', '/&gt;/', '/&lt;/', '/&frasl;/',];
    $r = ['"', "'", "&", ">", "<", "/"];
    return preg_replace($p, $r, $text);
}

$s = microtime(true);
var_dump(entityParser("&amp; is an HTML entity but &ambassador; is not"));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';