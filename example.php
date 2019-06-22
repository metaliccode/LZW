<?php
include "./lzw.inc.php";

$data = "pimen";

$compressed = lzw_compress($data);
var_dump($data === lzw_decompress($compressed));
echo $compressed;
echo lzw_decompress($compressed);