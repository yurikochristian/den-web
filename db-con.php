<?php 
class database{
	var $host = "localhost:3306";
	var $username = "root";
	var $password = "";
	var $database = "den_db";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}

	function register($name,$email,$telp,$password)
	{	
		$insert = mysqli_query($this->koneksi,"INSERT INTO den_user(user_name,user_password,user_email,user_notelp,user_role) values('$name','$password','$email','$telp','user')");
		$this->login($email,$password,FALSE);
		return $insert;
	}

	function login($email,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from den_user where user_email='$email' AND email_verified='yes'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['user_password']))
		{
			if($remember)
			{
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['user_name'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $data_user['user_name'];
			$_SESSION['role'] = $data_user['user_role'];
			$_SESSION['id'] = $data_user['id_user'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from den_user where user_email='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['email'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 
?>