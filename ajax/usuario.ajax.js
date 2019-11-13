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


})