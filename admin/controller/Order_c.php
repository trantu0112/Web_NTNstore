<?php 
	/**
	 * 
	 */
	include_once 'model/Order_m.php';
	class Order_c extends Order_m
	{
		private $order;
		function __construct()
		{
			$this->order = new Order_m();
		}

		public function order(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'list';
			}

			switch ($method) {
				case 'del':
					if (isset($_GET['id'])) {
						$id_order = $_GET['id'];
						$this->order->delOrder($id_order);
					}
					break;
				case 'detail-order':
					if (isset($_GET['id-acc'])) {
						$id_account = $_GET['id-acc'];
						$rs_acc = $this->order->getIdAcc($id_account);
					}
					if (isset($_GET['id-order'])) {
						$id_order = $_GET['id-order'];
						$rs_detail = $this->order->getDetailOrd($id_order);
						$rs_order = $this->order->getSumOrder($id_order);
						if (isset($_POST['sm_cancel'])) {
							$this->order->updateStatusC($id_order);
							header('Location: index.php?page=list-order&id-order='.$id_order);
						}
						if (isset($_POST['sm_move'])) {
							$this->order->updateStatusM($id_order);
							header('Location: index.php?page=list-order&id-order='.$id_order);
						}
						if (isset($_POST['sm_finish'])) {
							$this->order->updateStatusF($id_order);
							header('Location: index.php?page=list-order&id-order='.$id_order);
						}
					}

					include_once 'views/order/detail-order.php';
					break;
				
				default:
					if (isset($_GET['id-order'])) {
						$id_order = $_GET['id-order'];
						$rs_order = $this->order->getIdOrder($id_order);
					}else{
						$rs_order = $this->order->getOrder();
					}
					include_once 'views/order/list-order.php';
					break;
			}
		}
	}

 ?>