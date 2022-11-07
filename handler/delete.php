<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['id'])){
    $obj = new Prijava($_POST['id']);
    $ljstatus = $obj->deleteById($conn);
    if ($ljstatus){
        echo "Success";
    }else{
        echo "Failed";
    }
}

?>