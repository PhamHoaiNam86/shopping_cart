<?php
function add_cart($id)
{
    global $list_product;
    $item = get_product_by_id($id);
    // thêm thông tin vào giỏ hàng
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'url' => $item['url'],
        'product_title' =>  $item['product_title'],
        'product_thumb' => $item['product_thumb'],
        'price' => $item['price'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty
    );
    update_info_cart();
}
// câpj nhật hoá đơn
function update_info_cart()
{
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $list) {
            $num_order += $list['qty'];
            $total += $list['sub_total'];
        }
        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total
        );
        show_data($_SESSION['cart']);
    }
}
function get_list_buy_cart()
{
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}";
        }
        return $_SESSION['cart']['buy'];
    } else {
        return false;
    }
}
function get_num_order_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    } else {
        return false;
    }
}
function get_total_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    } else {
        return false;
    }
}
function delete_cart($id)
{
    if (isset($_SESSION['cart'])) {
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        } else {
            unset($_SESSION['cart']);
        }
    }
}
function update_cart($qty)
{
    foreach ($qty as $id => $new_qty) {
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
    }
    update_info_cart();
}
