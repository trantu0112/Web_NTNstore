<?php 
	include_once 'model/Discount_m.php';
	/**
	 * 
	 */
	class Discount_c extends Discount_m
	{
		private $discount;
		function __construct()
		{
			$this->discount = new Discount_m();
		}

		public function discount(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'list';
			}

			switch ($method) {
				case 'del':
					if (isset($_GET['id'])) {
						$id_discount = $_GET['id'];
						$this->discount->delDiscount($id_discount);
					}
					break;
				case 'edit':
					if (isset($_GET['id'])) {
						$id_discount = $_GET['id'];
						$rs_id = $this->discount->getIdDiscount($id_discount);
						$_SESSION['code'] = $rs_id[0]['code'];
						$_SESSION['percent'] = $rs_id[0]['percent'];
						$_SESSION['day_create'] = $rs_id[0]['day_create'];
						$_SESSION['end_day'] = $rs_id[0]['end_day'];
						if (isset($_POST['sm_edit'])) {
							$code = $_POST['code'];
							$percent = $_POST['percent'];
							$time_in = $_POST['time-in'];
							$time_out = $_POST['time-out'];
							echo $day_create = date("Y-m-d",strtotime($time_in));
							echo $end_day = date("Y-m-d",strtotime($time_out));
							$this->discount->editDiscount($id_discount, $code, $percent, $day_create, $end_day);
						}

					}
					include_once 'views/discount/edit-discount.php';
					break;
				case 'add':
					if (isset($_POST['sm_add'])) {
						$code = $_POST['code'];
						$percent = $_POST['percent'];
						$time_in = $_POST['time-in'];
						$time_out = $_POST['time-out'];
						$day_create = date("Y-m-d",strtotime($time_in));
						$end_day = date("Y-m-d",strtotime($time_out));
						$this->discount->addDiscount($code, $percent, $day_create, $end_day);
					}
					include_once 'views/discount/add-discount.php';
					break;
				
				default:
					$rs_discount = $this->discount->getDiscount();
					include_once 'views/discount/list-discount.php';
					break;
			}
		}
	}
 ?>