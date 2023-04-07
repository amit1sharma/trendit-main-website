<?php
$start_time = $_GET['date'];
echo date("M d, Y h:i A",strtotime($start_time)) ;
exit();
?>