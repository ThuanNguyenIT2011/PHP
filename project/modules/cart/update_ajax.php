<?php
$id = $_POST['id'];
$quality = $_POST['quality'];

$item = get_product($id);

if(isset($_SESSION['cart']['by']) && array_key_exists($id, $_SESSION['cart']['by'])){
    $_SESSION['cart']['by'][$id]['qty'] = $quality;
    $sub_total = $quality * $item['price'];
    $_SESSION['cart']['by'][$id]['sub_total'] = $sub_total;
    
    //update cart
    update_info_cat();

    $total = get_total_money();

    $data = [
        'sub_total' => currency_format($sub_total),
        'total' => currency_format($total),
    ];
    echo json_encode($data);
} else{
    echo json_encode($id);
}

// echo $id.'|'.$quality;
