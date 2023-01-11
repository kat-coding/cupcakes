<?php

if( !isset($_GET['flavor'])){

}else{
    $flavors = $_GET['flavor'];
}

foreach ($flavors as $flavor){
    echo $flavor."<br />";
}

