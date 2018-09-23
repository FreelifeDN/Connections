<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_myconnectt = "localhost";
$database_myconnectt = "product";
$username_myconnectt = "root";
$password_myconnectt = "1234";
$myconnectt = mysql_pconnect($hostname_myconnectt, $username_myconnectt, $password_myconnectt) or trigger_error(mysql_error(),E_USER_ERROR); 
?>