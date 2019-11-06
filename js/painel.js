$(document).ready(function(){
    
    var janela = $('#janela')
    var conteudo = $('.modal-body')

    janela.click(function(){
        
        $.post('ajax/painel.controller.php',
            {acao: 'form_cad'},
        
            function(retorno){
                $('#myModal').modal({backdrop: 'static'})//para modal não fechar

                conteudo.html(retorno)
            })      
    })

    //recuperar o formulario com o post
    $("#myModal").on('submit','form[name="form_cad"]', function(){
        var form = $(this)
        var botao = form.find(':button')

        $.ajax({
            url: 'ajax/controller.php',
            type: 'POST',
            data: 'acao=cadastro&'+ form.serialize(),//pega tudo do formulario
            beforeSend : function(){
                botao.attr('disabled', true)
                $('.load').fadeIn('slow')
            },
            success: function(retorno){

                botao.attr('disabled', false)
                $('.load').fadeOut('slow')

                if (retorno == 'cadastrou') {
                    form.fadeOut('slow', function() {
                        msg('Administrador cadastrado com sucessso', 'sucesso')    
                        ListarAdmin('ajax/painel.controller.php', 'listar_admin', true)
                    })
                    
                }
                else{
                    msg('Erro ao cadastrar administrador', 'erro')
                }
            }
        })
        return false;
    })

    //btn edit
    //encapsular a table
    $('.table').on('click', '#btn_edit', function(){
        var id = $(this).attr('data-id')//proprio botao

        //form ja preenchido
        $.post('ajax/painel.controller.php', {acao: 'form_edit', id: id}, function(retorno){
            $('#myModal').modal({backdrop: 'static'})//para modal não fechar

            conteudo.html(retorno)
        })
        return false;//para nao atualizar a pagina 
    })

    //btn atualiza

    $('#myModal').on('submit', 'form[name="form_edit"]', function(){
        
        var dados = $(this)
        var botao = dados.find(':button')

        $.ajax({
            url: 'ajax/controller.php',
            type: 'POST',
            data: 'acao=edit&' + dados.serialize(),
            beforeSend: function(){
                botao.attr('disabled', true)
                $('.load').fadeIn('slow')
            },
            success: function(retorno){
                if (retorno == 'atualizou') {
                    dados.fadeOut('slow', function() {
                        msg('Administrador atualizado', 'sucesso')    
                        ListarAdmin('ajax/painel.controller.php', 'listar_admin', true)
                    })
                }else{
                    msg('Você não alterou nenhum dado do administrador', 'alerta')          
                    $('.load').fadeOut('slow', function(){
                        botao.attr('disabled', false)
                    })
                }
            }
        })
        return false // para nao recaregar a pagina 
    })

    //BTN EXCLUIR
    $('.table').on('click', '#btn_excluir', function(){
        var id = $(this).attr('data-id')//recuperar o atributo dele


        if (confirm('Você deseja realmente excluir esse administrador ?')) {
            $.post('ajax/controller.php', {acao: 'excluir', id: id}, function(retorno){
                
                if (retorno == 'deletou') {
                    alert('Deletou')
                    ListarAdmin('ajax/painel.controller.php', 'listar_admin', true)
                }else{
                    alert('Erro ao deletar')
                }

            })
        }else{
            return false
        }

    })

    
    function ListarAdmin(url, acao, atualiza){
        $.post(url, {acao: acao}, function(retorno){
            var tbody = $('.table').find('tbody')
            var load = tbody.find('.load')

            if (atualiza == true) {
                tbody.html(retorno)
            }else{
                load.fadeOut('slow', function(){
                    tbody.html(retorno)
                })
            }
        })
    }

    ListarAdmin('ajax/painel.controller.php', 'listar_admin')

    function msg(msg,tipo){
        var retorno = $('.retorno');
        
        //validar o tipo da mensagem
        var tipo =  (tipo === 'sucesso') ? 'success' : 
                    (tipo ==='alerta')   ? 'warning' :
                    (tipo === 'erro')    ? 'danger' :
                    (tipo === 'info')    ? 'info' : 
                    alert('INFORME MENSAGENS DE SUCCESSO,ALERTA,ERRO E INFO');

        retorno.empty().fadeOut('fast', function(){
            return $(this).html('<div class="alert alert-'+tipo+'">'+msg+'</div>').fadeIn('slow')
        });
        setTimeout(function(){
            retorno.fadeOut('slow').empty()
        }, 6000)
    }
})