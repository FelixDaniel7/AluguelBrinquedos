
$(document).ready(function(){
    /*Pegar o form*/
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

                console.log(retorno);

                swal({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: true,
                    timer: 2000
                  }) 
                  botao.attr('disabled', false)     
            }
        })
        /*TESTE exibi os dados enviados por post*/
        console.log($(this).serialize());
        return false;/*Para parar*/
    });
});