<?php

if( !isset($_GET['flavor'])){

}else{
    $flavors = $_GET['flavor'];
}
echo "Your flavor choices: ";
foreach ($flavors as $flavor) echo $flavor."<br />";

