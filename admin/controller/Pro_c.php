<?php 
	include_once 'model/Pro_m.php';
	class Pro_c extends Pro_m
	{
		private $pro;
		function __construct()
		{
			$this->pro = new Pro_m();
		}

		public function product(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'list';
			}

			switch ($method) {
				case 'del':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$this->pro->delPro($id);
					}
					break;
				case 'edit':
					$rs_pro = $this->pro->getPro();
					$rs_cate = $this->pro->getCate();
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						foreach ($rs_pro as $key => $value) {
							if ($id == $value['id_product']) {
								$_SESSION['name'] = $value['product_name'];
								$_SESSION['cate'] = $value['id_cate'];
								$_SESSION['status'] = $value['status'];
								$_SESSION['quantity'] = $value['quantity'];
								$_SESSION['price'] = $value['price'];
								$_SESSION['description'] = $value['description'];
								$_SESSION['percent'] = $value['percent'];
								$fileName_o = $value['img'];	
							}	
						}
					}
					if (isset($_POST['sm_edit'])) {
						$name = $_POST['name'];
						$cate = $_POST['cate'];
						$status = $_POST['status'];
						$qty = $_POST['qty'];
						$price = $_POST['price'];
						$desc = $_POST['desc'];
						$percent = $_POST['percent'];

						$file = $_FILES['avatar'];
						$fileName_n = $file['name'];
						if ($fileName_n == '') {
							$fileName = $fileName_o;
						}else{
							$fileName_n = $fileName_o;
							$fileName = $fileName_n;
						}

                        $allowUpload = 1; //Biến kiểm tra
						foreach ($rs_cate as $key => $value) {
							$id_cate = $value['id_cate'];
							$name_cate = $value['cate_name'];
                            $check = getimagesize($file['tmp_name']);
							if ($cate == $id_cate && $name_cate == 'NIKE' && $check == true) {
								move_uploaded_file($file["tmp_name"], "images/product/Nike/".$fileName);
                                $this->pro->editPro($id, $cate, $name, $qty, $price, $fileName, $desc, $status, $percent);
							}else if ($cate == $id_cate && $name_cate == 'ADIDAS' && $check == true){
								move_uploaded_file($file["tmp_name"], "images/product/Adidas/".$fileName);
                                $this->pro->editPro($id, $cate, $name, $qty, $price, $fileName, $desc, $status, $percent);
							}else if ($cate == $id_cate && $name_cate == 'VANS' && $check == true){
								move_uploaded_file($file["tmp_name"], "images/product/Vans/".$fileName);
                                $this->pro->editPro($id, $cate, $name, $qty, $price, $fileName, $desc, $status, $percent);
							}else{
                                $allowUpload = 1;
                            }
						}
                        if ($allowUpload == 1) {
                            echo "Không xác định được ảnh mẫu giầy!";
                        }
					}
					include_once 'views/product/edit-product.php';
					break;
				case 'add':
					$rs_pro = $this->pro->getPro();
					$rs_cate = $this->pro->getCate();
					if (isset($_POST['sm_add'])) {
						$name = $_POST['name'];
						$cate = $_POST['cate'];
						$status = $_POST['status'];
						$qty = $_POST['qty'];
						$price = $_POST['price'];
						$desc = $_POST['desc'];
						$percent = $_POST['percent'];
						
						$file = $_FILES['avatar'];
						$fileName = $cate.'_'.$file['name'];

                        $allowUpload = 1; //Biến kiểm tra
						foreach ($rs_cate as $key => $value) {
							$id_cate = $value['id_cate'];
							$name_cate = $value['cate_name'];
                            $check = getimagesize($file['tmp_name']);
							if ($cate == $id_cate && $name_cate == 'NIKE' && $check == true) {
								move_uploaded_file($file["tmp_name"], "images/product/Nike/".$fileName);
                                $this->pro->addPro($cate, $name, $qty, $price, $fileName, $desc, $status, $percent);
							}else if ($cate == $id_cate && $name_cate == 'ADIDAS' && $check == true){
								move_uploaded_file($file["tmp_name"], "images/product/Adidas/".$fileName);
                                $this->pro->addPro($cate, $name, $qty, $price, $fileName, $desc, $status, $percent);
							}else if ($cate == $id_cate && $name_cate == 'VANS' && $check == true){
								move_uploaded_file($file["tmp_name"], "images/product/Vans/".$fileName);
                                $this->pro->addPro($cate, $name, $qty, $price, $fileName, $desc, $status, $percent);
							}else{
                                $allowUpload = 1;
                            }
						}
                        if ($allowUpload == 1) {
                            echo "Không xác định được ảnh mẫu giầy!";
                        }
					}

					include_once 'views/product/add-product.php';
					break;
				default:
					if (isset($_POST['sb_search'])) {
						$keys = '%'.$_POST['keys'].'%';
						$row = 10; // số tin một trang
						$number = count($this->pro->getNumber()); // Tổng số bản ghi
						$pagination = ceil($number/$row);
						
						if (isset($_GET['pages_sr'])) {
							$pages = $_GET['pages_sr'];
						}else{
							$pages = 1;
						}	
						$from = ($pages - 1) * $row;
						$rs_pro = $this->pro->searchPro($keys, $from, $row);
						$count = count($rs_pro);
						if ($count < 1){
							echo "Không có sản phẩm nào được tìm thấy";
							//header('Location: index.php?page=list-product');
						}	
					}else{
						$row = 10; // số tin một trang
						$number = count($this->pro->getNumber()); // Tổng số bản ghi
						$pagination = ceil($number/$row);
						
						if (isset($_GET['pages'])) {
							$pages = $_GET['pages'];
						}else{
							$pages = 1;
						}
						
						$from = ($pages - 1) * $row;
						$rs_pro = $this->pro->getProPage($from, $row);
					}
					
					include_once 'views/product/list-product.php';
					break;
			}
		}
	}
 ?>