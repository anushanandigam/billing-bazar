<?php
//=============Configuring Server and Database=======
$host        =    'localhost';
$user        =    'jsnbopxa_recharg';
$password    =    'rech@7799';
$database    =    'jsnbopxa_recharge';
$conn        =    mysql_connect($host,$user,$password) or die('Server Information is not Correct');
mysql_select_db($database,$conn) or die('Database Information is not correct');
?>