<?php 
	include_once 'model/Home_m.php';
	/**
	 * 
	 */
	class Home_c extends Home_m
	{
		private $home;
		function __construct()
		{
			$this->home = new Home_m();
		}

		public function home(){
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			}else{
				$page = 'home';
			}

			switch ($page) {		
				default:
					date_default_timezone_set('Asia/Saigon');
					$rs_count_prod = $this->home->countProd();
					$rs_count_order = $this->home->countOrder();
					$rs_count_account = $this->home->countAccount();
					$rs_date = $this->home->dateOrder();
					// echo "<pre>";
					// print_r($rs_date);
					// echo "</pre>";

					//strtotime(date('Y-m-d H:i:s')) - strtotime($rs_date[0]['date_order']);
					//echo strtotime(date('Y-m-d H:i:s')) - strtotime('2020-9-7 21:20:20').'<br>';
					//echo time().'<br>';
					// echo strtotime('2020-9-7 21:20:20').'<br>';
					//echo (strtotime("tomorrow") - strtotime('2020-9-8 00:00:0')).'<br>';
					// echo date('Y-m-d H:i:s').'<br>';
					// echo $rs_date[0]['date_order'];
					//echo 604800 - (time() - strtotime('2020-9-14 00:00:00')).'<br>';
					
					$sum_day = 0;
					$sum_week = 0;

					foreach ($rs_date as $key => $value) {
						$tomorrow = strtotime("tomorrow");
						$time_day = $tomorrow - strtotime($value['date_order']);

						$time_week = 604800 - (time() - strtotime($value['date_order']));

						if ($time_day > 0 && $time_day < 86400) {
							$sum_day += $value['sum_total'];
						}else if($time_week > 0){
							$sum_week += $value['sum_total'];
						}
					}
					include_once 'views/home/home.php';
					break;
			}
		}
	}

 ?>