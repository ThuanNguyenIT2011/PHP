<?php
    session_start();
    ob_start();
    #DATA
    require './data/pages.php';
    require './data/products.php';

    # LIBRARY FUNCTION
    require './lib/show_data.php';
    // require './inc/header.php';
    require './lib/print_info.php';
    require './lib/template.php';
    require './lib/pages.php';
    require './lib/product.php';
    require './lib/number.php';
    // get_header();
    require './lib/cart.php';

    require './lib/ur.php';
?>

<?php
    // error_reporting(0);
    // require './pages/home.php';
    // unset($_SESSION['cart']);
    // die();
    $mod = !(empty($_GET['mod'])) ? $_GET['mod'] : 'home';
    $act = !(empty($_GET['act'])) ? $_GET['act'] : 'home';
    // $path = 'pages/'.$page.'.php';
    if($act == 'home' && !isset($_GET['id'])){
        $_GET['id'] = 1;
    }

    $path = "modules/{$mod}/{$act}.php";
    // echo $path;
    // die();
    // echo $path;
    if(file_exists($path)){
        require($path);
    }else{
        require './modules/error/error_path.php';
    }
?>

<?php 
    // require './inc/footer.php';
    // get_footer();
?>