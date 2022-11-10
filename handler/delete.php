<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['ljubavnikId'])){
    $obj = new Prijava($_POST['ljubavnikId']);
    $ljstatus = $obj->deleteByIdPrijava($conn);
    if ($ljstatus){
        echo "Success";
    }else{
        echo "Failed";
    }
}

?>