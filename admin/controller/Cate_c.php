<?php 
	/**
	 * 
	 */
	include_once 'model/Cate_m.php';
	class Cate_c extends Cate_m
	{
		private $cate;
		function __construct()
		{
			$this->cate = new Cate_m();
		}

		public function cate(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'list';
			}

			switch ($method) {
				case 'del':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$this->cate->delCate($id);
					}
					break;
				case 'edit':
					$rs_cate = $this->cate->getCate();
					if(isset($_GET['id'])){
						$id = $_GET['id'];
						foreach ($rs_cate as $key => $value) {
							if ($id == $value['id_cate']) {
								$_SESSION['cate_name'] = $value['cate_name'];
							}
						}
					}

					if (isset($_POST['sm_edit'])) {
						$name_cate = $_POST['name_cate'];
						$this->cate->editCate($id, $name_cate);
					}
					include_once 'views/category/edit-cate.php';
					break;	
				default:
					if (isset($_POST['sm_add'])) {
						$name_cate = $_POST['name_cate'];
						$this->cate->addCate($name_cate);
					}
					$rs_cate = $this->cate->getCate();
					include_once 'views/category/list-cate.php';
					break;
			}
		}
	}

 ?>