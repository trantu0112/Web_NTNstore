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
						$id_product = $_POST['name'];
						
						$file = $_FILES['avatar'];

                        $arrnameFile = [];
						$countFile = count($file['name']);
						for ($i=0; $i < $countFile; $i++) {
							$fileName = $name.$file['name'][$i];

							 $check = getimagesize($file['tmp_name'][$i]);
							 if ($check == true) {
							 	array_push($arrnameFile, $fileName);
							 	move_uploaded_file($file["tmp_name"][$i], "img/".$fileName);
							 	$this->img->addImg($id_product, $fileName);
							 }
						}
						header('Location: index.php?page=list-img&id='.$id_product);
					}
					$rs_name_img = $this->img->getNameImg();
					include_once 'views/img_pro_detail/add-img.php';
					break;
				case 'edit':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$id_product = $_GET['id_product'];
						$rs_img = $this->img->getImg($id);
						if (count($rs_img) == 0) {
							header("Location: index.php?page=list-product");
						}
						$_SESSION['name'] = $rs_img[0]['product_name'];
						$img_o = $rs_img[0]['name_img'];

						if (isset($_POST['sm_edit'])) {
							$file = $_FILES['img'];
							$img_n = $file['name'];

							if ($img_n == '') {
								$img = $img_o;
							}else{
								$img_n = $img_o;
								$img = $img_n;
							}
                            // Check file img
                            $check = getimagesize($file['tmp_name']);
                            if ($check == true ) {
                                move_uploaded_file($file["tmp_name"], "images/img_detail/".$img);
                                unset($_SESSION['name']);
                                $_SESSION['noti-img'] = 3;
                                header('Location: index.php?page=list-img&id='.$id_product);
                            }else{
                                echo "Không xác định được ảnh!";
                            }
						}
					}
					
					include_once 'views/img_pro_detail/edit-img.php';
					break;
				case 'del':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$id_product = $_GET['id_product'];
						$this->img->delImg($id);
						header('Location: index.php?page=list-img&id='.$id_product);
					}
					break;
				default:
					if (isset($_GET['id'])) {
						$id_product = $_GET['id'];
						$rs_name = $this->img->getIdImg($id_product);
					}		
					include_once 'views/img_pro_detail/list-img.php';
					break;
			}
		}
	}
	
 ?>