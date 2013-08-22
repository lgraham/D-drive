<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_IndexPage = "dahlienllc.com";
$database_IndexPage = "babycakes";
$username_IndexPage = "lgraham";
$password_IndexPage = "Not2hot4u.";
$IndexPage = mysql_pconnect($hostname_IndexPage, $username_IndexPage, $password_IndexPage) or trigger_error(mysql_error(),E_USER_ERROR); 
?>