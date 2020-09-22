<?php 
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Pro_m extends Connect
	{
		public $last_id_acc;
		public $last_id_order;
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
		//Đếm số bản ghi tìm thấy
		public function countSearchPro($keys){
			$sql = "SELECT id_product FROM tbl_product WHERE product_name like :keys";
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':keys',$keys);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//phân trang
		public function pages($from, $row){
			$sql = "SELECT * FROM tbl_product,tbl_category WHERE tbl_product.id_cate = tbl_category.id_cate ORDER BY tbl_product.id_product DESC LIMIT $from, $row";
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
		//Danh sách sản phẩm 
		public function getPro(){
			$sql = "SELECT tbl_product.id_product FROM tbl_product ORDER BY tbl_product.id_product DESC";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Danh sách sản phẩm new
		public function getProNew(){
			$sql = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.status = 'new' AND tbl_product.id_cate = tbl_category.id_cate ORDER BY tbl_product.id_product DESC LIMIT 16";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Danh sách sản phẩm sale
		public function getProSale(){
			$sql = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.status = 'sale' AND tbl_product.id_cate = tbl_category.id_cate ORDER BY tbl_product.id_product DESC LIMIT 16";
			$pre = $this->pdo->prepare($sql);

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Danh sách sản phẩm theo Cate
		public function getProdCate($cate_name, $from, $row){
			$sql = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.id_cate = tbl_category.id_cate AND tbl_category.cate_name = :cate_name ORDER BY tbl_product.id_product ASC LIMIT $from, $row";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':cate_name', $cate_name);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Sắp xếp sản phẩm theo giá giảm dần
        public function getProdSortByDESC($cate_name, $from, $row){
            $sql = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.id_cate = tbl_category.id_cate AND tbl_category.cate_name = :cate_name ORDER BY price*(1-percent/100) DESC LIMIT $from, $row";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':cate_name', $cate_name);
            $pre->execute();

            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        //Sắp xếp sản phẩm theo giá tăng dần
        public function getProdSortByASC($cate_name, $from, $row){
            $sql = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.id_cate = tbl_category.id_cate AND tbl_category.cate_name = :cate_name ORDER BY price*(1-percent/100) ASC LIMIT $from, $row";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':cate_name', $cate_name);
            $pre->execute();

            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

		//Lấy số sản phẩm
		public function getNumberCate($cate_name){
			$sql = "SELECT tbl_product.id_product FROM tbl_product, tbl_category WHERE tbl_product.id_cate = tbl_category.id_cate AND tbl_category.cate_name = :cate_name";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':cate_name', $cate_name);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Lấy sản phẩm theo id
		public function getId_product($id){
			$sql = "SELECT * FROM tbl_product, tbl_category WHERE id_product = :id AND tbl_product.id_cate = tbl_category.id_cate";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
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


		//Thêm thông tin khách hàng mới
		public function addAcc($display_name, $user_name, $password, $phone, $email, $addres){
			$sql = "INSERT INTO tbl_account (display_name, user_name, password, phone, email, addres, type) VALUES (:display_name, :user_name, :password, :phone, :email, :addres, 'Khách hàng');";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':display_name',$display_name);
			$pre->bindParam(':user_name',$user_name);
			$pre->bindParam(':password',$password);
			$pre->bindParam(':phone',$phone);
			$pre->bindParam(':email',$email);
			$pre->bindParam(':addres',$addres);

			if ($pre->execute()) {
				if (isset($_SESSION['add_account'])) {
					unset($_SESSION['add_account']);
					unset($_SESSION['name']);
					unset($_SESSION['addres']);
				}
				return $this->last_id_acc = $this->pdo->lastInsertId();
			}else{
				$_SESSION['add_account'] = 1;
			}
		}

		//Update tài khoản
		public function updateAccount($id_account, $display_name, $email, $phone, $addres){
			$sql = "UPDATE tbl_account SET display_name = :display_name, email = :email, phone = :phone, addres = :addres WHERE tbl_account.id_account = :id_account;";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account',$id_account);
			$pre->bindParam(':display_name',$display_name);
			$pre->bindParam(':phone',$phone);
			$pre->bindParam(':email',$email);
			$pre->bindParam(':addres',$addres);

			if ($pre->execute()) {
				$_SESSION['update'] = 2;
			}else{
				$_SESSION['update'] = 1;
			}
		}
		//Lấy password
		public function getPassword($id_account, $password){
			$sql ="SELECT password FROM tbl_account WHERE id_account = :id_account AND password = :password";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account',$id_account);
			$pre->bindParam(':password',$password);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Update password
		public function updatePassword($id_account, $password){
			$sql = "UPDATE tbl_account SET password = :password WHERE tbl_account.id_account = :id_account;";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account',$id_account);
			$pre->bindParam(':password',$password);
			if ($pre->execute()) {
				$_SESSION['update_passw'] = 2;
			}
			
		}

		//Lấy email duy nhất
		public function getEmail($email){
			$sql = "SELECT email FROM tbl_account WHERE email = :email";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':email',$email);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Lấy phone duy nhất
		public function getPhone($phone){
			$sql = "SELECT phone FROM tbl_account WHERE phone = :phone";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':phone',$phone);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Thêm đơn hàng
		public function addOrder($id_account, $note, $minus_points, $percent, $sum_total){
			$sql = "INSERT INTO tbl_order (id_account, note, minus_points, percent, sum_total) VALUES (:id_account, :note, :minus_points, :percent, :sum_total);";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account', $id_account);
			$pre->bindParam(':note', $note);
			$pre->bindParam(':minus_points', $minus_points);
			$pre->bindParam(':percent', $percent);
			$pre->bindParam(':sum_total', $sum_total);
			if ($pre->execute()) {
				return $this->last_id_order = $this->pdo->lastInsertId();
			}else{
				exit();
			}
		}

		//Thêm chi tiết đơn hàng
		public function addDetailOrder($id_order, $id_product, $size, $quantity_order, $price_detail, $total){
			$sql =  "INSERT INTO tbl_detail_order (id_order, id_product, size, quantity_order, price_detail, total) VALUES (:id_order, :id_product, :size, :quantity_order, :price_detail, :total)";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_order', $id_order);
			$pre->bindParam(':id_product', $id_product);
			$pre->bindParam(':size', $size);
			$pre->bindParam(':quantity_order', $quantity_order);
			$pre->bindParam(':price_detail', $price_detail);
			$pre->bindParam(':total', $total);
			$pre->execute();
		}

		//Lấy ảnh chi tiết
		public function getImgDetail($id_product){
			$sql = "SELECT * FROM tbl_img_product WHERE id_product = :id_product";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_product', $id_product);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//add rating
		public function addRating($id_product, $id_account, $rating, $rating_proc){
			$sql = "INSERT INTO tbl_star_rating (id_product, id_account, rating, rating_proc) VALUES (:id_product, :id_account, :rating, :rating_proc)";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_product',$id_product);
			$pre->bindParam(':id_account',$id_account);
			$pre->bindParam(':rating',$rating);
			$pre->bindParam(':rating_proc',$rating_proc);
			$pre->execute();
		}

		//update rating
		public function updateRating($id_product, $id_account, $rating, $rating_proc){
			$sql = "UPDATE tbl_star_rating SET rating = :rating, rating_proc = :rating_proc WHERE tbl_star_rating.id_product = :id_product AND tbl_star_rating.id_account = :id_account;";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_product',$id_product);
			$pre->bindParam(':id_account',$id_account);
			$pre->bindParam(':rating',$rating);
			$pre->bindParam(':rating_proc',$rating_proc);
			$pre->execute();
		}

		//Lấy rating theo id
		public function getIdRating($id_product, $id_account){
			$sql = "SELECT * FROM tbl_star_rating WHERE id_product = :id_product AND id_account = :id_account";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_product',$id_product);
			$pre->bindParam(':id_account',$id_account);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Lấy thông tin của tất cả rating theo id
		public function getIdRatings($id_product){
			$sql = "SELECT tbl_account.img_avarta,tbl_account.display_name, tbl_star_rating.id_account, tbl_star_rating.id_product, tbl_star_rating.rating, tbl_star_rating.rating_proc, tbl_star_rating.day_create FROM tbl_star_rating, tbl_account WHERE id_product = :id_product AND tbl_star_rating.id_account = tbl_account.id_account";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_product',$id_product);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Lấy point
		public function getPoint($id_account){
			$sql = "SELECT tbl_account.points FROM tbl_account WHERE id_account = :id_account";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account',$id_account);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Update point
		public function updatePoint($id_account, $points){
			$sql = "UPDATE tbl_account SET points = :points WHERE tbl_account.id_account = :id_account;";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account',$id_account);
			$pre->bindParam(':points',$points);
			$pre->execute();
		}

		//Lấy ra mã giảm giá
		public function getDiscount(){
			$sql = "SELECT * FROM tbl_discount";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		//Lấy ra tất cả đơn hàng của từng tài khoản 
		public function getOrder($id_account){
			$sql = "SELECT * FROM tbl_order WHERE id_account = :id_account";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account', $id_account);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		//Lấy ra tất cả đơn hàng của từng tài khoản 
		public function getProcessOrder($id_account){
			$sql = "SELECT * FROM tbl_order WHERE id_account = :id_account AND status = 'Đang xử lý'";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account', $id_account);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getDeliOrder($id_account){
			$sql = "SELECT * FROM tbl_order WHERE id_account = :id_account AND status = 'Đang giao'";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account', $id_account);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getDoneOrder($id_account){
			$sql = "SELECT * FROM tbl_order WHERE id_account = :id_account AND status = 'Hoàn thành'";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account', $id_account);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		public function getCancelOrder($id_account){
			$sql = "SELECT * FROM tbl_order WHERE id_account = :id_account AND status = 'Đã hủy'";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id_account', $id_account);
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

		//Kiểm tra mail duy nhất
		public function checkEmail($email){
			$sql = "SELECT email FROM tbl_account WHERE email = :email";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':email', $email);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		
		//Cập nhật lại mật khẩu
		public function resetPass($email, $password){
			$sql = "UPDATE tbl_account SET password = :password WHERE email = :email";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':email', $email);
			$pre->bindParam(':password', $password);
			if($pre->execute()){
				unset($_SESSION['rand']);
			}
		}

	}

 ?>