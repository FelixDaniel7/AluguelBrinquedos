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

                    form.fadeOut('fast')

                    $('#modal_usuario').modal('hide')

                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Usuário cadastrado !',
                        button: true,
                        timer: 600
                      }) 
                      botao.attr('disabled', false)

                      ConsultarUsuario("../controller/usuario.controller.php", "consultar_usu", true);
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

    function ConsultarUsuario(url,acao,atualiza){
            // $('#tabela_usuario').DataTable({
            // "ajax": {
            // "url": "../view/testtable.php",
            // "type": "POST"}
            // })
        
        $.post(
            url,
            {acao: acao},
            function(retorno){

                var tbody = $('#tabela_usuario').find('tbody')
                var imagem = tbody.find('.load')

                if (retorno == false) {
                    tbody.html('Nenhum registro');
                }
                else if(atualiza == true){
                    tbody.html(retorno);
                }
                else if(retorno != ''){
                    imagem.fadeOut('fast', function(){
                        tbody.html(retorno)
                    });
                }                
            }

        )    
    }
    ConsultarUsuario("../controller/usuario.controller.php", "consultar_usu");

    /**BOTAO EDITAR */
    $('#tabela_usuario').on('click', '#btn_editar', function(){
        var CodUsuario = $(this).attr('value')

        $.post(
            '../controller/usuario.controller.php',
            {acao: 'form_editar_usu',
            CodUsuario : CodUsuario},
            function(retornoform){
                $('#modal_usuario').modal({backdrop: true})

                conteudo_modal.html(retornoform);
                var modal_usuario = $('#modal_usuario');
                modal_usuario.find('.modal-title').text('Editar Usuário');

            })
            console.log(CodUsuario);        
    })

    /**BOATO ATUALIZAR */
    $('#modal_usuario').on('submit','form[name="form_editar_usuario"]', function(){
        var form = $(this)
        var btn_atualiza  = form.find('#btn_atualiza');

    

        $.ajax({
            url: '../controller/usuario.controller.php',
            type: 'POST',
            data: 'acao=editar_usu&' + form.serialize(),
            beforeSend: function(){
                btn_atualiza.attr('disabled', true)
            },
            success: function(retorno){
                console.log(retorno)
                
                if (retorno == 1) {//1 = true
                    form.fadeOut('fast')

                    $('#modal_usuario').modal('hide')
                            
                    swal({
                        title: 'Atualizado com sucesso !',
                        icon: 'success',
                        timer: 600
                    })
                    ConsultarUsuario('../controller/usuario.controller.php','consultar_usu',true)                    
                }
                else{
                    swal({
                        title: 'Você não alterou nenhum dado !',
                        icon: 'info',
                        timer: 600
                    })
                    btn_atualiza.attr('disabled',false)
                }
            }
        })
        return false
    })


    /**EXCLUIR */
    $('#tabela_usuario').on('click', '#btn_excluir', function(){
        var CodUsuario = $(this).attr('value')

        if (
            swal({
                title: "Você tem certeza ?",
                text: "Está ação ira deletar todos os dados desse usuário",
                icon: "warning",
                buttons: ['Cancelar','Continuar'],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    /*Passar o cod para o metodo deletar*/
                    $.post("../controller/usuario.controller.php",
                        {acao: 'excluir_usu', 
                        CodUsuario: CodUsuario}, 
                        function(retorno){//retorna se deu certo ou nao
                            console.log(retorno);
                            
                            if (retorno == true) {//1=TRUE
                                
                                swal({
                                    title: "Deletado com sucesso !", 
                                    icon: "success",
                                    timer: 600
                                })
                                //atualiza a tabela
                                ConsultarUsuario('../controller/usuario.controller.php','consultar_usu',true)

                            } else {
                                //se deu algo errado ao deletar
                                swal({
                                    title: "Erro ao deletar usuário !", 
                                    icon: "error",
                                })
                            }

                        })
                } 
                else {
                    //cancelar a ação
                    swal({
                        title: "Essa ação foi cancelada !",
                        icon: "info"
                    })
                }
            })
            ){

        }else{
            return false; //se deu muitaaaa merda e tudo deu errado
            console.log('Deu muito ruim ao deletar');
        }
    })


    /**LOGIN */

})