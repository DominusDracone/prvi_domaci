<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['ime']) && isset($_POST['prezime']) 
&& isset($_POST['godine']) && isset($_POST['pol']) && isset($_POST['status']) && isset($_POST['rodjendan'])){
    $prijava = new Prijava(null,$_POST['ime'],$_POST['prezime'],$_POST['godine'],$_POST['pol'], $_POST['status'], $_POST['rodjendan'] );
    $status = Prijava::add($prijava, $conn);

    if($status){
        echo 'Success';
    }else{
        echo $status;
        echo "Failed";
    }
}


?>