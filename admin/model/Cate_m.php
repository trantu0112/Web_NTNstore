<?php 
	/**
	 * 
	 */
	include_once 'config/myConfig.php';
	class Cate_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		//Hiển thị danh sách danh mục
		public function getCate(){
			$sql = "SELECT * FROM tbl_category";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Thêm mới danh mục
		public function addCate($cate_name){
			$sql = "INSERT INTO tbl_category(cate_name) VALUES (:cate_name);";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':cate_name',$cate_name);
			
			if ($pre->execute()) {
				$_SESSION['noti-cate'] = 1;
			}else{
				echo "Thêm mới thất bại";
			}
		}

		//Sửa danh mục
		public function editCate($id_cate,$cate_name){
			$sql = "UPDATE tbl_category SET cate_name = :cate_name WHERE tbl_category.id_cate = :id_cate;";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_cate', $id_cate);
			$pre->bindParam(':cate_name', $cate_name);

			if ($pre->execute()) {
				unset($_SESSION['cate_name']);
				$_SESSION['noti-cate'] = 2;
				header('Location: index.php?page=list-cate');
			}else{
				echo "Cập nhật thất bại";
			}
		}

		//Xóa danh mục
		public function delCate($id_cate){
			$sql = "DELETE FROM tbl_category WHERE tbl_category.id_cate = :id_cate";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id_cate',$id_cate);

			if ($pre->execute()) {
				$_SESSION['noti-cate'] = 3;
				header('Location: index.php?page=list-cate');
			}else{
				echo "Không thể xóa!";
			}
		}

	}

 ?>