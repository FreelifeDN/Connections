<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_myconnectt1 = "localhost";
$database_myconnectt1 = "company";
$username_myconnectt1 = "root";
$password_myconnectt1 = "1234";
$myconnectt1 = mysql_pconnect($hostname_myconnectt1, $username_myconnectt1, $password_myconnectt1) or trigger_error(mysql_error(),E_USER_ERROR); 
?>