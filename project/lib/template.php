<?php
function get_header(){
    $path = 'inc/header.php';
    if(file_exists($path)){
        require $path;
    }
    else{
        echo "Not exist path {$path}";
    }
}

function get_footer(){
    $path = 'inc/footer.php';
    if(file_exists($path)){
        require $path;
    }
    else{
        echo "Not exist path {$path}";
    }
}
