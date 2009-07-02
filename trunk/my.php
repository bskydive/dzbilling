<?php 
if(!empty($_GET['file'])){ 
    $filename = basename($_GET['file']); 

    header('Content-Disposition: attachment; filename="'.$filename.'"'); 
    header('Content-Type: application/x-force-download; name="'.$filename.'"'); 

     readfile($filename); 
} 
?> 