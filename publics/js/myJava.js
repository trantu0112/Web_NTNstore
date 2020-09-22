$(document).ready(function(){
	
	$(document).on('click',".cart",function(){
		var id = $(this).val();
		var size = getSize(id);
		$.get('index.php?page=home',{id : id, size : size}, function(){
			$("#cart_mini").load("index.php?page=home #load_cart_mini");
			$("#qty").load("index.php?page=home #load_qty");						
		});
	});
	
	$(document).on('click',"#points1",function(){
		var points1 = $('#points1').val();
		$.post('index.php?page=points1',{points1 : points1}, function(){
 			$("#load_point").load("index.php?page=check-out #poin");
		});
	});
	$(document).on('click',"#points2",function(){
		var points2 = $('#points2').val();
		$.post('index.php?page=points2',{points2 : points2}, function(){
 			$("#load_point").load("index.php?page=check-out #poin");
		});
	});

	$('#noti_check_acc').delay(5000).slideUp();
	$('#noti_add_account').delay(5000).slideUp();
	$('#noti_update_pass').delay(5000).slideUp();

	$(document).on('click',"#btn-check-out",function(){
		$('#alert-check-out1').delay(1000).slideUp();
	});

	$(document).on('click',"#info_acc",function(e){
		e.preventDefault();
		$("#view_data").show();
		$("#view_update_pass").hide();
		$("#load_update_account").load("index.php?page=account-information #view_data");
	});

	$(document).on('click',"#update_pass_acc",function(e){
		e.preventDefault();
		$("#view_data").hide();
		$("#view_update_pass").show();
	});

	$(document).on('click',"#sm_update_acc",function(){
		var name = $('#name_update').val();
		var email = $('#email_update').val();
		var phone = $('#phone_update').val();
		var addres = $('#addres_update').val();
		$.post('index.php?page=update-account', {name : name, email : email, phone : phone, addres : addres}, function(){
 			$("#load_update_account").load("index.php?page=account-information #view_data");
 			$("#load_alert_update").load("index.php?page=account-information #noti_update_account");
		});
	});

	$(document).on('click',"#sm_update_pass",function(){
		var pass = $('#pass_check').val();
		var pass_new = $('#pass_update').val();
		var ck_pass_new = $('#check_pass_update').val();
		$.post('index.php?page=update-pass',{pass : pass, pass_new : pass_new, ck_pass_new : ck_pass_new}, function(){
			$("#load_update_pass").load("index.php?page=account-information #view_update_pass");
 			$("#load_alert_update_pass").load("index.php?page=account-information #noti_update_pass");

		});

	});

	$(document).on('click', '#all', function(){
		$.post('index.php?page=view-all', function(){
			$("#load-table-views").load("index.php?page=view-order #table-view");
		});
	});
	$(document).on('click', '#process', function(){
		$.post('index.php?page=view-process', function(){
			$("#load-table-views").load("index.php?page=view-order #table-view");
		});
	});
	$(document).on('click', '#delivery', function(){
		$.post('index.php?page=view-delivery', function(){
			$("#load-table-views").load("index.php?page=view-order #table-view");
		});
	});
	$(document).on('click', '#done', function(){
		$.post('index.php?page=view-done', function(){
			$("#load-table-views").load("index.php?page=view-order #table-view");
		});
	});
	$(document).on('click', '#cancel', function(){
		$.post('index.php?page=view-cancel', function(){
			$("#load-table-views").load("index.php?page=view-order #table-view");
		});
	});

	$(document).on('click',"#reset_pw",function(e){
		e.preventDefault();
		$("#md_reset_pw").modal('show');
	});

	$(document).on('keyup',"#email_reset",function(e){
		var email = $(this).val();
		$.post('index.php?page=check-email', {email :email}, function(){
			$("#load_email_reset").load("index.php?page=reset #ld_email_reset");
			$("#load-btn-get-email").load("index.php?page=reset #btn-next");
		});		
	});

	$(document).on('click',"#btn-next",function(){
		var email = $('#email_reset').val();
		$.post('index.php?page=get-email', {email :email}, function(){
			
		});	
	});

	$(document).on('click',"#sm-reset",function(){
		var pass = $('#pass-reset').val();
		var email = $('#email_reset').val();
		$.post('index.php?page=pass-reset', {pass : pass, email : email}, function(){
			$("#load-noti-rand").load("index.php?page=reset #noti-rand");
			alert('Đặt lại mật khẩu thành công!');
			location.href = 'index.php?page=login';
		});	


	});
})

