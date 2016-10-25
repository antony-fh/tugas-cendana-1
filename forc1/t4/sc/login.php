<?php namespace sc;
use config_\Config as config;
	class Login extends config{
		public function __construct(){
			parent::__construct();
			$this->con = new Config();
		}

		// /*** for registration process ***/
		// public function reg_user($name,$username,$password,$email){

		// 	$password = md5($password);
		// 	$sql="SELECT * FROM users WHERE uname='$username' OR uemail='$email'";

		// 	//checking if the username or email is available in con
		// 	$check =  $this->con->query($sql) ;
		// 	$count_row = $check->num_rows;

		// 	//if the username is not in con then insert to the table
		// 	if ($count_row == 0){
		// 		$sql1="INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'";
		// 		$result = mysqli_query($this->con,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
  //       		return $result;
		// 	}
		// 	else { return false;}
		// }

		public function check_login($username, $password){
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			$query = mysql_query("select * from dp where nama_pengguna='$username' AND password_pengguna=md5('$password')");
			$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login'] = true;
	            $_SESSION['log'] = $username;
	            return true;
			} else {
				return false;
			}
    	}

	    public function get_session(){
	        return $_SESSION['login'];
	    }

	    public function logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

	}
?>