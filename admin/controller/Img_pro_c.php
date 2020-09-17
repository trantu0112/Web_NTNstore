<?php 
	include_once 'model/Img_pro_m.php';
	/**
	 * 
	 */
	class Img_pro_c extends Img_pro_m
	{
		private $img;
		function __construct()
		{
			$this->img = new Img_pro_m();
		}

		public function img_pro(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'list';
			}

			switch ($method) {
				case 'add':
					if (isset($_POST['sm_add'])) {
						$name = $_POST['name'];
						$file_1 = $_FILES['img_1'];
						$file_2 = $_FILES['img_2'];
						$file_3 = $_FILES['img_3'];

						$img_1 = $file_1['name'];
						$img_2 = $file_2['name'];
						$img_3 = $file_3['name'];

						if ($img_1 == '' && $img_2 == '' && $img_3 == '') {
							$img_1 = 'img_avarta.png';
							$img_2 = 'img_avarta.png';
							$img_3 = 'img_avarta.png';
						}else{
							$img_1 = $name.'_'.$file_1['name'];
							$img_2 = $name.'_'.$file_2['name'];
							$img_3 = $name.'_'.$file_3['name'];
						}
						move_uploaded_file($file_1["tmp_name"], "images/img_detail/".$img_1);
						move_uploaded_file($file_2["tmp_name"], "images/img_detail/".$img_2);
						move_uploaded_file($file_3["tmp_name"], "images/img_detail/".$img_3);
						$this->img->addImg($name, $img_1, $img_2, $img_3);

					}
					$rs_name_img = $this->img->getNameImg();
					include_once 'views/img_pro_detail/add-img.php';
					break;
				case 'edit':
					$rs_img = $this->img->getImg();
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						foreach ($rs_img as $key => $value) {
							if ($id == $value['id_product']) {
								$_SESSION['name'] = $value['product_name'];
								$img_1_o = $value['name_img_1'];
								$img_2_o = $value['name_img_2'];
								$img_3_o = $value['name_img_3'];

							}	
						}
					}
					if (isset($_POST['sm_edit'])) {
						$name = $_POST['name'];

						$file_1 = $_FILES['img_1'];
						$file_2 = $_FILES['img_2'];
						$file_3 = $_FILES['img_3'];

						$img_1_n = $file_1['name'];
						$img_2_n = $file_2['name'];
						$img_3_n = $file_3['name'];

						if ($img_1_n == '' && $img_2_n == '' && $img_3_n == '') {
							$img_1 = $img_1_o;
							$img_2 = $img_2_o;
							$img_3 = $img_3_o;
						}else{
							$img_1_n = $img_1_o;
							$img_1 = $img_1_n;

							$img_2_n = $img_2_o;
							$img_2 = $img_2_n;

							$img_3_n = $img_3_o;
							$img_3 = $img_3_n;
						}
						move_uploaded_file($file_1["tmp_name"], "images/img_detail/".$img_1);
						move_uploaded_file($file_2["tmp_name"], "images/img_detail/".$img_2);
						move_uploaded_file($file_3["tmp_name"], "images/img_detail/".$img_3);
						unset($_SESSION['name']);
						header('Location: index.php?page=list-img');
					}
					include_once 'views/img_pro_detail/edit-img.php';
					break;
				case 'del':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$this->img->delImg($id);
					}
					break;
				
				default:
						$row = 7; // số tin một trang
						$number = count($this->img->getNumber()); // Tổng số bản ghi
						$pagination = ceil($number/$row);
						
						if (isset($_GET['pages'])) {
							$pages = $_GET['pages'];
						}else{
							$pages = 1;
						}
						
						$from = ($pages - 1) * $row;
						$rs_img = $this->img->getPageImg($from, $row);
					include_once 'views/img_pro_detail/list-img.php';
					break;
			}
		}
	}
	
 ?>