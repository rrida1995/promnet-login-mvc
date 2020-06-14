<?php
include_once("login_model.php");

	class login_controller{

		var $loginModel;

		function __construct(){
			//instansiasi objek model
			$this->loginModel = new login_model();
			//panggil fungsi checkLogin
			//untuk mengecek data login
			$this->checkLogin();
		}

		function checkLogin(){
			//ambil value username dari input type text 'usernameTxt' di login_view
			$uname = $_POST['usernameTxt'];
			//ambil value password dari input type text 'passwordTxt' di login_view
			$passwd = $_POST['passwordTxt'];

			//cek keberadaan data login di database
			$data = $this->loginModel->getLoginData($uname,$passwd);

			//jika data ada (> 0) maka set session
			//redirect ke tampilan success_view
			if (count($data) > 0){
				session_start();
				$_SESSION['user'] = $data['username'];
				$_SESSION['name'] = $data['name'];
				header('location: http://localhost/LoginMVC/success_view.php');
			}
			//jika data tidak ada (0)
			//tampilkan warning
			else{
				echo "Username atau password salah!";
			}
		}
	}
?>