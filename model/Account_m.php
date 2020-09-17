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

		//Lấy acc duy nhất
		public function getAcc($user_name, $password){
			$sql = "SELECT tbl_account.id_account, tbl_account.user_name, tbl_account.password, tbl_account.type, tbl_account.display_name, tbl_account.img_avarta FROM tbl_account WHERE user_name = :user_name AND password = :password";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':user_name', $user_name);
			$pre->bindParam(':password', $password);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getIdAcc($id_account){
			$sql = "SELECT * FROM tbl_account WHERE id_account = :id_account";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_account', $id_account);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Thêm mới tài khoản
		public function addAcc($display_name, $user_name, $password, $email){
			$sql = "INSERT INTO tbl_account (display_name, user_name, password, type, email) VALUES (:display_name, :user_name, :password, 'Khách hàng', :email);";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':display_name',$display_name);
			$pre->bindParam(':user_name',$user_name);
			$pre->bindParam(':password',$password);
			$pre->bindParam(':email',$email);

			if ($pre->execute()) {
				
			}else{
				$_SESSION['email'] = 4;
			}
		}
	
	}

 ?>