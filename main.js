$('#dodajForm').submit(function(){
    event.preventDefault();
    console.log("Dodavanje");
    const $form =$(this);
    const $input = $form.find('input, button');

    const serijalizacija = $form.serialize();
    console.log(serijalizacija);



    $input.prop('disabled', true);

    req = $.ajax({
        url: 'handler/add.php',
        type:'post',
        data: serijalizacija
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=='Success'){
            alert("Osoba je dodata");
            console.log("Dodata osoba");
            location.reload(true);
        }else console.log("Osoba nije dodata "+res);
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
});

function obrisi($x){
    console.log("Brisanje");

    req = $.ajax({
        url: 'handler/delete.php',
        type:'post',
        data: {'id':$x}
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
           alert('Obrisan partner');
           console.log('Obrisan');
           window.location.href = 'lista.php';
        }else {
        console.log("Partner nije obrisan "+res);
        alert("partner nije obrisan ");
        }
        console.log(res);
    });

};
