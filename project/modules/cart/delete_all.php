<?php 
$id = (int)$_GET['id'];
delete_cat($id);

redirect('?mod=cart&act=cart');
?>