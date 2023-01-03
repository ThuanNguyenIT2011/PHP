<?php
function update_info_cat()
{
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['by'] as $item) {
        $total += $item['sub_total'];
        $num_order += $item['qty'];
    }
    $_SESSION['cart']['info'] = [
        'num_order' => $num_order,
        'total' => $total,
    ];
}

function add_cart($id)
{
    $item = get_product($id);
    $qty = 1;

    if (isset($_SESSION['cart']['by']) && array_key_exists($id, $_SESSION['cart']['by'])) {
        $qty = $_SESSION['cart']['by'][$id]['qty'] + 1;
    }

    $_SESSION['cart']['by'][$id] = [
        'id' => $item['id'],
        'url' => "?mod=product&act=detail&id={$id}",
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty,
    ];

    update_info_cat();
}

function get_list_buy_cart(){
    if(!empty($_SESSION['cart'])){
        foreach ($_SESSION['cart']['by'] as &$value) {
            $value['url_delete_cart'] = "?mod=cart&act=delete_item&id={$value['id']}";
        }
        return $_SESSION['cart']['by'];
    }
    return false;
}

function get_number_cart(){
    if(isset($_SESSION['cart']['info'])){
        return $_SESSION['cart']['info']['num_order'];
    }
    return 0;
}

function get_total_money(){
    if(isset($_SESSION['cart']['info'])){
        return $_SESSION['cart']['info']['total'];
    }
    return 0;
}

function delete_cat($id){
    if(isset($_SESSION['cart']['by'])){
        if(!empty($id)){
            unset($_SESSION['cart']['by'][$id]);
        } else{
            unset($_SESSION['cart']);
        }
        update_info_cat();
    }
}

function update_cart($qty){
    foreach ($qty as $id => $value) {
        $_SESSION['cart']['by'][$id]['qty'] = $value;//sub_total
        $_SESSION['cart']['by'][$id]['sub_total'] = $_SESSION['cart']['by'][$id]['price'] * $value;
    }
    update_info_cat();
}
