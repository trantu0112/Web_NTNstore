<?php 
	/**
	 * 
	 */
	include_once 'config/myConfig.php';
	class Order_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getOrder(){
			$sql = "SELECT * FROM tbl_order";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Lấy đơn hàng duy nhất theo mã đơn
		public function getIdOrder($id_order){
			$sql = "SELECT * FROM tbl_order WHERE id_order = :id_order";
			$pre = $this->pdo->prepare($sql);	
			$pre->bindParam(':id_order', $id_order);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Thông tin chi tiết đơn hàng
		public function getDetailOrd($id_order){
			$sql = "SELECT tbl_product.percent, tbl_product.price, tbl_detail_order.size, tbl_order.id_order, tbl_product.product_name, tbl_detail_order.quantity_order, tbl_detail_order.price_detail, tbl_detail_order.total FROM tbl_detail_order, tbl_product, tbl_order WHERE tbl_order.id_order = :id_order AND tbl_detail_order.id_product = tbl_product.id_product AND tbl_detail_order.id_order = tbl_order.id_order  ORDER BY tbl_detail_order.id_order ASC" ;
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_order', $id_order);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Lấy tài khoản theo id
		public function getIdAcc($id_account){
			$sql = "SELECT * FROM tbl_account WHERE id_account = :id_account";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_account', $id_account);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getSumOrder($id_order){
			$sql = "SELECT minus_points, percent, sum_total FROM tbl_order WHERE id_order = :id_order";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_order', $id_order);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Update status order
		public function updateStatusC($id_order){
			$sql = "UPDATE tbl_order SET status = 'Hủy' WHERE tbl_order.id_order = :id_order";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_order', $id_order);
			if ($pre->execute()) {
				$_SESSION['noti-order'] = 1;
			}
		}

		public function updateStatusM($id_order){
			$sql = "UPDATE tbl_order SET status = 'Đang giao' WHERE tbl_order.id_order = :id_order";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_order', $id_order);
			if ($pre->execute()) {
				$_SESSION['noti-order'] = 2;
			}
		}
		public function updateStatusF($id_order){
			$sql = "UPDATE tbl_order SET status = 'Hoàn thành' WHERE tbl_order.id_order = :id_order";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_order', $id_order);
			if ($pre->execute()) {
				$_SESSION['noti-order'] = 3;
			}
		}

		//xóa mã giảm giá
		public function delOrder($id_order){
			$sql = "DELETE FROM tbl_order WHERE tbl_order.id_order = :id_order";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_order',$id_order);

			if ($pre->execute()) {
				$_SESSION['noti-order'] = 4;
				header('Location: index.php?page=list-order');
			}else{
				echo "Không thể xóa!";
			}
		}

	}

 ?>