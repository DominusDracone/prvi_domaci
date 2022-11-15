<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['id'])){
    $obj = new Prijava($_POST['id']);
    $objS = new PrijavaS($_POST['id']);
    $ljstatus1 = $objS->deleteByIdSlike($conn);
    $ljstatus = $obj->deleteByIdPrijava($conn);
    if ($ljstatus && $ljstatus1){
        echo "Success";
    }else{
        echo "Failed";
    }
}

?>