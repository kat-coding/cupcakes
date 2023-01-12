<?php
//Katherine Watkins and Alex Brenna
//01/11/2023
//https://github.com/kat-coding/cupcakes.git
//https://katherine-watkins.greenriverdev.com/328/cupcakes/index.php
/*
 * This is a simple php page that checks if required information was sent from
 * index.php form. If not it will display appropriate error messages. If
 * form was sent correctly it will display the order.
 */
$flavors = $_GET['flavor'];
if(!empty($_GET['name']) && !empty($flavors)){
    $fname = $_GET['name'];
    echo('Thank you, '.$fname.', for your order!');
    echo("<br>");
    $count = count($flavors);
    echo "Order Summary: ";

    foreach($flavors as $flavors=>$value){
        echo("<li>".$value."</li>");
    }
    echo("<br>");
    $cost = $count * 3.50;
    echo("Order Total: $".number_format($cost, 2));
}else{
    if(empty($_GET['name'])){
        echo('Error: No name was provided for this order.');
        echo('<br>');
    }
    if(empty($flavors)){
        $flavorError = "No flavors chosen, please resubmit form with desired flavors.";
        echo $flavorError;
    }
}








