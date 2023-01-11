<?php

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



