<?php
if(isset($_POST['update_cart'])){
    // show_array($_POST);
    update_cart($_POST['qty']);
}
// echo 'ERROR REDIRECT';
redirect('?mod=cart&act=cart');