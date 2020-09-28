<?php 
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Pro_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		//Hàm tìm kiếm sản phẩm
		public function searchPro($keys, $from, $row){
			$sql = "SELECT * FROM tbl_product,tbl_category WHERE tbl_product.id_cate = tbl_category.id_cate AND product_name like :keys ORDER BY tbl_product.id_product DESC LIMIT $from, $row";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':keys',$keys);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Danh sách sản phẩm
		public function getPro(){
			$sql = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.id_cate = tbl_category.id_cate";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Danh sách sản phẩm page
		public function getProPage($from, $row){
			$sql = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.id_cate = tbl_category.id_cate ORDER BY tbl_product.id_product DESC LIMIT $from, $row";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Lấy số sản phẩm
		public function getNumber(){
			$sql = "SELECT tbl_product.id_product FROM tbl_product";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Hiển thị danh sách danh mục
		public function getCate(){
			$sql = "SELECT * FROM tbl_category";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Thêm sản phẩm
		public function addPro($id_cate, $product_name, $quantity, $price, $img, $description, $status, $percent){
			$sql = "INSERT INTO tbl_product (id_cate, product_name, quantity, price, img, description, status, percent) VALUES (:id_cate, :product_name, :quantity, :price, :img, :description, :status, :percent);";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_cate',$id_cate);
			$pre->bindParam(':product_name',$product_name);
			$pre->bindParam(':quantity',$quantity);
			$pre->bindParam(':price',$price);
			$pre->bindParam(':img',$img);
			$pre->bindParam(':description',$description);
			$pre->bindParam(':status',$status);
			$pre->bindParam(':percent',$percent);
			if ($pre->execute()) {
				header('Location: index.php?page=list-product');
				$_SESSION['noti-pro'] = 1;
			}else{
				echo "Thêm mới thất bại!";
			}
		}
		//Sửa sản phẩm
		public function editPro($id_product, $id_cate, $product_name, $quantity, $price, $img, $description, $status, $percent){
			$sql = "UPDATE tbl_product SET id_cate = :id_cate, product_name = :product_name, quantity = :quantity, price = :price, img = :img, description = :description, status = :status, percent = :percent WHERE tbl_product.id_product = :id_product;";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_product', $id_product);
			$pre->bindParam(':id_cate', $id_cate);
			$pre->bindParam(':product_name', $product_name);
			$pre->bindParam(':quantity', $quantity);
			$pre->bindParam(':price', $price);
			$pre->bindParam(':img', $img);
			$pre->bindParam(':description', $description);
			$pre->bindParam(':status',$status);
			$pre->bindParam(':percent',$percent);

			if ($pre->execute()) {
				unset($_SESSION['name']);
				unset($_SESSION['cate']);
				unset($_SESSION['qty']);
				unset($_SESSION['price']);
				unset($_SESSION['desc']);
				$_SESSION['noti-pro'] = 2;
				header('Location: index.php?page=list-product');
			}else{
				echo "Cập nhật thất bại";
			}
		}

		//Xóa sản phẩm
		public function delPro($id_product){
			$sql = "DELETE FROM tbl_product WHERE tbl_product.id_product = :id_product";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_product',$id_product);

			if ($pre->execute()) {
				$_SESSION['noti-pro'] = 3;
				header('Location: index.php?page=list-product');
			}else{
				echo "Không thể xóa!";
			}
		}

	}

 ?>