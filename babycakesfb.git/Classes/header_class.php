<?php require_once('check_user.php'); ?>
<?php
	class 	base_page{
		
		public function base_page(){
		
		session_start();
		var_dump($_SESSION);
		var_dump($_SESSION);
		echo $_SESSION['password'];
		//exit(0);
		if(!isset($_SESSION['username'])  && !isset($_SESSION['password'])){ 
		echo "Must enter needed information! username and password not set. I am in header_class.";
		return true;
		} else return false;
	
				
		}
		
		public function validate_user(){
			
		//session_start();

		if(!isset($_SESSION['username'])  && !isset($_SESSION['password'])){ 
			echo "Must enter needed information! username and password not set";
	
			} else echo "I am moving on. username and password set properly";

		if(isset($_SESSION['username'])  && isset($_SESSION['password'])){ 
		if (!function_exists("GetSQLValueString")) {
			function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  	if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  	}

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string(			$theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_check_user, $check_user);


	$query_check_user = "SELECT cw_users.username, cw_users.password FROM cw_users  WHERE cw_users.password='$_SESSION[password]' AND cw_users.username='$_SESSION[username]';";
	$check_user = mysql_query($query_check_user, $check_user) or die(mysql_error());
	$row_check_user = mysql_fetch_assoc($check_user);
	$totalRows_check_user = mysql_num_rows($check_user);



if($query_check_user ){
	echo "Success !!!!! row_validate_user query executed properly!!!!!";
	echo "<br></br>";
	echo "Total Count:  $totalRows_check_user";
	if($totalRows_check_user)
		header("location: https://dahlienllc.com/babycakesfb/management_screen.php");
	
	} else echo "Query Failed!!!!!";

			}
	
		}
	
		
	}

?>