function update_cart_minus(id, size){
	var qty = parseInt($('#' + id + '_' + size).val());
	qty -= 1;	
	if (qty < 1) {
		var check = confirm("Bạn có muốn xóa sản phẩm này ko?");
		if (check) {
			$.post('index.php?page=update-cart',{id : id, qty : qty, size : size}, function(){
				$("#cart_mini").load("index.php?page=cart #load_cart_mini");
				$("#qty").load("index.php?page=cart #load_qty");
				$("#cart_sh").load("index.php?page=cart #cart_tb");
				$("#load_btn_total").load("index.php?page=cart #btn_total");
				$('#noti_cart_updates').slideDown().show();
				$('#noti_cart_updates').delay(500).slideUp();		
			});
		}else {
			qty = 1;
			$.post('index.php?page=update-cart',{id : id, qty : qty, size : size}, function(){
				$("#cart_mini").load("index.php?page=cart #load_cart_mini");
				$("#qty").load("index.php?page=cart #load_qty");
				$("#cart_sh").load("index.php?page=cart #cart_tb");		
			});
		}
		
	}else{
		$.post('index.php?page=update-cart',{id : id, qty : qty, size : size}, function(){
			$("#cart_mini").load("index.php?page=cart #load_cart_mini");
			$("#qty").load("index.php?page=cart #load_qty");
			$("#cart_sh").load("index.php?page=cart #cart_tb");
			$('#noti_cart_updates').slideDown().show();
			$('#noti_cart_updates').delay(500).slideUp();	
		});
	}
	
	
}

function update_cart_plus(id, size){
	var qty = parseInt($('#' + id + '_' + size).val());
	qty += 1;	
	$.post('index.php?page=update-cart',{id : id, qty : qty, size : size}, function(){	
		$("#cart_mini").load("index.php?page=cart #load_cart_mini");
		$("#qty").load("index.php?page=cart #search_prod");
		$("#qty").load("index.php?page=cart #load_qty");	
		$("#cart_sh").load("index.php?page=cart #cart_tb");
		$('#noti_cart_updates').slideDown().show();
		$('#noti_cart_updates').delay(500).slideUp();
	});
}
function getSize(id){
	var size = $('#size_' + id).val();
	switch (size) {
		case '37':
			return size = 37;
			break;
		case '38':
			return size = 38;
			break;
		case '39':
			return size = 39;
			break;
		case '40':
			return size = 40;
			break;
		case '41':
			return size = 41;
			break;
		case '42':
			return size = 42;
			break;
		case '43':
			return size = 43;
			break;
	}
}
function delCart(id, size){
	var id = $('#del_' + id + '_' + size).val();
	var check = confirm("Bạn có muốn xóa sản phẩm này ko?");
	if(check){
		$.post('index.php?page=del-cart',{id : id, size : size}, function(){
			$("#cart_mini").load("index.php?page=cart #load_cart_mini");
			$("#qty").load("index.php?page=cart #load_qty");
			$("#cart_sh").load("index.php?page=cart #cart_tb");
			$("#load_btn_total").load("index.php?page=cart #btn_total");
			$('#noti_cart_updates').slideDown().show();
			$('#noti_cart_updates').delay(500).slideUp();

		});
	}
}

//Hover star!
function mouseOver1() {
  document.getElementById("clr_1").style.color = "#2ac37d";
}
function mouseOver2() {
  document.getElementById("clr_1").style.color = "#2ac37d";
  document.getElementById("clr_2").style.color = "#2ac37d";
}
function mouseOver3() {
  document.getElementById("clr_1").style.color = "#2ac37d";
  document.getElementById("clr_2").style.color = "#2ac37d";
  document.getElementById("clr_3").style.color = "#2ac37d";
}
function mouseOver4() {
  document.getElementById("clr_1").style.color = "#2ac37d";
  document.getElementById("clr_2").style.color = "#2ac37d";
  document.getElementById("clr_3").style.color = "#2ac37d";
  document.getElementById("clr_4").style.color = "#2ac37d";
}
function mouseOver5() {
  document.getElementById("clr_1").style.color = "#2ac37d";
  document.getElementById("clr_2").style.color = "#2ac37d";
  document.getElementById("clr_3").style.color = "#2ac37d";
  document.getElementById("clr_4").style.color = "#2ac37d";
  document.getElementById("clr_5").style.color = "#2ac37d";
}
function mouseOut() {
  document.getElementById("clr_1").style.color = "#000";
  document.getElementById("clr_2").style.color = "#000";
  document.getElementById("clr_3").style.color = "#000";
  document.getElementById("clr_4").style.color = "#000";
  document.getElementById("clr_5").style.color = "#000";
}
function mouseOut1() {
  document.getElementById("clr_2").style.color = "#000";
  document.getElementById("clr_3").style.color = "#000";
  document.getElementById("clr_4").style.color = "#000";
  document.getElementById("clr_5").style.color = "#000";
}
function mouseOut2() {
  document.getElementById("clr_3").style.color = "#000";
  document.getElementById("clr_4").style.color = "#000";
  document.getElementById("clr_5").style.color = "#000";
}
function mouseOut3() {
  document.getElementById("clr_4").style.color = "#000";
  document.getElementById("clr_5").style.color = "#000";
}
function mouseOut4() {
  document.getElementById("clr_5").style.color = "#000";
}
//Lấy rating
function getRating1(id){
	var rt = $('#1_' + id).val();
	$.get('index.php?page=rating',{id : id, rt : rt}, function(){
		
	});	
}
function getRating2(id){
	var rt = $('#2_' + id).val();
	$.get('index.php?page=rating',{id : id, rt : rt}, function(){
		
	});	
}
function getRating3(id){
	var rt = $('#3_' + id).val();
	$.get('index.php?page=rating',{id : id, rt : rt}, function(){
		
	});	
}
function getRating4(id){
	var rt = $('#4_' + id).val();
	$.get('index.php?page=rating',{id : id, rt : rt}, function(){
		
	});	
}
function getRating5(id){
	var rt = $('#5_' + id).val();
	$.get('index.php?page=rating',{id : id, rt : rt}, function(){
		
	});	
}


