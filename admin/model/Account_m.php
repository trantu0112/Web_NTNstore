<?php 
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Account_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		
		//Danh sách account
		public function getAcc(){
			$sql = "SELECT * FROM tbl_account";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getpageAcc($from, $row){
			$sql = "SELECT * FROM tbl_account ORDER BY tbl_account.id_account DESC LIMIT $from, $row";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Đếm số acc
		public function getNumber(){
			$sql = "SELECT tbl_account.id_account FROM tbl_account";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Danh sách account thông qua id
		public function getIdAcc($id){
			$sql = "SELECT * FROM tbl_account WHERE id_account = :id";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id', $id);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}


		//Thêm mới tài khoản
		public function addAcc($display_name, $user_name, $password, $type, $img_avarta){
			$sql = "INSERT INTO tbl_account (display_name, user_name, password, type, img_avarta) VALUES (:display_name, :user_name, :password, :type, :img_avarta);";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':display_name',$display_name);
			$pre->bindParam(':user_name',$user_name);
			$pre->bindParam(':password',$password);
			$pre->bindParam(':type',$type);
			$pre->bindParam(':img_avarta',$img_avarta);

			if ($pre->execute()) {
				$_SESSION['noti-acc'] = 1;
				header('Location: index.php?page=list-account');
			}else{
				echo "Thêm mới thất bại";
			}
		}

		//Xóa tài khoản
		public function delAcc($id_account){
			$sql = "DELETE FROM tbl_account WHERE tbl_account.id_account = :id_account";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_account',$id_account);

			if ($pre->execute()) {
				$_SESSION['noti-acc'] = 2;
				header('Location: index.php?page=list-account');
			}else{
				echo "Không thể xóa!";
			}
		}

		//Sửa tài khoản
		public function editAcc($id_account, $display_name, $user_name, $phone, $email, $addres, $type, $points, $img_avarta){


			$sql = "UPDATE tbl_account SET display_name = :display_name, user_name = :user_name, phone = :phone, email = :email, addres = :addres, type = :type, points = :points, img_avarta = :img_avarta WHERE tbl_account.id_account = :id_account;";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_account', $id_account);
			$pre->bindParam(':display_name', $display_name);
			$pre->bindParam(':user_name', $user_name);
			$pre->bindParam(':phone', $phone);
			$pre->bindParam(':email', $email);
			$pre->bindParam(':addres', $addres);
			$pre->bindParam(':type', $type);
			$pre->bindParam(':points', $points);
			$pre->bindParam(':img_avarta', $img_avarta);

			if ($pre->execute()) {
				unset($_SESSION['name']);
				unset($_SESSION['type']);
				unset($_SESSION['user']);
				unset($_SESSION['pass']);
				unset($_SESSION['point']);
				$_SESSION['noti-acc'] = 3;
				header('Location: index.php?page=list-account');
			}else{
				echo "Cập nhật thất bại";
			}
		}
	}

 ?>