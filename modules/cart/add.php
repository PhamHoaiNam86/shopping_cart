<?php
// lấy dược  thông tin sản phẩm được thêm vào giỏ hàng
$id = (int)$_GET['id'];
add_cart($id);

redirect('?mod=cart&act=show');
?>
