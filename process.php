<?php
if(isset($_GET['name'])){
    $fname = $_GET['name'];
    echo('Thank you, '.$fname.', for your order!');
}else{
    $fname = 'anonymous shopper';
}
$flavors = $_GET['flavor'];
if(empty($flavors)){
    echo("No flavors chosen");
}else{
    $count = count($flavors);
    echo "Order Summary: ";

    for($i=0; i < $count; $i++){
        echo("<li>".$flavors[$i]."</li>");
    }
    echo("<br>");
    $cost = $count * 3.50;
    echo("Order Total: $".$cost);
}



