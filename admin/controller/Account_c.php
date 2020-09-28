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
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'list';
			}

			switch ($method) {
				case 'logout':
					unset($_SESSION['name_acc_admin']);
					unset($_SESSION['img_avarta']);
					if (isset($_SESSION['nv'])) {
						unset($_SESSION['nv']);
					}
					header('Location: index.php?page=login');
					break;
				case 'add':
					if (isset($_POST['sm_add'])) {
						$name = $_POST['name'];
						$type = $_POST['type'];
						$user = $_POST['user'];
						$pass = sha1($_POST['pass']);
						$staticSalt = 'M5T7N1999@#!';
						$password = md5($staticSalt.$pass);
						$file = $_FILES['avatar'];
						$fileName = $file['name'];
						if ($fileName == '') {
							$fileName = 'img_avarta.png';
						}else{
							$fileName = $user.'_'.$file['name'];
						}

						// Check file img
						$check = getimagesize($file['tmp_name']);
						if ($check == true ) {
							move_uploaded_file($file["tmp_name"], "images/account/".$fileName);
							$this->acc->addAcc($name, $user, $password, $type, $fileName);
						}else{
							echo "Không xác định được ảnh đại diện!";
						}
					}
					include_once 'views/account/add-account.php';
					break;
				case 'del':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$this->acc->delAcc($id);
					}
					break;
				case 'edit':
					$rs_acc = $this->acc->getAcc();
					if(isset($_GET['id'])){
						$id = $_GET['id'];
						foreach ($rs_acc as $key => $value) {
							if($id == $value['id_account']){
								$_SESSION['name'] = $value['display_name'];
								$_SESSION['type'] = $value['type'];
								$_SESSION['user'] = $value['user_name'];
								$_SESSION['phone'] = $value['phone'];
								$_SESSION['email'] = $value['email'];
								$_SESSION['addres'] = $value['addres'];
								$_SESSION['point'] = $value['points'];
								$fileName_o = $value['img_avarta'];						
							}
						}
						
					}
					if (isset($_POST['sm_edit'])) {
						$name = $_POST['name'];
						$type = $_POST['type'];
						$user = $_POST['user'];					
						$phone = $_POST['phone'];					
						$email = $_POST['email'];					
						$addres = $_POST['addres'];					
						$points = $_POST['point'];

						$file = $_FILES['avatar'];
						$fileName_n = $file['name'];
						if ($fileName_n == '') {
							$fileName = $fileName_o;
						}else{
							$fileName_n = $fileName_o;
							$fileName = $fileName_n;
						}

						// Check file img
						$check = getimagesize($file['tmp_name']);
						if ($check == true ) {
							move_uploaded_file($file["tmp_name"], "images/account/".$fileName);
							$this->acc->editAcc($id, $name, $user, $phone, $email, $addres, $type, $points, $fileName);
						}else{
							echo "Không xác định được ảnh đại diện!";
						}
					}
					include_once 'views/account/edit-account.php';
					break;	
				default:
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$rs_acc = $this->acc->getIdAcc($id);
					}else{
						$row = 10; // số tin một trang
						$number = count($this->acc->getNumber()); // Tổng số bản ghi
						$pagination = ceil($number/$row);
						
						if (isset($_GET['pages'])) {
							$pages = $_GET['pages'];
						}else{
							$pages = 1;
						}
						
						$from = ($pages - 1) * $row;
						$rs_acc = $this->acc->getpageAcc($from, $row);
					}
					
					include_once 'views/account/list-account.php';
					break;
			}
		}
	}

 ?>
