<?php
function get_info_cat($cat_id){
    global $list_product_cat;
    if(array_key_exists($cat_id,$list_product_cat)){
        return $list_product_cat[$cat_id];
    }else{
        return false;
    }
}

function get_product_by_cat_id($cat_id){
    global $list_product;
    $resurl = array();
    foreach($list_product as $item){
        if($item['cat_id'] == $cat_id){
            $item['url'] ="?mod=product&act=detail&id={$item['id']}";
            $resurl[] = $item;
        }
    }return $resurl;
}

function get_product_by_id($id){
    global $list_product;
    if(array_key_exists($id,$list_product)){
        $list_product[$id]['url_add_cart'] = "?mod=cart&act=add&id={$id}";
        $list_product[$id]['url'] = "?mod=product&act=detail&id={$id}";
        return $list_product[$id];
    }else{
        return false;
    }
}
?>