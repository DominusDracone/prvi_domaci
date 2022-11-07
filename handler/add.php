<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['ime']) && isset($_POST['prezime']) 
&& isset($_POST['godine']) && isset($_POST['pol']) && isset($_POST['ljstatus']) && isset($_POST['rodjendan'])){
    $prijava = new Prijava(null, $_POST['ime'], $_POST['prezime'], $_POST['godine'], $_POST['pol'], $_POST['ljstatus'], $_POST['rodjendan']);
    $odg = Prijava::addPrijava($prijava, $conn);

    if($odg){
        echo 'Success';
    }else{
        echo $odg;
        echo "Failed";
    }
}

?>