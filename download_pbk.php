<?php
if (!isset($_GET['filename'])) die;
header("Content-Type: application/octet");
echo file_get_contents($_GET['filename']);
?> 