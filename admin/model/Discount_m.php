<?php 
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Discount_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		//lấy tất mã giảm giá
		public function getDiscount(){
			$sql = "SELECT * FROM tbl_discount";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Lấy mã theo id
		public function getIdDiscount($id_discount){
			$sql = "SELECT * FROM tbl_discount WHERE id_discount = :id_discount";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_discount', $id_discount);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//thêm mã mới
		public function addDiscount($code, $percent, $day_create, $end_day){
			$sql = "INSERT INTO tbl_discount (code, percent, day_create, end_day) VALUES (:code, :percent, :day_create, :end_day);";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':code', $code);
			$pre->bindParam(':percent', $percent);
			$pre->bindParam(':day_create', $day_create);
			$pre->bindParam(':end_day', $end_day);
			if($pre->execute()){
				$_SESSION['noti-discount'] = 1;
				header("Location: index.php?page=list-discount");
			}
			
		}

		//edit mã 
		public function editDiscount($id_discount, $code, $percent, $day_create, $end_day){
			$sql = "UPDATE tbl_discount SET code = :code, percent = :percent, day_create = :day_create, end_day = :end_day WHERE tbl_discount.id_discount = :id_discount;";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_discount', $id_discount);
			$pre->bindParam(':code', $code);
			$pre->bindParam(':percent', $percent);
			$pre->bindParam(':day_create', $day_create);
			$pre->bindParam(':end_day', $end_day);
			if($pre->execute()){
				$_SESSION['noti-discount'] = 2;
				header("Location: index.php?page=list-discount");
			}
			
		}

		//xóa mã giảm giá
		public function delDiscount($id_discount){
			$sql = "DELETE FROM tbl_discount WHERE tbl_discount.id_discount = :id_discount";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_discount',$id_discount);

			if ($pre->execute()) {
				$_SESSION['noti-discount'] = 3;
				header('Location: index.php?page=list-discount');
			}else{
				echo "Không thể xóa!";
			}
		}
	}
?>