function addRating(id){
	var text_rt = $('#text_rating_' + id).val();
	if (text_rt == '') {
		$('#dialog2').modal('hide');
		$('#alert_tb_rt_null').slideDown().show();
		$('#alert_tb_rt_null').delay(1500).slideUp();	
	}else{
		$.post('index.php?page=rating',{text_rt : text_rt}, function(){
			$("#load_body_modal_rt").load("index.php?page=product-detail&id=" + id + " #form_rt");
			$("#load_btn_rating").load("index.php?page=product-detail&id=" + id + " #btn_ratings");
			$("#load_cmt").load("index.php?page=product-detail&id=" + id + " #tab_02");	
			$('#dialog2').modal('hide');
			$('#alert_tb_rt').slideDown().show();
			$('#alert_tb_rt').delay(1500).slideUp();
		});
	}	
}


function discount(){
	var discount = $('#discount').val();
	$.post('index.php?page=discount',{discount : discount}, function(){
		$("#cart_sh").load("index.php?page=cart #cart_tb");
		$("#load_noti_discount").load("index.php?page=cart #alert_disc");
	});

}
function unsetSSdiscount(){
	var discount = $('#discount').val();
	$.post('index.php?page=unset-discount',{discount : discount}, function(){
		$("#load_noti_discount").load("index.php?page=cart #alert_disc");
	});
}

function checkName_ckout(){
	var name = $('#name_checkout').val();
	var error_name = $('#error_name');
	var reGexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

	if (name == "" || name == null) {
		error_name.html("Họ tên không được để trống!");
	}else if(!reGexName.test(name)){
		error_name.html("Họ tên không hợp lệ!");
	}else{
		error_name.html("");
		return name;
	}
}
function checkAddres_ckout(){
	var addres = $('#addres_checkout').val();
	var error_addres = $('#error_addres');

	if (addres == "" || addres == null) {
		error_addres.html("Địa chỉ không được để trống!");
	}else{
		error_addres.html("");
		return addres;
	}
}

function checkEmail_ckout(){
	var email = $('#email_checkout').val();
	$.post('index.php?page=regex-email',{email : email}, function(){
		$("#load_email").load("index.php?page=check-out #email_erck");
	});

}
function checkPhone_ckout(){
	var phone = $('#phone_checkout').val();
	$.post('index.php?page=regex-phone',{phone : phone}, function(){
		$("#load_phone").load("index.php?page=check-out #phone_erck");
	});
}


function checkName_acc(){
	var name = $('#name_acc').val();
	var error_name = $('#error_name_acc');
	var reGexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

	if (name == "" || name == null) {
		error_name.html("Họ tên không được để trống!");
	}else if(!reGexName.test(name)){
		error_name.html("Họ tên không hợp lệ!");
	}else{
		error_name.html("");
		return name;
	}
}

function checkPass_acc(){
	var pass = $('#pass_acc').val();
	var error_pass = $('#error_pass_acc');
	if (pass == '' || pass == null) {
		error_pass.html("Mật khẩu không để trống");
	}else{
		error_pass.html("");
		return pass;
	}
}

function check_conPass(){
	var pass = checkPass_acc();

	var con_pass = $('#check_pass_acc').val();
	var error_conpass = $('#error_checkpass_acc');
	if (con_pass == '' || con_pass == null) {

		error_conpass.html("Mật khẩu không để trống");

	}else if(con_pass != pass){
		error_conpass.html("Mật khẩu không trùng khớp!");
	}else{
		error_conpass.html("");
		return con_pass;
	}
}
	
function checkEmail_acc(){
	var email = $('#email_acc').val();
	$.post('index.php?page=regex-email',{email : email}, function(){
		$("#load_email_acc").load("index.php?page=register #email_eracc");
	});
}

function checkPass(){
	var pass = $('#pass_check').val();
	$.post('index.php?page=check-pass',{pass : pass}, function(){
		$("#load_check_passw").load("index.php?page=account-information #passw_err");
	});
	
}

function checkPassUpdate(){
	var pass = $('#pass_update').val();
	var error_pass = $('#error_pass_update');
	if (pass == '' || pass == null) {
		error_pass.html("Mật khẩu không để trống");
	}else{
		error_pass.html("");
		return pass;
	}
}

function checkConPass(){
	var pass = checkPassUpdate();

	var con_pass = $('#check_pass_update').val();
	var error_conpass = $('#error_checkpass_update');
	if (con_pass == '' || con_pass == null) {

		error_conpass.html("Mật khẩu không để trống");

	}else if(con_pass != pass){
		error_conpass.html("Mật khẩu không trùng khớp!");
	}else{
		error_conpass.html("");
		return con_pass;
	}
}





