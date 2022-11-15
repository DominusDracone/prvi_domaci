<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['slika']) && isset($_POST['ime']) && isset($_POST['prezime']) 
&& isset($_POST['godine']) && isset($_POST['pol']) && isset($_POST['ljstatus']) && isset($_POST['rodjendan'])){
    $prijava = new Prijava(null, $_POST['ime'], $_POST['prezime'], $_POST['godine'], $_POST['pol'], $_POST['ljstatus'], $_POST['rodjendan']);
    $prijavaS = new PrijavaS(null, $_POST['slika']);
    $odg = Prijava::addPrijava($prijava, $conn);
    $odg1 = PrijavaS::addSlika($prijavaS, $conn);
    if($odg && $odg1){
        echo 'Success';
    }else{
        echo $odg;
        echo $odg1;
        echo "Failed";
    }
}

?>