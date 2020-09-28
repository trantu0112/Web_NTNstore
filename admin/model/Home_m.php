<?php 
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Home_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		//lấy ra tổng số sản phẩm
		public function countProd(){
			$sql = "SELECT COUNT(*) AS COUNT FROM tbl_product";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Lấy tổng số đơn hàng đã hoàn thành
		public function countOrder(){
			$sql = "SELECT COUNT(*) AS COUNT FROM tbl_order";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//lấy ra tổng số tài khoản
		public function countAccount(){
			$sql = "SELECT COUNT(*) AS COUNT FROM tbl_account";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//
		public function dateOrder(){
			$sql = "SELECT date_order, sum_total FROM tbl_order";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
	}
 ?>