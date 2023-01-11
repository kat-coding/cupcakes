<?php
if(isset($_GET['name'])){
    $fname = $_GET['name'];
}else{
    $fname = 'anonymous shopper';
}
$flavors = $_GET['flavor'];
if(empty($flavors)){
    echo("No flavors chosen");
}else{
    $count = count($flavors);
    echo "Your flavor choices: ";

    for($i=0; i < $count; $i++){
        echo($flavors[$i]. ", ");
    }
}



