<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_IndexTableData = "dahlienllc.com";
$database_IndexTableData = "babycakes";
$username_IndexTableData = "lgraham";
$password_IndexTableData = "Not2hot4u.";
$IndexTableData = mysql_pconnect($hostname_IndexTableData, $username_IndexTableData, $password_IndexTableData) or trigger_error(mysql_error(),E_USER_ERROR); 
?>