$(document).ready(function(){
    $(function () {
        'use strict';
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#timeCheckIn').datepicker({
            onRender: function (date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#timeCheckOut')[0].focus();
        }).data('datepicker');
        var checkout = $('#timeCheckOut').datepicker({
            onRender: function (date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function (ev) {
            checkout.hide();
        }).data('datepicker');
    });

    $('.alert').delay(2000).slideUp();
})
/////////// REGEX ////////////

// Họ tên
function checkName(){
    var name = document.getElementById('txt_name').value;
    var error_name = document.getElementById('error_name');
    var reGexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

    if (name == "" || name == null) {
        error_name.innerHTML = "Tên không được để trống!";
    }else if(!reGexName.test(name)){
        error_name.innerHTML = "Tên không hợp lệ!";
    }else{
        error_name.innerHTML = "";
        return name;
    }
}
// Tên đăng nhập
function checkUser(){
    var user = document.getElementById('txt_user').value;
    var error_user = document.getElementById('error_user');
    if (user == "" || user == null) {
        error_user.innerHTML = "Tên đăng nhập không được để trống!";
    }else{
        error_user.innerHTML = "";
        return user;
    }
}
// SĐT
function checkPhone(){
    var phone = document.getElementById('txt_phone').value;
    var error_phone = document.getElementById('error_phone');
    var reGexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    if (phone == "" || phone == null) {
        error_phone.innerHTML = "SĐT không được để trống!";
    }else if(!reGexPhone.test(phone)){
        error_phone.innerHTML = "SĐT không hợp lệ!";
    }else{
        error_phone.innerHTML = "";
        return phone;
    }
}
// email
function checkMail(){
    var email = document.getElementById('txt_email').value;
    var error_email = document.getElementById('error_email');
    var regexEmail = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;

    if (email == '' || email == null) {
        error_email.innerHTML = 'Email không được để trống!';
    }else if(!regexEmail.test(email)){
        error_email.innerHTML = 'Email không hợp lệ!';
    }else{
        error_email.innerHTML = '';
        return email;
    }
}
// Pass
function checkPass(){
    var pass = document.getElementById('txt_pass').value;
    var error_pass = document.getElementById('error_pass');
    if (pass == '' || pass == null) {
        error_pass.innerHTML = "Mật khẩu không để trống";
    }else{
        error_pass.innerHTML = '';
        return pass;
    }
}
// conPass
function check_conPass(){
    var pass = checkPass();
    var con_pass = document.getElementById('txt_conpass').value;
    var error_conpass = document.getElementById('error_conpass');
    if (con_pass == '' || con_pass == null) {
        error_conpass.innerHTML = "Mật khẩu không để trống";
    }else if(con_pass != pass){
        alert('Mật khẩu xác nhận không trùng khớp!');
    }else{
        error_conpass.innerHTML = '';
        return con_pass;
    }
}
// Point
function checkPoint(){
    var point = document.getElementById('txt_point').value;
    var error_point = document.getElementById('error_point');
    var reGexPoint = /^\d+$/;

    if (point == "" || point == null) {
        error_point.innerHTML = "Điểm không được để trống!";
    }else if(!reGexPoint.test(point)){
        error_point.innerHTML = "Điểm không hợp lệ!";
    }else{
        error_point.innerHTML = "";
        return point;
    }
}
// Địa chỉ
function checkAddress(){
    var address = document.getElementById('txt_address').value;
    var error_address = document.getElementById('error_address');
    var reGexAddress = /^[^\d+]*[\d+]{0}[^\d+][0-9]*$/;

    if (address == "" || address == null) {
        error_address.innerHTML = "Địa chỉ không được để trống!";
    }else if(!reGexAddress.test(address)){
        error_address.innerHTML = "Địa chỉ không hợp lệ!";
    }else{
        error_address.innerHTML = "";
        return address;
    }
}

function validitionAddAcc(){
    if (checkName() && checkUser() && checkPass() && check_conPass()) {
        return true;
    }else{
        alert('Vui lòng nhập đầy đủ thông tin !');
        return false;
    }
}
function validitionEditAcc(){
    if (checkName() && checkUser() && checkPhone() && checkMail() && checkPoint() && checkAddress() ) {
        return true;
    }else{
        alert('Vui lòng nhập đầy đủ thông tin !');
        return false;
    }
}

// Tên sản phẩm
function checkNamePro(){
    var namepro = document.getElementById('txt_namePro').value;
    var error_namePro = document.getElementById('error_namePro');
    if (namepro == "" || namepro == null) {
        error_namePro.innerHTML = "Tên sản phẩm không được để trống!";
    }else{
        error_namePro.innerHTML = "";
        return namepro;
    }
}
// Số lượng tồn
function checkQtyPro(){
    var qty = document.getElementById('txt_qty').value;
    var error_qty = document.getElementById('error_qty');
    var reGexQty = /^[0-9]{1,4}$/;

    if (qty == "" || qty == null) {
        error_qty.innerHTML = "Số lượng tồn không được để trống!";
    }else if(!reGexQty.test(qty)){
        error_qty.innerHTML = "Số lượng tồn không hợp lệ!";
    }else{
        error_qty.innerHTML = "";
        return qty;
    }
}
// Giá
function checkPricePro(){
    var price = document.getElementById('txt_price').value;
    var error_price = document.getElementById('error_price');
    var reGexPrice = /^[0-9]{6,8}$/;

    if (price == "" || price == null) {
        error_price.innerHTML = "Giá không được để trống!";
    }else if(!reGexPrice.test(price)){
        error_price.innerHTML = "Giá không hợp lệ!";
    }else{
        error_price.innerHTML = "";
        return price;
    }
}
// Giảm giá
function checkPercentPro(){
    var percent = document.getElementById('txt_percent').value;
    var error_percent = document.getElementById('error_percent');
    var reGexPercent= /^[0-9]$|^[1-9][0-9]$|^(100)$/;

    if (percent == "" || percent == null) {
        error_percent.innerHTML = "Không được để trống!";
    }else if(!reGexPercent.test(percent)){
        error_percent.innerHTML = "Không hợp lệ!";
    }else{
        error_percent.innerHTML = "";
        return percent;
    }
}
// Mô tả
function checkDesPro(){
    var despro = document.getElementById('txt_des').value;
    var error_desPro = document.getElementById('error_des');
    if (despro == "" || despro == null) {
        error_desPro.innerHTML = "Mô tả sản phẩm không được để trống!";
    }else{
        error_desPro.innerHTML = "";
        return despro;
    }
}
function validitionAddPro(){
    if (checkNamePro() && checkQtyPro() && checkPricePro() && checkDesPro() && checkPercentPro()) {
        return true;
    }else{
        alert('Vui lòng nhập đầy đủ thông tin !');
        return false;
    }
}
function validitionEditPro(){
    if (checkNamePro() && checkQtyPro() && checkPricePro() && checkDesPro() && checkPercentPro()) {
        return true;
    }else{
        alert('Vui lòng nhập đầy đủ thông tin !');
        return false;
    }
}

// Mã giảm giá
function checkCode(){
    var code = document.getElementById('txt_code').value;
    var error_code = document.getElementById('error_code');
    var reGexCode = /^[A-Z0-9]{5,30}$/;

    if (code == "" || code == null) {
        error_code.innerHTML = "Mã giảm giá không được để trống!";
    }else if(!reGexCode.test(code)){
        error_code.innerHTML = "Mã giảm giá không hợp lệ!";
    }else{
        error_code.innerHTML = "";
        return code;
    }
}
// Giảm giá
function checkPercent(){
    var percent = document.getElementById('txt_percent').value;
    var error_percent = document.getElementById('error_percent');
    var reGexPercent= /^[0-9]$|^[1-9][0-9]$|^(100)$/;

    if (percent == "" || percent == null) {
        error_percent.innerHTML = "Không được để trống!";
    }else if(!reGexPercent.test(percent)){
        error_percent.innerHTML = "Không hợp lệ!";
    }else{
        error_percent.innerHTML = "";
        return percent;
    }
}
function validitionCode(){
    if (checkCode() && checkPercent()) {
        return true;
    }else{
        alert('Vui lòng nhập đầy đủ thông tin !');
        return false;
    }
}

// Tên bài viết
function checkNameBlog(){
    var nameblog = document.getElementById('txt_nameblog').value;
    var error_nameBlog = document.getElementById('error_nameblog');
    if (nameblog == "" || nameblog == null) {
        error_nameBlog.innerHTML = "Mô tả sản phẩm không được để trống!";
    }else{
        error_nameBlog.innerHTML = "";
        return nameblog;
    }
}
// Mô tả
function checkDesBlog(){
    var desblog = document.getElementById('txt_desblog').value;
    var error_desBlog = document.getElementById('error_desblog');
    if (desblog == "" || desblog == null) {
        error_desBlog.innerHTML = "Mô tả sản phẩm không được để trống!";
    }else{
        error_desBlog.innerHTML = "";
        return desblog;
    }
}
// Mô tả
function checkContentBlog(){
    var contentblog = document.getElementById('txt_contentblog').value;
    var error_contentBlog = document.getElementById('error_contentblog');
    if (contentblog == "" || contentblog == null) {
        error_contentBlog.innerHTML = "Mô tả sản phẩm không được để trống!";
    }else{
        error_contentBlog.innerHTML = "";
        return contentblog;
    }
}
function validitionBlog(){
    if (checkNameBlog() && checkDesBlog() && checkContentBlog()) {
        return true;
    }else{
        alert('Vui lòng nhập đầy đủ thông tin !');
        return false;
    }
}