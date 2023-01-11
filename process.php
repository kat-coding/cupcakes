<?php
if(!empty($_GET['name'])){
    $fname = $_GET['name'];
    echo('Thank you, '.$fname.', for your order!');
    echo("<br>");
}else{
    echo('Error: No name was provided for this order.');
    echo('<br>');
}
$flavors = $_GET['flavor'];

if(empty($flavors)){
    echo("No flavors chosen");
}else{
    $count = count($flavors);
    echo "Order Summary: ";

    foreach($flavors as $flavors=>$value){
        echo("<li>".$value."</li>");
    }
    echo("<br>");
    $cost = $count * 3.50;
    echo("Order Total: $".number_format($cost, 2));
}



