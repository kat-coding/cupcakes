<?php

if( !isset($_GET['flavor'])){
    $flavors = "none chosen";
}else{
    $flavors = $_GET['flavor'];
}
echo "Your flavor choices: ";
echo $flavors;
foreach ($flavors as $flavor) echo $flavor."<br />";

