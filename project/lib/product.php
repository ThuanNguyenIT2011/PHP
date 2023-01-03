<?php
function get_info_cat($id){
    global $list_product;
    if(array_key_exists($id, $list_product)){
        return $list_product[$id];
    }
    return null;
}

function get_list_product($id){
    global $list_product_cat;
    $list_get = [];
    foreach ($list_product_cat as $ele) {
        if($ele['cat_id'] == $id){
            $ele['url'] = "?mod=product&act=detail&id={$ele['id']}";
            $list_get[] = $ele;
            // print_r($ele);
            
        }
    }
    return $list_get;
}

function get_product($id){
    global $list_product_cat;
    if(array_key_exists($id, $list_product_cat)){
        $list_product_cat[$id]['url_add_cart'] = "?mod=cart&act=add&id={$id}";
        return  $list_product_cat[$id];
    }

    return null;
}
