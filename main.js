$('#btn-obrisi').click(function(){
    console.log("Brisanje");

    const checked = $('input[name=checked-donut]:checked');

    req = $.ajax({
        url: 'handler/delete.php',
        type:'post',
        data: {'id':checked.val()}
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
           checked.closest('tr').remove();
           alert('Obrisan kolokvijum');
           console.log('Obrisan');
        }else {
        console.log("Kolokvijum nije obrisan "+res);
        alert("Kolokvijum nije obrisan ");

        }
        console.log(res);
    });

});
