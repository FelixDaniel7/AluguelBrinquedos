
$(document).ready(function(){
    /*Pegar o form*/

    //import Swal as  from '../js/sweetalert.js';

    $('form[name="form_cad_equipamento"]').submit(function(){

        /*Colocar os dados do form em uma variavel*/
        var formEqui = $(this)
        /*Pegar o botao q faz o sumit no form 
        apenas para dar efeito depois*/
        var botao = $(this).find(':button')

        $.ajax({
            url: "../controller/equipamento.controller.php",
            type: "POST",
            data: "acao=cadastrar_equi&" + formEqui.serialize(),
            beforeSend: function(){
                botao.attr('disabled', true)
            },
            success: function(retorno){
                //alert(retorno);

                console.log(retorno);
                

                //swal('Any fool can use a computer')

                swal({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                  })

                //console.log(retorno);
                
            }
        })

        /*TESTE exibi os dados enviados por post*/
        //console.log($(this).serialize());
        
        //Swal.fire('Any fool can use a computer');

        return false;/*Para parar */


    });
});