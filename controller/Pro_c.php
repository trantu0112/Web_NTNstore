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
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			}else{
				$page = 'home';
			}
			switch ($page) {
				case 'pass-reset':
					if (isset($_SESSION['rand'])) {
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						if ($pass == $_SESSION['rand']) {
							unset($_SESSION['noti-rand']);
							$password = sha1('ntnshop.com');
							$staticSalt = 'M5T7N1999@#!';
							$pass = md5($staticSalt.$password);
							$this->pro->resetPass($email, $pass);
						}else{
							$_SESSION['noti-rand'] = 1;
						}
					}
					

					break;
				case 'get-email':
					$email = $_POST['email'];
					if (isset($_SESSION['get-email']) && $_SESSION['get-email'] == $email) {					
						$rand = rand(100000,999999);
						$data =  '<h5 style="color: #2AC37D; font-weight: bold;font-size: 25px;">Mã xác nhận của quý khách là: <strong style="color: red;">'.$rand.'</strong></h5><h5 style="color: #2AC37D; font-weight: bold;font-size: 25px;">Sau khi quý khách nhập đúng mã xác nhận mật khẩu của quý khách sẽ được đặt lại là: <strong>ntnshop.com</strong></h5>';
						include_once 'PHPMailer/class.phpmailer.php';
						include_once 'PHPMailer/class.smtp.php';

						$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch 

						try {
						    //Server settings
						    $mail->CharSet = 'UTF-8';
						    $mail->SMTPDebug = 0;                // Enable verbose debug output
						    $mail->isSMTP();                                      // Send using SMTP
						    $mail->Host       = 'smtp.gmail.com';              // Set the SMTP server to send through
						    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
						    $mail->Username   = 'namnt721@wru.vn';               // SMTP username
						    $mail->Password   = '0347173650';                         // SMTP password
						    $mail->SMTPSecure = 'tls';   // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS encouraged
						    $mail->Port       = 587;                              // TCP port to connect to, use 465 for PHPMailer::ENCRYPTION_SMTPS above

						    //Recipients
						    $mail->setFrom('namnt721@wru.vn', 'Thông báo mã xác nhận');
						    $mail->addAddress($email, $name);

						    // Content
						    $mail->isHTML(true);                                  // Set email format to HTML
						    $mail->Subject = 'Mã Xác Nhận: ';
						    $mail->Body    = $data;

						    $mail->send();

						    unset($_SESSION['get-email']);
						    $_SESSION['rand'] = $rand;
						    echo 'Message has been sent';
						} catch (Exception $e) {
						    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
						}

					}	
					break;
				case 'check-email':
					$email = $_POST['email'];
					$rs = $this->pro->checkEmail($email);
					if (count($rs) == 1){
					 	unset($_SESSION['email-reset']);
					 	$_SESSION['get-email'] = $email;
					}else if($email == ''){
						$_SESSION['email-reset'] = 1;
						unset($_SESSION['get-email']);
					}else{
						$_SESSION['email-reset'] = 1;
						unset($_SESSION['get-email']);
					} 
					break;
				case 'check-out':
					if (isset($_SESSION['id_account'])) {
							$id = $_SESSION['id_account'];
							$rs = $this->pro->getIdAcc($id);
							$rs_acc = $rs[0];
						}
					if (isset($_POST['sm_order'])) {
						if (isset($_SESSION['id_account'])) {
							if ($rs_acc['phone'] == null || $rs_acc['addres'] == null) {
								$_SESSION['add_account'] = 1;
								$name = $rs_acc['display_name'];
								$email = $rs_acc['email'];
								$phone = $rs_acc['phone'];
								$addres = $rs_acc['addres'];
								$point_db = $rs_acc['points'];
							}else{
								$name = $rs_acc['display_name'];
								$email = $rs_acc['email'];
								$phone = $rs_acc['phone'];
								$addres = $rs_acc['addres'];
								$point_db = $rs_acc['points'];
							}
						}else{
							$name = $_POST['name'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$addres = $_POST['addres'];
							$user = $email;
							$password = sha1('ntnshop.com');
							$staticSalt = 'M5T7N1999@#!';
							$pass = md5($staticSalt.$password);
						}
						$note = $_POST['note'];
						$point = 0;

						if ($rs_acc['phone'] != null && $rs_acc['addres'] != null) {
							if (isset($_SESSION['id_account']) && isset($_SESSION['cart'])) {
								$rs_point = $this->pro->getPoint($_SESSION['id_account']);
								if (!isset($_SESSION['percent'])) {
								
									if ($_SESSION['sum'] > 1000000) {
										$rs_point[0]['points'] += 100000;
										$point = $rs_point[0]['points'];
										$this->pro->updatePoint($_SESSION['id_account'], $point);
									}
								}
								if (isset($_SESSION['points'])) {
									$this->pro->updatePoint($_SESSION['id_account'], 0);
								}
							}
						}		
						
						$data = '<main class="ps-main">
			              <div class="ps-content pt-80 pb-80">
			                <div class="ps-container">
			                  <div class="ps-cart-listing">
			                  	<h1 style="text-align: center;">THÔNG BÁO ĐƠN HÀNG</h1>
			                    <h3>1. Chi tiết hóa đơn</h3>
			                    <table class="table ps-cart__table" style="border: 1px solid;border-collapse: collapse;width: 1000px;">
			                      <thead>
			                        <tr>
			                          <th style="border: 1px solid;width: 100px;">Hình ảnh</th>
			                          <th style="border: 1px solid">Tất cả sản phẩm</th>
			                          <th style="border: 1px solid">Size</th>
			                          <th style="border: 1px solid">Giá</th>
			                          <th style="border: 1px solid">Số lượng</th>
			                          <th style="border: 1px solid">Tổng tiền</th>
			                        </tr>
			                      </thead>
			                      <tbody>';
					    if (isset($_SESSION['cart'])) {

					        foreach ($_SESSION['cart'] as $key => $size) {
					            foreach ($size as $key => $value) {
					            if ($value['percent'] <= 0) {
					                $total = $value['qty'] * $value['price']; 
					              }else{
					                $total = $value['qty'] * ($value['price'] * (1 - ($value['percent']/100)));
					              }
					              $data .= '<tr>
					              	  <td style="border: 1px solid"><img style="width: 100px; height: 100px;" src="php0320e2-1.itpsoft.com.vn/admin/images/product/'.$value['cate_name'].'/'.$value['img'].'"></td>
					                  <td style="width: 400px;border: 1px solid;font-size: 18px;text-align: center;"> '.$value['product_name'].'</td>
					                  
					                  <td style="border: 1px solid; text-align: center;">'.$value['size'].'</td>
					                  <td style="border: 1px solid; text-align: center;">'.number_format($value['price']).' đ'.'</td>
					                  <td style="border: 1px solid; text-align: center;">'.$value['qty'].'</td>
					                  <td style="border: 1px solid; text-align: center;">'.number_format($total).' đ'.'</td>
					                  </tr>';  
					          }
					        }
					      }                       

						$data .=    '<tr>
										<td style="border: 1px solid;font-family: arial;font-size: 20px;" colspan="6">Chiết khấu: ';
									if (isset($_SESSION['percent'])) {
										$data .= $_SESSION['percent'].' %';
									}else{
										$data .= '0 %';
									}
						$data .=	'</td>
									</tr>
									<tr>
										<td style="border: 1px solid;font-family: arial;font-size: 20px;" colspan="6">Điểm: ';
									if (isset($_SESSION['points'])) {
										$data .= '- '.$point_db;
									}else{
										$data .= 0;
									}

						$data .=	'</td>
									</tr>
									<tr>
										<td style="border: 1px solid;font-family: arial;font-size: 20px;" colspan="6">Tổng tiền: ';
									if (isset($_SESSION['percent']) || isset($_SESSION['points'])) {
										$data .= number_format($_SESSION['sum_tt']). "đ ";
									}else{
										$data .= number_format($_SESSION['sum']). "đ ";}
						$data .=	'</td>
									</tr>
									</tbody>
								</table>
								    <div>
								      <h3>2. Thông tin khách hàng</h3>
								      <h5><strong>Họ và tên: </strong>'.$name.'</h5>  
								      <h5><strong>Số điện thoại: </strong>'.$phone.'</h5>  
								      <h5><strong>Email: </strong>'.$email.'</h5>  
								      <h5><strong>Địa chỉ: </strong>'.$addres.'</h5> 
								    </div>
								      </div>
								      <div class="ps-cart-listing">
								        <h5 style="color: #2AC37D; font-weight: bold;font-size: 25px;">Cảm ơn quý khách đã tin tưởng và chọn <strong>NTN STORE!</strong></h5>';
								        if (!isset($_SESSION['id_account'])) {
								        	$data .= '<h5>Tài khoản của quý khách sẽ được tạo khi lần đầu tiên mua hàng <br>tại <strong style="color: #2AC37D;">NTN STORE</strong> và được dùng để tích điểm trong các lần mua tiếp theo.<br>Với mỗi đơn hàng trên 1,000,000 đ. Quý khách sẽ được thưởng 100,000 điểm,<br>tương đương với 100.000 đ áp dụng cho khách hàng khi đăng nhập tài khoản</h5>
								        			<h5>Tài khoản và mật khẩu của quý khách là:<strong><br>- Tài khoản: <a href="ntnstore.com">'.$user.'</a><br>- Mật khẩu: ntnshop.com</strong></h5>';
								        }else{
								        	if (!isset($_SESSION['percent']) && !isset($_SESSION['points'])) {
												$data .= '<h5 style="font-size: 15px;">Bạn được cộng thêm: '.$point.' điểm.<br>Tương đương<strong> '.number_format($point).' đ</strong> có thể sử dụng để giảm giá trong lần mua hàng tiếp theo!</h5>';
											}else if(!isset($_SESSION['percent']) && isset($_SESSION['points'])){
												$data .= '<h5 style="font-size: 15px;">Bạn còn: 0 điểm.</h5>';
											}else if(isset($_SESSION['percent']) && !isset($_SESSION['points'])){
												$data .= '<h5 style="font-size: 15px;">Bạn đã sử dụng giảm giá nên không được cộng điểm.</h5>';
											}else{
												$data .= '<h5 style="font-size: 15px;">Bạn còn: 0 điểm.</h5>';
											}
											
								        }    
						$data .=		'<div>
								    </div>
								  </div>
								</main>';
						if (isset($_SESSION['id_account'])) {
							$id_acc = $_SESSION['id_account'];
						}else{
							if (isset($_SESSION['email']) && $_SESSION['email'] == 3 || isset($_SESSION['phone']) && $_SESSION['phone'] == 3) {
								$_SESSION['add_account'] = 1;
							}else{
								$_SESSION['name'] = $name;
								$_SESSION['addres'] = $addres;
								$this->pro->addAcc($name, $user, $pass, $phone, $email, $addres);
							}							
							if (isset($_SESSION['add_account']) && $_SESSION['add_account'] == 1) {
								$_SESSION['name'] = $name;
								$_SESSION['addres'] = $addres;
							}else{
								//Lấy id mới nhất của bảng accout vừa thêm vào
								$id_acc = $this->pro->last_id_acc;
							}	
						}

						if (!isset($_SESSION['add_account']) && isset($_SESSION['cart'])) {
							if (isset($_SESSION['percent']) && isset($_SESSION['points'])) {
								$sum_toltal = $_SESSION['sum_tt'];
								$minus_points = $_SESSION['points'];
								$percent = $_SESSION['percent'];
								$this->pro->addOrder($id_acc, $note, $minus_points, $percent, $sum_toltal);
							}else if(isset($_SESSION['percent']) && !isset($_SESSION['points'])){
								$sum_toltal = $_SESSION['sum_tt'];
								$minus_points = 0;
								$percent = $_SESSION['percent'];
								$this->pro->addOrder($id_acc, $note, $minus_points, $percent, $sum_toltal);
							}else if(!isset($_SESSION['percent']) && isset($_SESSION['points'])){
								$sum_toltal = $_SESSION['sum_tt'];
								$minus_points = $_SESSION['points'];
								$percent = 0;
								$this->pro->addOrder($id_acc, $note, $minus_points, $percent, $sum_toltal);
							}else{
								$sum_toltal = $_SESSION['sum'];
								$minus_points = 0;
								$percent = 0;
								$this->pro->addOrder($id_acc, $note, $minus_points, $percent, $sum_toltal);
							}
							//Lấy id mới nhất của bảng order vừa thêm vào
							$id_order = $this->pro->last_id_order;

							foreach ($_SESSION['cart'] as $key => $size) {
	                  			foreach ($size as $key => $pro) {
	              
									if ($pro['percent'] <= 0) {
		                               $price = $pro['price'];
		                               $total = $pro['qty'] * $pro['price'];
			                        }else{
			                           $price = $pro['price'] * (1 - ($pro['percent']/100));
			                           $total = $pro['qty'] * $price;
			                        }
			                        $this->pro->addDetailOrder($id_order, $pro['id_product'], $pro['size'], $pro['qty'], $price, $total);

			                    }
							}
							include_once 'PHPMailer/class.phpmailer.php';
							include_once 'PHPMailer/class.smtp.php';

							$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch 

							try {
							    //Server settings
							    $mail->CharSet = 'UTF-8';
							    $mail->SMTPDebug = 0;                // Enable verbose debug output
							    $mail->isSMTP();                                      // Send using SMTP
							    $mail->Host       = 'smtp.gmail.com';              // Set the SMTP server to send through
							    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
							    $mail->Username   = 'namnt721@wru.vn';               // SMTP username
							    $mail->Password   = '0347173650';                         // SMTP password
							    $mail->SMTPSecure = 'tls';   // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS encouraged
							    $mail->Port       = 587;                              // TCP port to connect to, use 465 for PHPMailer::ENCRYPTION_SMTPS above

							    //Recipients
							    $mail->setFrom('namnt721@wru.vn', 'Thông báo đơn hàng mới');
							    $mail->addAddress($email, $name);

							    // Content
							    $mail->isHTML(true);                                  // Set email format to HTML
							    $mail->Subject = 'THÔNG BÁO ĐƠN HÀNG';
							    $mail->Body    = $data;

							    $mail->send();
							    echo 'Message has been sent';
							} catch (Exception $e) {
							    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
							}

							unset($_SESSION['cart']);
							if (isset($_SESSION['percent'])) {
								unset($_SESSION['percent']);
							}
							if (isset($_SESSION['points'])) {
								unset($_SESSION['points']);
							}
							if (isset($_SESSION['sum_tt'])) {
								unset($_SESSION['sum_tt']);
							}
							if (isset($_SESSION['view'])) {
								unset($_SESSION['all']);
								unset($_SESSION['delivery']);
								unset($_SESSION['process']);
								unset($_SESSION['done']);
								unset($_SESSION['cancel']);
							}
						}
					}
					include_once 'views/check-out.php';
					break;
				case 'view-detail-order':
					if (isset($_GET['id-order'])) {
						$id_order = $_GET['id-order'];
						$rs_detail = $this->pro->getDetailOrd($id_order);
					}
					include_once 'views/view-detail-order.php';
					break;
				case 'view-order':
					if (isset($_SESSION['id_account']) && !isset($_SESSION['process']) && !isset($_SESSION['delivery']) && !isset($_SESSION['done']) && !isset($_SESSION['cancel']) && !isset($_SESSION['all'])) {
						$id_account = $_SESSION['id_account'];
						$rs = $this->pro->getOrder($id_account);
						$_SESSION['view'] = $rs;
					}
					include_once 'views/view-order.php';
					break;
				case 'view-all':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$rs = $this->pro->getOrder($id_account);
						$_SESSION['view'] = $rs;
						$_SESSION['all'] = 1;
						unset($_SESSION['process']);
						unset($_SESSION['delivery']);
						unset($_SESSION['done']);
						unset($_SESSION['cancel']);
					}
					break;
				case 'view-process':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$rs = $this->pro->getProcessOrder($id_account);
						$_SESSION['view'] = $rs;
						$_SESSION['process'] = 1;
						unset($_SESSION['all']);
						unset($_SESSION['delivery']);
						unset($_SESSION['done']);
						unset($_SESSION['cancel']);
					}
					break;
				case 'view-delivery':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$rs = $this->pro->getDeliOrder($id_account);
						$_SESSION['view'] = $rs;
						$_SESSION['delivery'] = 1;
						unset($_SESSION['all']);
						unset($_SESSION['process']);
						unset($_SESSION['done']);
						unset($_SESSION['cancel']);

					}
					break;
				case 'view-done':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$rs = $this->pro->getDoneOrder($id_account);
						$_SESSION['view'] = $rs;
						$_SESSION['done'] = 1;
						unset($_SESSION['all']);
						unset($_SESSION['process']);
						unset($_SESSION['delivery']);
						unset($_SESSION['cancel']);

					}
					break;
				case 'view-cancel':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$rs = $this->pro->getCancelOrder($id_account);
						$_SESSION['view'] = $rs;
						$_SESSION['cancel'] = 1;
						unset($_SESSION['all']);
						unset($_SESSION['process']);
						unset($_SESSION['delivery']);
						unset($_SESSION['done']);

					}
					break;
				case 'update-account':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$name = $_POST['name'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$addres = $_POST['addres'];
						$this->pro->updateAccount($id_account, $name, $email, $phone, $addres);
					}
					
					break;
				case 'check-pass':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$pass = $_POST['pass'];
						$pass = sha1($_POST['pass']);
						$staticSalt = 'M5T7N1999@#!';
						$password = md5($staticSalt.$pass);
						$rs_pass = $this->pro->getPassword($id_account, $password);
						$count = count($rs_pass);

						if ($count == 1) {
							unset($_SESSION['check_pass']);
						}else{
							$_SESSION['check_pass'] = 1;
						}
					}
					break;
				case 'update-pass':
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$pass = $_POST['pass'];
						$pass = sha1($_POST['pass']);
						$staticSalt = 'M5T7N1999@#!';
						$password = md5($staticSalt.$pass);
						$rs_pass = $this->pro->getPassword($id_account, $password);
						$count = count($rs_pass);

						$pass_new = $_POST['pass_new'];
						$ck_pass_new = $_POST['ck_pass_new'];
						if ($count == 1) {
							if ($pass_new == $ck_pass_new) {
								$pass_new = sha1($_POST['pass_new']);
								$passNew = md5($staticSalt.$pass_new);;
								$this->pro->updatePassword($id_account, $passNew);
							}else{
								$_SESSION['update_passw'] = 1;
							}
						}else{
							$_SESSION['update_passw'] = 1;
						}
					}
					break;
				case 'regex-email':
					$email = $_POST['email'];
					$rs_email = $this->pro->getEmail($email);
					$count = count($rs_email);
					$pattern = '/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/';

					if ($count == 1) {
						$_SESSION['email'] = 1;
					}else if ($email == '') {
						$_SESSION['email'] = 2;
					}else{
						if (preg_match($pattern, $email)) {
					    	unset($_SESSION['email']);
						} else {
						    $_SESSION['email'] = 3;
						}
					}
					
					break;
				case 'regex-phone':
					$phone = $_POST['phone'];
					$rs_phone = $this->pro->getPhone($phone);
					$count = count($rs_phone);
					$pattern = '/((09|03|07|08|05)+([0-9]{8})\b)/';
					if ($count == 1) {
						$_SESSION['phone'] = 1;
					}else if ($phone == '') {
						$_SESSION['phone'] = 2;
					}else{
						if (preg_match($pattern, $phone)) {
					    	unset($_SESSION['phone']);
						} else {
						    $_SESSION['phone'] = 3;
						}
					}
					break;
				case 'del-cart':
					//Xóa sản phẩm khỏi giỏ hàng
					$id = $_POST['id'];
					$size = $_POST['size'];
					if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
						unset($_SESSION['cart'][$id][$size]);
					}
					break;
				case 'update-cart':
					//Cập nhật số lượng giỏ hàng
					$id = $_POST['id'];
					$qty = $_POST['qty'];
					$size = $_POST['size'];
		            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
						$_SESSION['cart'][$id][$size]['qty'] = $qty;
						if ($_SESSION['cart'][$id][$size]['qty'] < 1) {
							unset($_SESSION['cart'][$id][$size]);
						}
					}
					
					break;
				case 'points1':
					$points1 = $_POST['points1'];
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						if (isset($points1) && $points1 > 0) {
							$_SESSION['points'] = $points1;
						}
					}
					break;
				case 'points2':
					$points2 = $_POST['points2'];
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						if (isset($points2) && $points2 == 0) {
							unset($_SESSION['points']);
						}
					}
					break;
				case 'unset-discount':
					$discount = $_POST['discount'];
					if ($discount == '') {
						if (isset($_SESSION['discount'])) {
							unset($_SESSION['discount']);
						}
					}
					break;
				case 'discount':
					date_default_timezone_set('Asia/Saigon');
					$discount = $_POST['discount'];
					$rs_discount = $this->pro->getDiscount();
					$percent = 0;
					$count = count($rs_discount);
					foreach ($rs_discount as $key => $value) {
						if ($discount == $value['code']) {
							$discount = $value['code'];
							$percent = $value['percent'];
							$day_create = $value['day_create'];
							$end_day = $value['end_day'];
							$count = $count - 1;
						}else{
							$count = $count;
						}
					}

					if ($count < count($rs_discount)) {
						if(time() > strtotime($end_day)){
							$_SESSION['discount'] = 2;
							unset($_SESSION['percent']);
						}else{
							$_SESSION['percent'] = $percent;
							if (isset($_SESSION['discount'])) {
								unset($_SESSION['discount']);
							}
						}
					}else if($discount == ''){
						unset($_SESSION['discount']);
						unset($_SESSION['percent']);
					}else{
						$_SESSION['discount'] = 1;
						unset($_SESSION['percent']);
					}

					break;
				case 'cart':
					include_once 'views/cart.php';
					break;
				case 'product-detail':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$product = $this->pro->getId_product($id);
						$rs_prod = $product[0];
						$rs_detail = $this->pro->getImgDetail($id);

						if ($rs_prod == null) {
							header("Location: index.php?page=home");
						}else{
							$_SESSION['views'][$id] = $rs_prod;				
						}
						if (isset($_POST['sm_addCart'])) {
							$size = $_POST['size'];
							$qty = $_POST['qty'];
							if ($qty < 1) {
								$_SESSION['noti-qty'] = 1;
							}else{
								if (!isset($_SESSION['cart']) && empty($_SESSION['cart'])) {
									$_SESSION['cart'][$id][$size] = $rs_prod;
									$_SESSION['cart'][$id][$size]['qty'] = $qty;
									$_SESSION['cart'][$id][$size]['size'] = $size;
								}else{
									if (array_key_exists($id, $_SESSION['cart'])) {
										if (isset($_SESSION['cart'][$id][$size]['size']) && $size == $_SESSION['cart'][$id][$size]['size']) {
											$_SESSION['cart'][$id][$size]['qty'] += $qty;
											$_SESSION['cart'][$id][$size]['size'] = $size;
										}
										else{
											$_SESSION['cart'][$id][$size] = $rs_prod;
											$_SESSION['cart'][$id][$size]['qty'] = $qty;
											$_SESSION['cart'][$id][$size]['size'] = $size;
										}	
									}else{
										$_SESSION['cart'][$id][$size] = $rs_prod;
										$_SESSION['cart'][$id][$size]['qty'] = $qty;
										$_SESSION['cart'][$id][$size]['size'] = $size;
									}
								}
								header("Location: ../../cart");
							}
							
						}
					if (isset($_SESSION['id_account'])) {
						$id_account = $_SESSION['id_account'];
						$rs = $this->pro->getIdRating($id, $id_account);
						
						if (isset($rs[0])) {
							$rs_rt = $rs[0];
						}	
					}
					$rs_rt_prod = $this->pro->getIdRatings($id);
					
					}else{
						header("Location: index.php?page=home");
					}
					include_once 'views/product-detail.php';
					break;
				case 'rating':
					if (isset($_GET['id'])) {
						$id_product = $_GET['id'];
						$rt = $_GET['rt'];
						$_SESSION['id_product'] = $id_product;
						$_SESSION['rt'] = $rt;
					}
					if (isset($_POST['text_rt'])) {
						$text_rt = $_POST['text_rt'];
						$_SESSION['text_rt'] = $text_rt;
					}

					if (isset($_SESSION['id_product']) && isset($_SESSION['rt']) && isset($_SESSION['text_rt'])) {
						$id_product = $_SESSION['id_product'];
						$id_account = $_SESSION['id_account'];
						$text_rt = $_SESSION['text_rt'];
						$rating =  $_SESSION['rt'];
						$rs_rt = $this->pro->getIdRating($id_product, $id_account);
						$count = count($rs_rt);

						if ($count == 1) {
							$this->pro->updateRating($id_product, $id_account, $rating, $text_rt);
							unset($_SESSION['text_rt']);
						}else{
							$this->pro->addRating($id_product, $id_account, $rating, $text_rt);
							unset($_SESSION['text_rt']);
						}
						
					}
					break;
				case 'search-product':
					if (isset($_POST['sb_search'])) {
						$keys = '%'.$_POST['keys'].'%';
						$_SESSION['keys'] = $keys;
						$row = 8; // số tin một trang
						$number = count($this->pro->countSearchPro($keys)); // Tổng số bản ghi
						$pagination = ceil($number/$row);
						
						if (isset($_GET['pages'])) {
							$pages = $_GET['pages'];
						}else{
							$pages = 1;
						}	
						$from = ($pages - 1) * $row;
						$rs_pro = $this->pro->searchPro($keys, $from, $row);
						$count = count($rs_pro);		
					}
					if (isset($_GET['page']) && $_GET['page'] == 'search-product') {
						if (isset($_SESSION['keys'])) {
							$keys = $_SESSION['keys'];
						}else{
							$keys = null;
						}
						$row = 8; // số tin một trang
						$number = count($this->pro->countSearchPro($keys)); // Tổng số bản ghi
						$pagination = ceil($number/$row);
						
						if (isset($_GET['pages'])) {
							$pages = $_GET['pages'];
						}else{
							$pages = 1;
						}	
						$from = ($pages - 1) * $row;
						$rs_pro = $this->pro->searchPro($keys, $from, $row);
						$count = count($rs_pro);
					}
					include_once 'views/search-product.php';
					break;
				case 'adidas':
					$row = 8; // số tin một trang
					$adidas = 'ADIDAS';
					$number = count($this->pro->getNumberCate($adidas)); // Tổng số bản ghi
					$pagination = ceil($number/$row);
					
					if (isset($_GET['pages'])) {
						$pages = $_GET['pages'];
					}else{
						$pages = 1;
					}

                    $from = ($pages - 1) * $row;

                    if (isset($_GET['method'])) {
                        $method = $_GET['method'];
                    }else{
                        $method = 'default';
                    }

                    switch ($method){
                        case 'desc':
                            $rs_pro = $this->pro->getProdSortByDESC($adidas, $from, $row);
                            break;
                        case 'asc':
                            $rs_pro = $this->pro->getProdSortByASC($adidas, $from, $row);
                            break;
                        default:
                            $rs_pro = $this->pro->getProdCate($adidas, $from, $row);
                            break;
                    }

                    $count = count($rs_pro);
					
					include_once 'views/adidas.php';
					break;
				case 'nike':
					$row = 8; // số tin một trang
					$nike = 'NIKE';
					$number = count($this->pro->getNumberCate($nike)); // Tổng số bản ghi
					$pagination = ceil($number/$row);
					
					if (isset($_GET['pages'])) {
						$pages = $_GET['pages'];
					}else{
						$pages = 1;
					}	
					$from = ($pages - 1) * $row;

                    if (isset($_GET['method'])) {
                        $method = $_GET['method'];
                    }else{
                        $method = 'default';
                    }

                    switch ($method){
                        case 'desc':
                            $rs_pro = $this->pro->getProdSortByDESC($nike, $from, $row);
                            break;
                        case 'asc':
                            $rs_pro = $this->pro->getProdSortByASC($nike, $from, $row);
                            break;
                        default:
                            $rs_pro = $this->pro->getProdCate($nike, $from, $row);
                            break;
                    }

					$count = count($rs_pro);
					
					include_once 'views/nike.php';
					break;
				case 'vans':
					$row = 8; // số tin một trang
					$vans = 'VANS';
					$number = count($this->pro->getNumberCate($vans)); // Tổng số bản ghi
					$pagination = ceil($number/$row);
					
					if (isset($_GET['pages'])) {
						$pages = $_GET['pages'];
					}else{
						$pages = 1;
					}	
					$from = ($pages - 1) * $row;

                    if (isset($_GET['method'])) {
                        $method = $_GET['method'];
                    }else{
                        $method = 'default';
                    }

                    switch ($method){
                        case 'desc':
                            $rs_pro = $this->pro->getProdSortByDESC($vans, $from, $row);
                            break;
                        case 'asc':
                            $rs_pro = $this->pro->getProdSortByASC($vans, $from, $row);
                            break;
                        default:
                            $rs_pro = $this->pro->getProdCate($vans, $from, $row);
                            break;
                    }

					$count = count($rs_pro);
					
					include_once 'views/vans.php';
					break;
				default:
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						if (isset($_GET['size'])) {
							$size = $_GET['size'];
						}else{
							$size = null;
						}
						$product = $this->pro->getId_product($id);
						if (!isset($_SESSION['cart']) && empty($_SESSION['cart'])) {
							$_SESSION['cart'][$id][$size] = $product[0];
							$_SESSION['cart'][$id][$size]['qty'] = 1;
							$_SESSION['cart'][$id][$size]['size'] = $size;
						}else{
							if (array_key_exists($id, $_SESSION['cart'])) {
								if ($size == $_SESSION['cart'][$id][$size]['size']) {
									$_SESSION['cart'][$id][$size]['qty'] += 1;
									$_SESSION['cart'][$id][$size]['size'] = $size;
								}
								else{
									$_SESSION['cart'][$id][$size] = $product[0];
									$_SESSION['cart'][$id][$size]['qty'] = 1;
									$_SESSION['cart'][$id][$size]['size'] = $size;
								}	
							}else{
								$_SESSION['cart'][$id][$size] = $product[0];
								$_SESSION['cart'][$id][$size]['qty'] = 1;
								$_SESSION['cart'][$id][$size]['size'] = $size;
							}
						}
					}
					
					$rs_pro_new = $this->pro->getProNew();
					$rs_pro_sale = $this->pro->getProSale();
					include_once 'views/home.php';
					break;
			}
		}
	}
 ?>