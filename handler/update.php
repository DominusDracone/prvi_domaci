<?php

    require "../dbBroker.php";
    require "../model/prijava.php";

    if(isset($_POST['sliakIzmena']) && isset($_POST['imeIzmena']) && isset($_POST['prezimeIzmena']) 
    && isset($_POST['godineIzmena']) && isset($_POST['polIzmena']) && isset($_POST['ljstatusIzmena']) && isset($_POST['rodjendanIzmena'])){
        $prijava = new Prijava($_POST['idIzmena'], $_POST['imeIzmena'], $_POST['prezimeIzmena'], $_POST['godineIzmena'], $_POST['polIzmena'], $_POST['ljstatusIzmena'], $_POST['rodjendanIzmena']); 
        $prijavaS = new PrijavaS($_POST['idIzmena'], $_POST['sliakIzmena']);
        $odg1 = PrijavaS::updateSlike($prijavaS, $conn);
        $odg = Prijava::updatePrijava($prijava, $conn);
    if($odg && $odg1){
        echo 'Success';
    }else{
        echo $odg;
        echo $odg1;
        echo "Failed";
    }
}

?> 