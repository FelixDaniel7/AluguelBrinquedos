$(document).ready(function(){

    var btn_cad = $('#btn_cadastra_usu')

    var conteudo_modal = $('#modal_usuario').find('.modal-body')

    //carregar o form na modal ao clicar no botao
    btn_cad.click(function(){

        $.post('../controller/usuario.controller.php',
            {acao: 'form_cadastrar_usu'},
            
            
            function(formRetornado){
                $('#modal_usuario').modal({backdrop: true})

                conteudo_modal.html(formRetornado)
            })
    })

    /**CADASTRAR USUARIO*/
    $('#modal_usuario').on('submit','form[name="form_cad_usuario"]', function(){
        var form = $(this)

        var botao = $(this).find(':button')

        $.ajax({
            type: "POST",
            url: "../controller/usuario.controller.php",
            data: "acao=cadastrar_usu&" + form.serialize(),
            beforeSend: function(){
                botao.attr('disabled', true)
            },
            success: function (retorno) {
                console.log(retorno)
                if (retorno == true) {
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Usuário cadastrado !',
                        button: true,
                        timer: 900
                      }) 
                      botao.attr('disabled', false)
                }
                else{
                    swal({
                        title: "Erro ao cadastrar usuário !", 
                        icon: "error",
                    })
                    botao.attr('disabled', false)
                }
            }
        })
        return false
    })


})