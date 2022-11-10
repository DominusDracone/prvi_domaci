function obrisi($x){
    console.log("Brisanje");

    req = $.ajax({
        url: 'handler/delete.php',
        type:'post',
        data: {'ljubavnikId':$x}
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
           alert('Obrisan partner');
           console.log('Obrisan');
        }else {
        console.log("Partner nije obrisan "+res);
        alert("Partner nije obrisan ");

        }
        console.log(res);
    });

};