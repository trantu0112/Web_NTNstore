<?php 
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Img_pro_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		//lấy tên sản phẩm
		public function getNameImg(){
			$sql = "SELECT tbl_product.id_product, tbl_product.product_name FROM tbl_product;";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Lấy danh sách ảnh
		public function getImg($id_detail_img){
			$sql = "SELECT tbl_product.product_name, tbl_img_product.id_product, tbl_img_product.name_img FROM tbl_img_product, tbl_product WHERE tbl_img_product.id_product = tbl_product.id_product AND tbl_img_product.id_detail_img = :id_detail_img;";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_detail_img',$id_detail_img);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getIdImg($id_product){
			$sql = "SELECT tbl_product.product_name, tbl_img_product.id_product, tbl_img_product.id_detail_img, tbl_img_product.name_img FROM tbl_img_product, tbl_product WHERE tbl_img_product.id_product = :id_product AND tbl_img_product.id_product = tbl_product.id_product;";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_product', $id_product);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Thêm ảnh
		public function addImg($id_product, $name_img){
			$sql = "INSERT INTO tbl_img_product (id_product, name_img) VALUES (:id_product, :name_img);";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_product', $id_product);
			$pre->bindParam(':name_img', $name_img);

			if ($pre->execute()) {
				$_SESSION['noti-img'] = 1;
				header('Location: index.php?page=list-img');
			}else{
				echo "thêm mới thất bại";
			}
		}

		//Xóa ảnh 
		public function delImg($id_detail_img){
			$sql = "DELETE FROM tbl_img_product WHERE tbl_img_product.id_detail_img = :id_detail_img";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_detail_img',$id_detail_img);

			if ($pre->execute()) {
				$_SESSION['noti-img'] = 2;
			}else{
				echo "Không thể xóa!";
			}
		}
	}


 ?>