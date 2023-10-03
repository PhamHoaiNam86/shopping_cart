<?php
$id = $_POST['id'];
$qty = $_POST['qty'];
// lấy thông tin sản phẩm
$item = get_product_by_id($id);
if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
    // cập nhật số lượng
    $_SESSION['cart']['buy'][$id]['qty'] = $qty;
    // cập nhật tổng tiền
    $sub_total = $qty * $item['price'];
    $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;
    // cập nhật toàn bộ giỏ hàng 
    update_info_cart();
    //lấy tổng giá trị giỏ hàng
    $total = get_total_cart();
    // giá trị trả về
    $data = array(
        'sub_total' => currency_format($sub_total),
        'total' => currency_format($total),
    );
    echo json_encode($data);
}
