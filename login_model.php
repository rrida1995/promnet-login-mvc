<?php
	class login_model{
		public $db;
		public $con;

		//buat koneksi ke MySQL
		function __construct(){
			//parameter mysqli_connect(servername,db username, db password)
			$this->con = mysqli_connect("localhost","root","");
			//parameter mysqli_select_db(variable connect,db name)
			$this->db = mysqli_select_db($this->con,"loginMVC");
		}

		function getLoginData($username, $password){
			//cek data login di table account
			$sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";

			//execute query
			$query = mysqli_query($this->con, $sql);

			//fetch hasil execute query
			$result = mysqli_fetch_assoc($query);

			//return hasil fetch
			return $result;
		}
	}
?>