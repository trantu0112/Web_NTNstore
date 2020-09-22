<?php 
	/**
	 * 
	 */
	include_once 'model/Account_m.php';
	class Account_c extends Account_m
	{
		private $acc;
		function __construct()
		{
			$this->acc = new Account_m();
		}

		public function account(){
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			}else{
				$page = 'login';
			}
			switch ($page) {
				case 'reset':
					include_once 'views/reset.php';
					break;
				case 'account-information':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$rs_acc = $this->acc->getIdAcc($id_account);
						$rs_acc = $rs_acc[0];
					}else{
						header('Location: home');
					}
					include_once 'views/account-information.php';
					break;
				case 'logout':
					unset($_SESSION['name_acc_home']);
					unset($_SESSION['img_avarta']);
					unset($_SESSION['id_account']);
					unset($_SESSION['view']);
					unset($_SESSION['all']);
					unset($_SESSION['delivery']);
					unset($_SESSION['process']);
					unset($_SESSION['done']);
					unset($_SESSION['cancel']);
					header('Location: login');
					break;
				case 'register':
					if (isset($_POST['sm_add'])) {
						$name = $_POST['name'];
						$email = $_POST['email'];
						$pass = sha1($_POST['pass']);
						$staticSalt = 'M5T7N1999@#!';
						$password = md5($staticSalt.$pass);
						$this->acc->addAcc($name, $email, $password, $email);
						if (isset($_SESSION['email'])) {
							$_SESSION['email'] = 4;
							$_SESSION['name'] = $name;
							$_SESSION['email_up'] = $email;
						}else{
							if (isset($_SESSION['email'])) {
								unset($_SESSION['email']);
								unset($_SESSION['name']);
								unset($_SESSION['email_up']);
							}
							header('Location: login');
						}
					}
					include_once 'views/register.php';
					break;
				default:
					if (isset($_POST['sm_login'])) {
						$user = $_POST['user'];
						$pass = sha1($_POST['password']);
						$staticSalt = 'M5T7N1999@#!';
						$password = md5($staticSalt.$pass);
						$rs = $this->acc->getAcc($user, $password);
						if ($rs == null) {
							$count = 0;
						}else{
							$count = count($rs);
							$type = $rs[0]['type'];
							$img_avarta = $rs[0]['img_avarta'];
						}
						if ($count == 1) {
							switch ($type) {
								case 'Nhân viên':
									$_SESSION['img_avarta'] = $img_avarta;
									$_SESSION['name_acc_admin'] = $rs[0]['display_name'];
									$_SESSION['nv'] = $rs[0]['id_account'];
									header("Location: admin/index.php");
									break;
								case 'Quản lý':
									$_SESSION['img_avarta'] = $img_avarta;
									$_SESSION['name_acc_admin'] = $rs[0]['display_name'];
									header("Location: admin/index.php");
									break;
								case 'Khách hàng':
									$_SESSION['img_avarta'] = $img_avarta;
									$_SESSION['id_account'] = $rs[0]['id_account'];
									$_SESSION['name_acc_home'] = $rs[0]['display_name'];
									header("Location: home");
									break;
							}
							if (isset($_SESSION['check_acc'])) {
								unset($_SESSION['check_acc']);
								unset($_SESSION['user']);
							}
						}else{
							$_SESSION['check_acc'] = 1;
							$_SESSION['user'] = $user;
						}
					}
					if (isset($_SESSION['name_acc_home'])) {
						header("Location: home");
					}else if(isset($_SESSION['name_acc_admin'])){
						header("Location: admin/index.php");
					}
					include_once 'views/login.php';
					break;
			}
				
		}
	}

 ?>
