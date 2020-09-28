<!-- Noti Product -->
<?php if (isset($_SESSION['noti-pro']) && $_SESSION['noti-pro'] == 1) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Thêm mới sản phẩm thành công.
</div>
<?php
unset($_SESSION['noti-pro']);
}else if (isset($_SESSION['noti-pro']) && $_SESSION['noti-pro'] == 2) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Cập nhật sản phẩm thành công.
</div>
<?php
unset($_SESSION['noti-pro']);
}else if (isset($_SESSION['noti-pro']) && $_SESSION['noti-pro'] == 3) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Xóa sản phẩm thành công.
</div>
<?php
unset($_SESSION['noti-pro']);} ?>
<!-- end -->
<!-- Noti Account -->
<?php if (isset($_SESSION['noti-acc']) && $_SESSION['noti-acc'] == 1) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Thêm mới tài khoản thành công.
</div>
<?php
unset($_SESSION['noti-acc']);
}else if (isset($_SESSION['noti-acc']) && $_SESSION['noti-acc'] == 3) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Cập nhật tài khoản thành công.
</div>
<?php
unset($_SESSION['noti-acc']);
}else if (isset($_SESSION['noti-acc']) && $_SESSION['noti-acc'] == 2) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Xóa tài khoản công.
</div>
<?php
unset($_SESSION['noti-acc']);} ?>
<!-- end -->
<!-- Noti img-detail -->
<?php if (isset($_SESSION['noti-img']) && $_SESSION['noti-img'] == 1) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Thêm mới ảnh chi tiết thành công.
</div>
<?php
unset($_SESSION['noti-img']);
}else if (isset($_SESSION['noti-img']) && $_SESSION['noti-img'] == 3) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Cập nhật ảnh chi tiết thành công.
</div>
<?php
unset($_SESSION['noti-img']);
}else if (isset($_SESSION['noti-img']) && $_SESSION['noti-img'] == 2) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Xóa ảnh chi tiết công.
</div>
<?php
unset($_SESSION['noti-img']);} ?>
<!-- end -->
<!-- Noti Order -->
<?php if (isset($_SESSION['noti-order']) && $_SESSION['noti-order'] == 1) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Đơn hàng đã bị hủy.
</div>
<?php
unset($_SESSION['noti-order']);
}else if (isset($_SESSION['noti-order']) && $_SESSION['noti-order'] == 2) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Đơn hàng đã chuyển trạng thái sang: Đang giao.
</div>
<?php
unset($_SESSION['noti-order']);
}else if (isset($_SESSION['noti-order']) && $_SESSION['noti-order'] == 3) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Đơn hàng đã hoàn thành.
</div>
<?php
unset($_SESSION['noti-order']);
}else if (isset($_SESSION['noti-order']) && $_SESSION['noti-order'] == 4) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Đơn hàng đã được xóa.
</div>
<?php
unset($_SESSION['noti-order']);} ?>
<!-- end -->
<!-- Noti Discount -->
<?php if (isset($_SESSION['noti-discount']) && $_SESSION['noti-discount'] == 1) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Thêm mã giảm giá thành công.
</div>
<?php
unset($_SESSION['noti-discount']);
}else if (isset($_SESSION['noti-discount']) && $_SESSION['noti-discount'] == 2) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Cập nhật mã giảm giá thành công.
</div>
<?php
unset($_SESSION['noti-discount']);
}else if (isset($_SESSION['noti-discount']) && $_SESSION['noti-discount'] == 3) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Xóa mã giảm giá thành công.
</div>
<?php
unset($_SESSION['noti-discount']);} ?>
<!-- end -->
<!-- Noti Blog -->
<?php if (isset($_SESSION['noti-blog']) && $_SESSION['noti-blog'] == 1) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Thêm bài viết thành công.
</div>
<?php
unset($_SESSION['noti-blog']);
}else if (isset($_SESSION['noti-blog']) && $_SESSION['noti-blog'] == 2) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Cập nhật bài viết thành công.
</div>
<?php
unset($_SESSION['noti-blog']);
}else if (isset($_SESSION['noti-blog']) && $_SESSION['noti-blog'] == 3) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Xóa bài viết thành công.
</div>
<?php
unset($_SESSION['noti-blog']);} ?>
<!-- end -->
<!-- Noti Category -->
<?php if (isset($_SESSION['noti-cate']) && $_SESSION['noti-cate'] == 1) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Thêm danh mục thành công.
</div>
<?php
unset($_SESSION['noti-cate']);
}else if (isset($_SESSION['noti-cate']) && $_SESSION['noti-cate'] == 2) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Cập nhật danh mục thành công.
</div>
<?php
unset($_SESSION['noti-cate']);
}else if (isset($_SESSION['noti-cate']) && $_SESSION['noti-cate'] == 3) {
?>
<div class="alert alert-secondary" role="alert">
    <strong>Thông báo!</strong> Xóa danh mục thành công.
</div>
<?php
unset($_SESSION['noti-cate']);} ?>