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


		//Lấy danh sách ảnh
		public function getImg(){
			$sql = "SELECT tbl_product.product_name, tbl_img_product.id_product, tbl_img_product.name_img_1, tbl_img_product.name_img_2, tbl_img_product.name_img_3 FROM tbl_img_product, tbl_product WHERE tbl_img_product.id_product = tbl_product.id_product;";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getPageImg($from, $row){
			$sql = "SELECT tbl_product.product_name, tbl_img_product.id_product, tbl_img_product.name_img_1, tbl_img_product.name_img_2, tbl_img_product.name_img_3 FROM tbl_img_product, tbl_product WHERE tbl_img_product.id_product = tbl_product.id_product ORDER BY tbl_img_product.id_product DESC LIMIT $from, $row;";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getNumber(){
			$sql = "SELECT tbl_img_product.id_product FROM tbl_img_product";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//lấy tên sản phẩm
		public function getNameImg(){
			$sql = "SELECT tbl_product.id_product, tbl_product.product_name FROM tbl_product;";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Thêm ảnh
		public function addImg($id_product, $name_img_1, $name_img_2, $name_img_3){
			$sql = "INSERT INTO tbl_img_product (id_product, name_img_1, name_img_2, name_img_3) VALUES (:id_product, :name_img_1, :name_img_2, :name_img_3);";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_product', $id_product);
			$pre->bindParam(':name_img_1', $name_img_1);
			$pre->bindParam(':name_img_2', $name_img_2);
			$pre->bindParam(':name_img_3', $name_img_3);

			if ($pre->execute()) {
				header('Location: index.php?page=list-img');
			}else{
				echo "thêm mới thất bại";
			}
		}

		//Xóa ảnh 
		public function delImg($id_product){
			$sql = "DELETE FROM tbl_img_product WHERE tbl_img_product.id_product = :id_product";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_product',$id_product);

			if ($pre->execute()) {
				header('Location: index.php?page=list-img');
			}else{
				echo "Không thể xóa!";
			}
		}
	}


 ?>